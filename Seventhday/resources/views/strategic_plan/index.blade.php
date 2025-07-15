<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Scorecards</title>

    <!-- Embedded CSS -->
    <style>
        /* Custom Styles for Table */
        .table-wrapper {
            overflow-x: auto;
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            vertical-align: middle;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #c4c4c4;
            font-weight: bold;
            text-align: center;
        }

        .table td {
            text-align: center;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }

        /* Optional: Responsive table */
        @media (max-width: 768px) {
            .table-wrapper {
                overflow-x: auto;
            }
        }

        .navigation-links {
            margin: 20px 0;
            text-align: left;
        }

        .navigation-links a {
            text-decoration: none;
            color: #007bff;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s;
        }

        .navigation-links a:hover {
            background-color: #007bff;
            color: white;
        }

        .container {
            margin-top: 25px;
        }

        .prepared {
            margin-top: -10px;
        }

        .action-button {
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            margin: 2px;
            text-decoration: none;
        }

        .edit-button {
            background-color: #28a745;
        }

        .edit-button:hover {
            background-color: #218838;
        }

        .delete-button {
            background-color: #dc3545;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        .navigation-links {
        display: flex;
        flex-wrap: wrap; /* Ensures links wrap on smaller screens */
        gap: 10px; /* Adds spacing between links */
        justify-content: center; /* Centers the links */
        margin: 20px 0;
    }

    .navigation-links a {
        display: inline-block;
        text-decoration: none;
        color: #007bff;
        padding: 10px 20px;
        border: 1px solid #007bff;
        border-radius: 5px;
        transition: background-color 0.3s;
        text-align: center;
    }

    .navigation-links a:hover {
        background-color: #007bff;
        color: white;
    }

    .navigation-links .clear-button {
        color: red;
        border-color: red;
    }

    .navigation-links .clear-button:hover {
        background-color: red;
        color: white;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .navigation-links a {
            width: 100%; /* Make each link take full width on smaller screens */
            text-align: center;
        }
    }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center mb-4">UNIVERSITY SEVENTH DAY ADVENTIST CHURCH </h2>
        @foreach ($detaile as $detail)
            <h2 class="text-center mb-4">{{ $detail->department_name }}</h2>
            <h3 class="text-center mb-4">{{ $detail->quoter }}</h3>
        @endforeach

        <!-- Navigation Links -->
        <!-- Navigation Links -->
        <div class="navigation-links">
            <a class="nav-link" href="{{ url('/redirected') }}">Back to Dashboard</a>
            <a href="{{ route('strategic_plan.create') }}">Create Scorecard</a>
            <a href="{{ route('strategic_plan.details') }}">Add Details</a>
            <a href="{{ route('strategic_plan.export-pdf') }}">Export to PDF</a>
            <a href="{{ route('strategic_plan.clear-details') }}"
                onclick="return confirm('Are you sure you want to clear all details?')" style="color: red;">Clear All
                Details</a>
            <a href="{{ route('strategic_plan.clear-scorecard') }}"
                onclick="return confirm('Are you sure you want to clear all details?')" style="color: red;">Clear
                Scorecard
            </a>
        </div>

        <!-- Scorecard Table -->
        <div class="table-wrapper">
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Strategic Theme</th>
                        <th rowspan="2">Strategic Area</th>
                        <th rowspan="2">Strategic Objective</th>
                        <th rowspan="2">KPI</th>
                        <th rowspan="2">Initiatives/Activities</th>
                        <th colspan="4" class="text-center">Target (%)</th>
                        <th colspan="2" class="text-center">Timing</th>
                        <th rowspan="2">Resource Persource</th>
                        <th rowspan="2">Budget Per Initiative</th>
                        <th rowspan="2">Comments</th>
                        <th colspan="2" class="text-center">Actions</th>
                    </tr>
                    <tr>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                

                <tbody>
                    @php
                        $groupedScores = $scores->groupBy(fn($item) => $item->no . '-' . $item->kpi);
                        $totalBudget = 0;
                    @endphp
                
                    @foreach ($groupedScores as $group)
                        @foreach ($group as $index => $score)
                            @php $totalBudget += $score->budget_perinitiative; @endphp
                            <tr>
                                @if ($index === 0)
                                    <td rowspan="{{ $group->count() }}">{{ $score->no }}</td>
                                    <td rowspan="{{ $group->count() }}">{{ $score->strategic_theme }}</td>
                                    <td rowspan="{{ $group->count() }}">{{ $score->strategic_area }}</td>
                                @endif
                
                                <td>{{ $score->strategic_objective }}</td>
                
                                @if ($index === 0)
                                    <td rowspan="{{ $group->count() }}">{{ $score->kpi }}</td>
                                @endif
                
                                <td>{{ $score->initiatives_activities }}</td>
                                <td>{{ $score->q1_target }}%</td>
                                <td>{{ $score->q2_target }}%</td>
                                <td>{{ $score->q3_target }}%</td>
                                <td>{{ $score->q4_target }}%</td>
                                <td>{{ \Carbon\Carbon::parse($score->start_date)->format('d M, Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($score->end_date)->format('d M, Y') }}</td>
                                <td>{{ $score->resource_person }}</td>
                                <td>{{ $currencySymbol . number_format($score->budget_perinitiative) }}</td>
                                <td>{{ $score->comments }}</td>
                                <td>
                                    <a href="{{ route('strategic_plan.edit', $score->id) }}" class="action-button edit-button">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('scorecard.destroy', $score->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-button delete-button"
                                            onclick="return confirm('Are you sure you want to delete this scorecard?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
                

                <tfoot>
                    <tr>
                        <td colspan="12" class="text-end"><strong>Total Budget:</strong></td>
                        <td colspan="5" class="text-center"><strong>{{ $currencySymbol . number_format($totalBudget, 2) }}</strong></td>
                    </tr>
                </tfoot>
                
            </table>
            <div class="prepared">

                <p>
                    <strong>Leader:</strong>
                    @foreach ($detaile as $detail)
                        {{ $detail->leader }}
                    @endforeach
                    <br>
                    <strong>Elder in Charge:</strong>
                    @foreach ($detaile as $detail)
                        {{ $detail->elder_in_charge }}
                    @endforeach <br><br>
                    @php
                        // Split the explanation into an array of lines
                        $explanations = [];
                        foreach ($detaile as $detail) {
                            $lines = explode("\n", $detail->explanation); // Split by newline
                            $explanations = array_merge($explanations, $lines); // Merge all lines into a single array
                        }
                    @endphp

                    @if (!empty($explanations))
                        <ol>
                            @foreach ($explanations as $index => $line)
                                @if (!empty(trim($line)))
                                    <!-- Ignore empty lines -->
                                    <li>{{ $line }}</li>
                                @endif
                            @endforeach
                        </ol>
                    @else
                        <p>No explanations available.</p>
                    @endif

                </p>

            </div>

        </div>
    </div>
    </div>

</body>

</html>
