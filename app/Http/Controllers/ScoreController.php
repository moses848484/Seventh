<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detaile;
use App\Models\score;
use Illuminate\Support\Facades\Gate;
use PDF; // Include Laravel PDF package (e.g., dompdf or snappy)

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::all();
        $detaile = Detaile::all();
        $currencySymbol = 'K '; // Define your currency symbol here
        $scores = Score::orderBy('no')->orderBy('kpi')->get(); // Order by 'no' and then 'kpi'
        $selectedYear = $scores->first()->year ?? now()->year;
        return view('strategic_plan.index', compact('scores', 'selectedYear', 'currencySymbol', 'detaile'));
    }

    public function create()
    {
        return view('strategic_plan.create');
    }

    public function details()
    {
        // Pass any necessary data to the view
        return view('strategic_plan.details');
    }

    // Handle form submission
    public function detail(Request $request)
    {
        $data = $request->validate([
            'department_name' => 'nullable|string|max:255',
            'quoter' => 'nullable|string|max:255',
            'leader' => 'nullable|string|max:255',
            'elder_in_charge' => 'nullable|string|max:255',
            'explanation' => 'nullable|string|max:5055'
        ]);

        // Validate 'quoter' manually
        if (!is_null($request->quoter) && !is_numeric($request->quoter) && !is_string($request->quoter)) {
            return redirect()->back()->withErrors(['quoter' => 'The quoter date must be either an integer or a string.']);
        }

        // Validate 'explanation' manually
        if (!is_null($request->explanation) && !is_numeric($request->explanation) && !is_string($request->explanation)) {
            return redirect()->back()->withErrors(['explanation' => 'The explanation must be either an integer or a string.']);
        }

        // Create the scorecard entry in the database
        detaile::create($data);

        // Redirect back to the scorecard index page with a success message
        return redirect()->route('strategic_plan.index')->with('success', 'Scorecard created successfully');
    }

    public function clearDetails()
    {
        // Clear all details from the database
        Detaile::truncate(); // This will remove all records from the 'details' table

        // Redirect back to the scorecard index page with a success message
        return redirect()->route('strategic_plan.index')->with('success', 'All details cleared successfully');
    }

    public function clearScorecard()
    {
        // Clear all details from the database
        Score::truncate(); // This will remove all records from the 'details' table

        // Redirect back to the scorecard index page with a success message
        return redirect()->route('strategic_plan.index')->with('success', 'All details cleared successfully');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'no' => 'required|integer',
            'strategic_theme' => 'required|string',
            'strategic_area' => 'required|string',
            'strategic_objective' => 'required|string',
            'kpi' => 'required|string',
            'initiatives_activities' => 'required|string',
            'year' => 'required|integer',
            'q1_target' => 'numeric|min:0|max:100',
            'q2_target' => 'numeric|min:0|max:100',
            'q3_target' => 'numeric|min:0|max:100',
            'q4_target' => 'numeric|min:0|max:100',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'resource_persource' => 'nullable|string|max:255',
            'budget_perinitiative' => 'required|integer|min:0',
            'comments' => 'nullable|string',
            'department_name' => 'nullable|string|max:255',
            'quoter' => 'nullable|string|max:255',
            'leader' => 'nullable|string|max:255',
            'explanation' => 'nullable|string|max:5055',
            'elder_in_charge' => 'nullable|string|max:255',
        ]);

        // Calculate the average progress
        $progress = ($data['q1_target'] + $data['q2_target'] + $data['q3_target'] + $data['q4_target']) / 4;

        // Determine status color based on progress
        if ($progress == 0) {
            $data['status_color'] = 'red'; // No progress
        } elseif ($progress > 0 && $progress < 100) {
            $data['status_color'] = 'orange'; // In progress
        } elseif ($progress == 100) {
            $data['status_color'] = 'green'; // Completed
        }

        // Create the scorecard entry in the database
        Score::create($data);

        // Redirect back to the scorecard index page with a success message
        return redirect()->route('strategic_plan.index')->with('success', 'Scorecard created successfully');
    }

    public function destroy($id)
    {
        // Find the scorecard by its ID
        $score = Score::findOrFail($id);

        // Delete the scorecard
        $score->delete();

        // Redirect back or send a response
        return redirect()->route('strategic_plan.index')->with('success', 'Scorecard deleted successfully.');
    }

    // Edit scorecard form
    public function edit($id)
    {
        $score = Score::find($id);
        return view('strategic_plan.edit', compact('score'));
    }

    // Update scorecard data
    public function update(Request $request, $id)
    {
        $request->validate([
            'strategic_theme' => 'required|string',
            'strategic_area' => 'required|string',
            'strategic_objective' => 'required|string',
            'kpi' => 'required|string',
            'initiatives_activities' => 'required|string',
            'q1_target' => 'required|numeric',
            'q2_target' => 'required|numeric',
            'q3_target' => 'required|numeric',
            'q4_target' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'resource_persource' => 'nullable|string',
            'budget_perinitiative' => 'required|numeric',
            'comments' => 'nullable|string',
        ]);

        $score = Score::findOrFail($id);
        $score->update($request->all());

        return redirect()->route('strategic_plan.index')->with('success', 'Scorecard updated successfully!');
    }

    public function exportPdf()
    {
        $scores = Score::all();
        $detaile = detaile::all();
        $currencySymbol = 'K '; // Define your currency symbol here
        $selectedYear = $scores->first()->year ?? now()->year;
        // Get scorecards data
        $scores = Score::all();  // Modify this to get the actual scorecards data

        // Generate the PDF with the selected year and scorecards
        $pdf = PDF::loadView('strategic_plan.pdf', compact('scores', 'selectedYear', 'currencySymbol', 'detaile')); // Passing both variables

        return $pdf->download('strategic_plan.pdf');
    }
}
