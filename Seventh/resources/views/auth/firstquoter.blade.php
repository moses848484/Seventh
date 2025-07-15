<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/viewmember.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css') ?>" type="text/css">
    <title>Strategic Plan</title>
    <style>
        /* Autofill input styling */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            /* Changes background color */
            box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #04AA6D !important;
            /* Changes text color */
        }
        .btn-success1 {
            background-color: #e4af00;
            color: white;
        }
        .btn-success1:hover {
            background-color: orange;
            color: white;
        }
    </style>
</head>

<body>
    <footer class="footer2">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted4 d-block text-center text-sm-left d-sm-inline-block"><i
                    class="fa-solid fa-calendar"></i>&nbsp;Strategic Plan</span>
        </div>
        <p class="buttonlayout">
            <a class="btn btn-success mx-2" href="/departments"><i class="fas fa-sitemap"></i> Departments</a> <a class="btn btn-success mx-2" href="{{ url('/insert_strategicplan') }}"><i
                    class="fa fa-plus"></i> Technical Plan</a> 
                    <a class="btn btn-success mx-2" href="{{ route('download.strategic.plan') }}">
                        <i class="fa-solid fa-file-pdf"></i> Download Strategic Plan
                    </a>                                      
        </p>
    </footer>

    <div id="block_bg" class="block">

        <div id="register" class="form-container">
            <form method="POST" autocomplete="on" action="{{ url('/strategic_plan_table') }}">
                @csrf

                <div class="table-wrapper">
                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                        <thead>
                            <tr>
                                <th class="t1">ID</th>
                                <th class="t4">NO</th>
                                <th class="t4">STRATEGIC AREA</th>
                                <th class="t4">STRATEGIC THEME</th>
                                <th class="t4">STRATEGIC OBJECTIVES</th>
                                <th class="t4">KPIs</th>
                                <th class="t4">INITIATIVES</th>
                                <th class="t4">STATUS COLOR</th>
                                <th class="t4">TOTAL TARGET</th>
                                <th class="t4">Q1</th>
                                <th class="t4">Q2</th>
                                <th class="t4">Q3</th>
                                <th class="t4">Q4</th>
                                <th class="t4">BUDGET PER INITIATIVE</th>
                                <th class="t4">EXPLANATION OF VARIATION</th>
                                <th class="t4">RESOURCE PERSOURCE</th>
                                <th class="t4">START DATE</th>
                                <th class="t4">END DATE</th>
                                <th class="t4">DELETE</th>
                                <th class="t4">VIEW</th>
                                <th class="t2">EDIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($department as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->no }}</td>
                                    <td>{{ $item->strategic_areas }}</td>
                                    <td>{{ $item->strategic_theme }}</td>
                                    <td>{{ $item->strategic_objectives }}</td>
                                    <td>{{ $item->kpis }}</td>
                                    <td>{{ $item->initiatives }}</td>
                                    <td style="background-color: {{ $item->status_color }}; width: 50px; height: 50px;">
                                    </td>
                                    <td>{{ $item->total_target }}</td>
                                    <td>{{ $item->q1 }}</td>
                                    <td>{{ $item->q2 }}</td>
                                    <td>{{ $item->q3 }}</td>
                                    <td>{{ $item->q4 }}</td>
                                    <td>{{ $item->budget_per_initiative }}</td>
                                    <td>{{ $item->explanation_of_variation}}</td>
                                    <td>{{ $item->resource_persource }}</td>
                                    <td>{{ $item->start_date }}</td>
                                    <td>{{ $item->end_date }}</td>
                                    <td>
                                        <a onclick="return confirm('Are You Sure You Want To Delete This Member')"
                                            class="btn btn-danger" href="{{ url('delete_strategicplan', $item->id) }}">
                                            <i class="fa-solid fa-trash icon-medium"></i>Delete
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success1" href="{{ url('/view_schedule', $item->id) }}">
                                        <i class="fa-solid fa-eye"></i>View
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ url('/update_member', $item->id) }}">
                                            <i class="fa-solid fa-pen-to-square icon-medium"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
               
        </div>
        </form>
    </div>
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                University
                SDA Church 2024</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-white">
                Computer Science Dept
                <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank" class="text-white">
                    Computer Systems Engineering
                </a> from University Of Zambia
            </span>
        </div>
    </footer>
    </div>
    <script src="/images/script.js"></script>
</body>

</html>