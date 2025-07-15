<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorecards</title>

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
            /* Align links to the left */
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
            flex-wrap: wrap;
            /* Ensures links wrap on smaller screens */
            gap: 10px;
            /* Adds spacing between links */
            justify-content: center;
            /* Centers the links */
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
                width: 100%;
                /* Make each link take full width on smaller screens */
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center mb-4">UNIVERSITY SEVENTH DAY ADVENTIST CHURCH </h2>
        @foreach ($details as $detail)
            <h2 class="text-center mb-4">{{ $detail->department_name }}</h2>
            <h3 class="text-center mb-4">{{ $detail->quoter }}</h3>
        @endforeach

        <!-- Navigation Links -->
        <div class="navigation-links">
            <a class="nav-link" href="{{ url('/redirected') }}">Back to Dashboard</a>
            <a href="{{ route('scorecard.create') }}">Create Scorecard</a>
            <a href="{{ route('scorecard.details') }}">Add Details</a>
            <a href="{{ route('scorecard.export-pdf') }}">Export to PDF</a>
            <a href="{{ route('scorecard.clear-detail') }}"
                onclick="return confirm('Are you sure you want to clear all details?')" style="color: red;">Clear All
                Details</a>
            <a href="{{ route('scorecard.clear-scorecards') }}"
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
                        <th rowspan="2">Kpi</th>
                        <th rowspan="2">Initiatives/Activities</th>
                        <th colspan="5" class="text-center">Target</th>
                        <th rowspan="2">Status</th>
                        <th rowspan="2">Explanation</th>
                        <th colspan="2" class="text-center">Actions</th>
                    </tr>
                    <tr>
                        <th>{{ $selectedYear }}</th>
                        <th>Q1 (%)</th>
                        <th>Q2 (%)</th>
                        <th>Q3 (%)</th>
                        <th>Q4 (%)</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // Group scorecards by "no" and "kpi"
                        $groupedScorecards = $scorecards->groupBy(function ($item) {
                            return $item->no . '-' . $item->kpi;
                        });
                    @endphp

                    @foreach ($groupedScorecards as $groupKey => $group)
                        @php
                            $rowCount = $group->count(); // Number of rows in this group
                        @endphp

                        @foreach ($group as $index => $scorecard)
                            <tr>
                                @if ($index === 0)
                                    <!-- Only show "No" and "Kpi" values once, spanning the rows -->
                                    <td rowspan="{{ $rowCount }}" class="align-middle">{{ $scorecard->no }}</td>
                                @endif
                                @if ($index === 0)
                                    <!-- Only show "No" and "Kpi" values once, spanning the rows -->
                                    <td rowspan="{{ $rowCount }}" class="align-middle">
                                        {{ $scorecard->strategic_theme }}</td>
                                @endif
                                @if ($index === 0)
                                    <!-- Only show "No" and "Kpi" values once, spanning the rows -->
                                    <td rowspan="{{ $rowCount }}" class="align-middle">
                                        {{ $scorecard->strategic_area }}</td>
                                @endif

                                <td class="align-middle">{{ $scorecard->strategic_objective }}</td>
                                @if ($index === 0)
                                    <!-- Only show "No" and "Kpi" values once, spanning the rows -->
                                    <td rowspan="{{ $rowCount }}" class="align-middle">{{ $scorecard->kpi }}</td>
                                @endif
                                <td class="align-middle">{{ $scorecard->initiatives_activities }}</td>

                                @php
                                    // Calculate total progress from all quarters
                                    $totalProgress =
                                        $scorecard->q1_target +
                                        $scorecard->q2_target +
                                        $scorecard->q3_target +
                                        $scorecard->q4_target;

                                    // Determine the status based on total progress
                                    $statusColor = 'red';
                                    $statusText = 'No Activity Yet';
                                    if ($totalProgress > 0 && $totalProgress < 100) {
                                        $statusColor = 'orange';
                                        $statusText = 'In Progress';
                                    } elseif ($totalProgress >= 100) {
                                        $statusColor = 'green';
                                        $statusText = 'Completed';
                                    }
                                @endphp
                                <!-- Year column now displays total progress -->
                                <td class="align-middle">{{ $totalProgress }}%</td>
                                <!-- Show the percentage values for each quarter -->
                                <td class="align-middle">{{ $scorecard->q1_target }}%</td>
                                <td class="align-middle">{{ $scorecard->q2_target }}%</td>
                                <td class="align-middle">{{ $scorecard->q3_target }}%</td>
                                <td class="align-middle">{{ $scorecard->q4_target }}%</td>
                                <td style="background-color: {{ $statusColor }}; color: white;" class="align-middle">
                                    {{ $statusText }}</td>
                                <td class="align-middle">{{ $scorecard->explanation }}</td>
                                <td>
                                    <a href="{{ route('scorecard.edit', $scorecard->id) }}"
                                        class="action-button edit-button">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('scorecard.destroy', $scorecard->id) }}" method="POST"
                                        style="display: inline;">
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
            </table>

            <div class="prepared">

                <p>
                    <strong>Leader:</strong>
                    @foreach ($details as $detail)
                        {{ $detail->leader }}
                    @endforeach
                    <br>
                    <strong>Elder in Charge:</strong>
                    @foreach ($details as $detail)
                        {{ $detail->elder_in_charge }}
                    @endforeach <br><br>
                    @php
                        // Split the explanation into an array of lines
                        $explanations = [];
                        foreach ($details as $detail) {
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
