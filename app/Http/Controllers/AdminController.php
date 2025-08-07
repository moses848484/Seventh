<?php

namespace App\Http\Controllers;

use App\Models\Department;

use App\Models\Givings;

use Illuminate\Http\Request;

use App\Models\Members;

use App\Models\User;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use App\Models\Inventory;

use App\Models\Schedule;

use App\Models\Event;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use App\Models\Scorecard;

use App\Models\details;

use PDF; // Include Laravel PDF package (e.g., dompdf or snappy)

class AdminController extends Controller
{
    public function view_members()
    {
        return view('admin.members');
    }

    public function time_management()
    {
        return view('admin.time_management');
    }

    public function departments()
    {
        return view('admin.departments');
    }

    public function view_givings()
    {
        return view('admin.givings');
    }

    public function see_members()
    {

        $data = members::all();

        $memberCount = members::count(); // Count the number of members

        return view('admin.seemember', compact('data', 'memberCount'));
    }

    public function update_account()
    {
        $data = Members::all(); // Fetch all members
        return view('home.update', compact('data')); // Pass data to the view
    }


    public function see_givings()
    {
        $givings = Givings::all();
        $totalamount = $givings->sum('amount'); // Calculate the total amount
        $givingCount = Givings::count(); // Count the number of givings

        return view('admin.seegivings', compact('givings', 'givingCount', 'totalamount'));
    }

    public function see_users()
    {
        $users = User::all();
        $userCount = User::count(); // Count the number of users

        return view('admin.seeusers', compact('users', 'userCount'));
    }

    public function add_members(Request $request)
    {
        // Step 1: Debug - Check if request is received
        \Log::info('Member registration attempt started', [
            'request_data' => $request->except(['document', '_token']),
            'has_document' => $request->hasFile('document'),
            'php_upload_max_filesize' => ini_get('upload_max_filesize'),
            'php_post_max_size' => ini_get('post_max_size'),
            'php_max_file_uploads' => ini_get('max_file_uploads')
        ]);

        try {
            // Step 2: Validate the incoming request data
            $validatedData = $request->validate([
                'fname' => 'required|string|max:255',
                'mname' => 'nullable|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|email|unique:members,email',
                'address' => 'required|string|max:255',
                'mobile' => 'required|string|max:15',
                'occupation' => 'required|string|max:255',
                'registeras' => 'required|string|max:255',
                'registrationdate' => 'required|date',
                'gender' => 'required|string|max:10',
                'birthday' => 'required|date',
                'ministry' => 'required|string|max:255',
                'marital' => 'required|string|max:255',
                'document' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            ]);

            \Log::info('Validation passed successfully');

            // Step 3: Handle file upload
            $documentname = null;
            if ($request->hasFile('document')) {
                \Log::info('Document file found, processing upload');

                $document = $request->file('document');

                if (!$document->isValid()) {
                    \Log::error('Invalid file uploaded', [
                        'error' => $document->getError(),
                        'error_message' => $document->getErrorMessage()
                    ]);
                    return redirect()->back()->withErrors(['document' => 'Invalid file uploaded: ' . $document->getErrorMessage()])->withInput();
                }

                \Log::info('File validation passed', [
                    'original_name' => $document->getClientOriginalName(),
                    'size' => $document->getSize(),
                    'mime_type' => $document->getMimeType(),
                    'extension' => $document->getClientOriginalExtension()
                ]);

                try {
                    // Check if Str helper is available
                    if (!class_exists('Illuminate\Support\Str')) {
                        \Log::error('Str class not found');
                        return redirect()->back()->withErrors(['document' => 'System configuration error.'])->withInput();
                    }

                    // Generate unique filename like profile photos
                    $documentname = \Illuminate\Support\Str::random(40) . '.' . $document->getClientOriginalExtension();

                    \Log::info('Generated filename', ['filename' => $documentname]);

                    // First, ensure the storage link exists
                    $storagePath = public_path('storage');
                    if (!file_exists($storagePath)) {
                        \Log::warning('Storage symlink does not exist', ['path' => $storagePath]);
                    }

                    // Store directly in public/storage/baptism-certificates (matches profile-photos structure)
                    $stored = $document->storeAs('baptism-certificates', $documentname, 'public');

                    if (!$stored) {
                        throw new \Exception('Failed to store file using Laravel Storage');
                    }

                    \Log::info('File stored successfully using Laravel Storage', [
                        'storage_path' => $stored,
                        'filename' => $documentname,
                        'public_path' => 'storage/baptism-certificates/' . $documentname,
                        'full_path' => storage_path('app/public/baptism-certificates/' . $documentname),
                        'accessible_url' => asset('storage/baptism-certificates/' . $documentname)
                    ]);

                } catch (\Exception $storageException) {
                    \Log::error('Laravel Storage failed, trying direct upload', [
                        'error' => $storageException->getMessage(),
                        'trace' => $storageException->getTraceAsString()
                    ]);

                    // Fallback method: Direct file system upload to public/storage
                    try {
                        $uploadPath = public_path('storage/baptism-certificates');

                        \Log::info('Attempting direct upload', [
                            'upload_path' => $uploadPath,
                            'path_exists' => file_exists($uploadPath),
                            'parent_exists' => file_exists(dirname($uploadPath)),
                            'parent_writable' => is_writable(dirname($uploadPath))
                        ]);

                        // Create directory if it doesn't exist
                        if (!file_exists($uploadPath)) {
                            $created = mkdir($uploadPath, 0755, true);
                            \Log::info('Directory creation attempt', [
                                'path' => $uploadPath,
                                'success' => $created,
                                'exists_after' => file_exists($uploadPath)
                            ]);

                            if (!$created) {
                                throw new \Exception('Failed to create upload directory');
                            }
                        }

                        // Check if directory is writable
                        if (!is_writable($uploadPath)) {
                            $chmodResult = chmod($uploadPath, 0755);
                            \Log::info('Chmod attempt', [
                                'path' => $uploadPath,
                                'success' => $chmodResult,
                                'writable_after' => is_writable($uploadPath)
                            ]);
                        }

                        // Generate filename if not already done
                        if (!$documentname) {
                            $documentname = \Illuminate\Support\Str::random(40) . '.' . $document->getClientOriginalExtension();
                        }

                        $targetPath = $uploadPath . DIRECTORY_SEPARATOR . $documentname;
                        \Log::info('Moving file', [
                            'from' => $document->getRealPath(),
                            'to' => $targetPath,
                            'filename' => $documentname
                        ]);

                        $moved = $document->move($uploadPath, $documentname);

                        if (!$moved) {
                            throw new \Exception('Failed to move uploaded file to: ' . $targetPath);
                        }

                        // Verify file was moved
                        if (!file_exists($targetPath)) {
                            throw new \Exception('File move reported success but file not found at: ' . $targetPath);
                        }

                        \Log::info('File uploaded successfully using direct method', [
                            'filename' => $documentname,
                            'path' => $targetPath,
                            'file_size' => filesize($targetPath),
                            'public_url' => 'storage/baptism-certificates/' . $documentname
                        ]);

                    } catch (\Exception $directException) {
                        \Log::error('Both upload methods failed', [
                            'storage_error' => $storageException->getMessage(),
                            'direct_error' => $directException->getMessage(),
                            'upload_path' => isset($uploadPath) ? $uploadPath : 'not_set',
                            'upload_path_exists' => isset($uploadPath) ? file_exists($uploadPath) : false,
                            'upload_path_writable' => isset($uploadPath) ? is_writable($uploadPath) : false
                        ]);
                        return redirect()->back()->withErrors(['document' => 'Failed to upload file. Error: ' . $directException->getMessage()])->withInput();
                    }
                }
            } else {
                \Log::error('No document file found in request', [
                    'files' => $request->allFiles(),
                    'has_file_method' => method_exists($request, 'hasFile')
                ]);
                return redirect()->back()->withErrors(['document' => 'No file was uploaded.'])->withInput();
            }

            // Step 4: Create database record
            \Log::info('Starting database insert', ['document_name' => $documentname]);

            // Check if members model exists and is accessible
            if (!class_exists('App\\Models\\Members')) {
                \Log::error('Members model not found', [
                    'class_exists' => class_exists('App\\Models\\Members'),
                    'model_path' => app_path('Models/Members.php'),
                    'model_file_exists' => file_exists(app_path('Models/Members.php'))
                ]);
                return redirect()->back()->withErrors(['error' => 'System configuration error: Members model not found.'])->withInput();
            }

            $data = new \App\Models\Members();
            $data->fname = $validatedData['fname'];
            $data->mname = $validatedData['mname'];
            $data->lname = $validatedData['lname'];
            $data->email = $validatedData['email'];
            $data->address = $validatedData['address'];
            $data->mobile = $validatedData['mobile'];
            $data->occupation = $validatedData['occupation'];
            $data->registeras = $validatedData['registeras'];
            $data->registrationdate = $validatedData['registrationdate'];
            $data->gender = $validatedData['gender'];
            $data->birthday = $validatedData['birthday'];
            $data->ministry = $validatedData['ministry'];
            $data->marital = $validatedData['marital'];
            $data->document = $documentname;

            \Log::info('Attempting to save member data', [
                'data' => $data->toArray()
            ]);

            // Save to database
            $saved = $data->save();

            if (!$saved) {
                \Log::error('Failed to save member to database');
                return redirect()->back()->withErrors(['error' => 'Failed to save member data.'])->withInput();
            }

            \Log::info('Member saved successfully', [
                'member_id' => $data->id,
                'document_filename' => $documentname
            ]);

            // Step 5: Success response
            return redirect()->back()->with('message', 'Member Added Successfully');

        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation failed', [
                'errors' => $e->errors(),
                'input' => $request->except(['document', '_token'])
            ]);
            return redirect()->back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            // Enhanced error logging for debugging
            \Log::error('Member registration failed with exception', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->except(['document', '_token']),
                'has_file' => $request->hasFile('document'),
                'app_env' => config('app.env'),
                'storage_path' => storage_path('app/public'),
                'storage_writable' => is_writable(storage_path('app/public')),
                'public_storage_path' => public_path('storage'),
                'public_storage_exists' => file_exists(public_path('storage')),
                'php_version' => PHP_VERSION,
                'laravel_version' => app()->version()
            ]);

            // Return user-friendly error with specific issue if possible
            $errorMessage = 'Registration failed: ';

            if (str_contains($e->getMessage(), 'SQLSTATE') || str_contains($e->getMessage(), 'database')) {
                $errorMessage .= 'Database connection issue.';
            } elseif (str_contains($e->getMessage(), 'file') || str_contains($e->getMessage(), 'upload') || str_contains($e->getMessage(), 'storage')) {
                $errorMessage .= 'File upload issue - ' . $e->getMessage();
            } elseif (str_contains($e->getMessage(), 'permission')) {
                $errorMessage .= 'Permission issue - ' . $e->getMessage();
            } elseif (str_contains($e->getMessage(), 'Class') && str_contains($e->getMessage(), 'not found')) {
                $errorMessage .= 'System configuration error - ' . $e->getMessage();
            } else {
                $errorMessage .= $e->getMessage();
            }

            return redirect()->back()->withErrors(['error' => $errorMessage])->withInput();
        }
    }

    public function add_givings(Request $request)
    {

        $givings = new Givings;
        $givings->fname = $request->fname;
        $givings->mname = $request->mname;
        $givings->lname = $request->lname;
        $givings->giving = $request->giving;
        $givings->amount = $request->amount;
        $givings->mobile = $request->mobile;
        $givings->comment = $request->comment;
        $givings->save();

        return redirect()->back()->with('message', 'Giving Received Successfully');
    }
    public function delete_members($id)
    {
        $data = members::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Member Deleted Successfully');
    }

    public function delete_strategicplan($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect()->back()->with('message', 'Strategic Plan Deleted Successfully');
    }

    public function delete_givers($id)
    {
        $givings = Givings::find($id);
        $givings->delete();
        return redirect()->back()->with('message', 'Giving Deleted Successfully');
    }

    public function delete_users($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back()->with('message', 'User Deleted Successfully');
    }

    public function view_inventory()
    {
        $inventory = Inventory::all();
        return view('admin.inventory', compact('inventory'));
    }

    public function weekly_schedule()
    {
        $schedule = Schedule::all();
        return view('admin.weekly_schedule', compact('schedule'));
    }

    public function first_quoter()
    {
        $department = Department::all();
        return view('admin.first_quoter', compact('department'));
    }

    public function insert_schedule()
    {
        $schedule = Schedule::all();
        return view('admin.add_schedule', compact('schedule'));
    }

    public function insert_strategicplan()
    {
        $department = Department::all();
        return view('admin.add_strategicplan', compact('department'));
    }

    public function insert_event()
    {
        $event = Event::all();
        $hours = range(0, 23);
        $minutes = range(0, 59);
        return view('admin.addevent', compact('event', 'hours', 'minutes'));
    }

    public function add_inventory(Request $request)
    {

        $inventory = new Inventory;
        $inventory->title = $request->title;
        $inventory->description = $request->description;
        $inventory->price = $request->price;
        $inventory->quantity = $request->quantity;
        $inventory->category = $request->category;
        $inventory->condition = $request->condition;
        $inventory->serial_number = $request->serial_number;
        $inventory->purchase_date = $request->purchase_date;
        $inventory->qr_code = $request->qr_code;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('inventory', $imagename);
        $inventory->image = $imagename;
        $inventory->save();

        return redirect()->back()->with('message', 'Equipment Added Successfully');
    }

    public function add_event(Request $request)
    {

        $event = new Event;
        $event->name = $request->name;
        $event->details = $request->details;
        $event->countdown_hours = $request->countdown_hours;
        $event->countdown_minutes = $request->countdown_minutes;
        $event->countdown_seconds = $request->countdown_minutes;
        $event->added_by = $request->added_by;
        $event->save();

        return redirect()->back()->with('message', 'Event Added Successfully');
    }

    public function show_inventory()
    {

        $inventory = Inventory::all();
        $inventoryCount = Inventory::count(); // Count the number of inventory
        return view('admin.show_inventory', compact('inventory', 'inventoryCount'));
    }

    public function delete_inventory($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();
        return redirect()->back()->with('message', 'Equipment Deleted Successfully');
    }


    public function add_schedule(Request $request)
    {

        $schedule = new Schedule;
        $schedule->date = $request->date;
        $schedule->theme = $request->theme;
        $schedule->elder_on_duty_1 = $request->elder_on_duty_1;
        $schedule->elder_on_duty_2 = $request->elder_on_duty_2;
        $schedule->save();
        return redirect()->back()->with('message', 'Schedule Added Successfully');
    }

    public function add_strategicplan(Request $request)
    {

        $department = new Department;
        $department->no = $request->no;
        $department->strategic_areas = $request->strategic_areas;
        $department->strategic_theme = $request->strategic_theme;
        $department->strategic_objectives = $request->strategic_objectives;
        $department->kpis = $request->kpis;
        $department->initiatives = $request->initiatives;
        $department->status_color = $request->status_color;
        $department->total_target = $request->total_target;
        $department->q1 = $request->q1;
        $department->q2 = $request->q2;
        $department->q3 = $request->q3;
        $department->q4 = $request->q4;
        $department->budget_per_initiative = $request->budget_per_initiative;
        $department->explanation_of_variation = $request->explanation_of_variation;
        $department->resource_persource = $request->resource_persource;
        $department->start_date = $request->start_date;
        $department->end_date = $request->end_date;
        $department->save();
        return redirect()->back()->with('message', 'Strategic Plan Added Successfully');
    }

    // In ScheduleController.php
    public function view_schedule($id)
    {
        $item = Schedule::findOrFail($id);
        return view('admin.view_schedule', compact('item'));
    }

    public function delete_schedule($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();
        return redirect()->back()->with('message', 'Equipment Deleted Successfully');
    }


    public function update_member($id)
    {

        $data = members::find($id);
        return view('admin.updatemember', compact('data'));
    }
    public function update_registered(Request $request, $id)
    {
        $data = Members::find($id);

        // Update member details
        $data->fname = $request->fname;
        $data->mname = $request->mname;
        $data->lname = $request->lname;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->ministry = $request->ministry;
        $data->registeras = $request->registeras;
        $data->registrationdate = $request->registrationdate;
        $data->gender = $request->gender;
        $data->birthday = $request->birthday;
        $data->marital = $request->marital;

        // Handle the uploaded document
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentname = time() . '.' . $document->getClientOriginalExtension();
            $document->move('Baptism Certificates', $documentname);
            $data->document = $documentname;
        }

        $data->save();

        return redirect()->back()->with([
            'message' => 'Member Updated Successfully',
            'document' => $data->document
        ]);
    }


    public function update_user($id)
    {

        $users = User::find($id);
        return view('admin.updateuser', compact('users'));
    }

    public function update_users(Request $request, $id)
    {
        $users = User::find($id);

        $users->name = $request->name;

        $users->email = $request->email;

        $users->gender = $request->gender;

        $users->email = $request->email;

        $users->birthday = $request->birthday;

        $users->address = $request->address;

        $users->save();

        return redirect()->back()->with('message', 'User Updated Successfully');
    }



    public function update_inventory($id)
    {

        $inventory = Inventory::find($id);
        return view('admin.update_inventory', compact('inventory'));
    }

    public function update_equipment(Request $request, $id)
    {
        $inventory = Inventory::find($id);

        $inventory->title = $request->title;

        $inventory->description = $request->description;

        $inventory->price = $request->price;

        $inventory->quantity = $request->quantity;

        $inventory->category = $request->category;

        $inventory->condition = $request->condition;

        $inventory->serial_number = $request->serial_number;

        $inventory->qr_code = $request->qr_code;

        $inventory->purchase_date = $request->purchase_date;

        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('inventory', $imagename);

            $inventory->image = $imagename;
        }

        $inventory->save();

        return redirect()->back()->with('message', 'Equipment Updated Successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no',
            'strategic_theme',
            'strategic_area',
            'strategic_objective',
            'kpi',
            'initiatives_activities',
            'q1_target',
            'q2_target',
            'q3_target',
            'q4_target',
            'status_color',
            'status_label',
            'year',
            'explanation',
        ]);

        $scorecard = Scorecard::findOrFail($id);
        $scorecard->update($request->all());

        return redirect()->route('scorecard.index')->with('success', 'Scorecard updated successfully!');
    }


    public function index()
    {
        $scorecards = Scorecard::all();
        $details = Details::all();
        $currencySymbol = 'K '; // Define your currency symbol here
        $scorecards = Scorecard::orderBy('no')->orderBy('kpi')->get(); // Order by 'no' and then 'kpi'
        $selectedYear = $scorecards->first()->year ?? now()->year;
        return view('scorecard.index', compact('scorecards', 'selectedYear', 'currencySymbol', 'details'));
    }

    public function create()
    {
        return view('scorecard.create');
    }

    public function details()
    {
        // Pass any necessary data to the view
        return view('scorecard.details');
    }

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
        details::create($data);

        // Redirect back to the scorecard index page with a success message
        return redirect()->route('scorecard.index')->with('success', 'Scorecard created successfully');
    }

    public function clearDetail()
    {
        // Clear all details from the database
        Details::truncate(); // This will remove all records from the 'details' table

        // Redirect back to the scorecard index page with a success message
        return redirect()->route('scorecard.index')->with('success', 'All details cleared successfully');
    }

    public function clearScorecards()
    {
        // Clear all details from the database
        Scorecard::truncate(); // This will remove all records from the 'details' table

        // Redirect back to the scorecard index page with a success message
        return redirect()->route('scorecard.index')->with('success', 'All details cleared successfully');
    }

    public function destroy($id)
    {
        // Find the scorecard by its ID
        $scorecard = Scorecard::findOrFail($id);

        // Delete the scorecard
        $scorecard->delete();

        // Redirect back or send a response
        return redirect()->route('scorecard.index')->with('success', 'Scorecard deleted successfully.');
    }

    // Edit scorecard form
    public function edit($id)
    {
        $scorecard = Scorecard::find($id);
        return view('scorecard.edit', compact('scorecard'));
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
            'explanation' => 'nullable|string',
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
        Scorecard::create($data);

        // Redirect back to the scorecard index page with a success message
        return redirect()->route('scorecard.index')->with('success', 'Scorecard created successfully');
    }

    public function exportPdf()
    {
        $scorecards = Scorecard::all();
        $details = details::all();
        $currencySymbol = 'K '; // Define your currency symbol here
        $selectedYear = $scorecards->first()->year ?? now()->year;
        // Get scorecards data
        $scorecards = Scorecard::all();  // Modify this to get the actual scorecards data

        // Generate the PDF with the selected year and scorecards
        $pdf = PDF::loadView('scorecard.pdf', compact('scorecards', 'selectedYear', 'currencySymbol', 'details')); // Passing both variables

        return $pdf->download('scorecard.pdf');
    }
}

