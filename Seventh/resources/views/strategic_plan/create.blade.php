@extends('layouts.score')

@section('content')
    <style>
           body {
            background-image: url('../images/cross2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .sda_logo {
            width: 100px;
            margin: -12px auto 10px auto;
            /* Centered the logo */
            display: block;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            width: 100%;
            max-width: 700px;
            padding: 2rem;
            margin: 20px;
            border: 1px solid #09a143;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 1.75rem;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 0.5rem;
            display: block;
        }

        .form-control,
        .form-select {
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 1rem;
        }

        .form-control:focus,
        .form-select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 3px rgba(0, 123, 255, 0.5);
        }

        .btn {
            display: block;
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            font-weight: bold;
            text-align: center;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .row {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .col-md-6,
        .col-lg-3 {
            flex: 1 1 calc(25% - 1rem);
            min-width: 150px;
        }

        .signbtn .signupbtn {
            margin-top: 10px;
            margin-bottom: 10px;
            color: white;
            background-color: #2c6448;
            border-radius: 4px;
            cursor: pointer;
            border: none;
            font-size: 16px;
            /* Adjusted font size for better readability */
            width: 100%;
            padding: 10px;
            text-align: center;
        }


        .signbtn .signupbtn:hover {
            background-color: #e4af00;
            /* Change background color on hover */

        }
    </style>

    <div class="container">
        <div class="card">
            <div class="logo">
                <a class="navbar-brand brand-logo-mini" href="/"><img src="/images/sda.png" class="sda_logo"></a>
            <h1>Add Departmental Plan</h1>
            <form action="{{ route('strategic_plan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="no" class="form-label">No</label>
                    <input type="number" class="form-control" id="no" name="no" min="0" max="5000"
                        required>
                </div>

                <div class="mb-3">
                    <label for="strategic_theme" class="form-label">Strategic Theme</label>
                    <input type="text" class="form-control" id="strategic_theme" name="strategic_theme" required>
                </div>

                <div class="mb-3">
                    <label for="strategic_area" class="form-label">Strategic Area</label>
                    <input type="text" class="form-control" id="strategic_area" name="strategic_area" required>
                </div>

                <div class="mb-3">
                    <label for="strategic_objective" class="form-label">Strategic Objective</label>
                    <input type="text" class="form-control" id="strategic_objective" name="strategic_objective" required>
                </div>

                <div class="mb-3">
                    <label for="kpi" class="form-label">KPI</label>
                    <input type="text" class="form-control" id="kpi" name="kpi" required>
                </div>

                <div class="mb-3">
                    <label for="initiatives_activities" class="form-label">Initiatives/Activities</label>
                    <textarea class="form-control" id="initiatives_activities" name="initiatives_activities" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <select class="form-select" id="year" name="year" required>
                        @for ($i = now()->year; $i >= now()->year - 10; $i--)
                            <option value="{{ $i }}" {{ $i == old('year', now()->year) ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <label for="q1_target" class="form-label">Q1 Target (%)</label>
                        <input type="number" class="form-control" id="q1_target" name="q1_target" min="0"
                            max="100" required>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <label for="q2_target" class="form-label">Q2 Target (%)</label>
                        <input type="number" class="form-control" id="q2_target" name="q2_target" min="0"
                            max="100" required>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <label for="q3_target" class="form-label">Q3 Target (%)</label>
                        <input type="number" class="form-control" id="q3_target" name="q3_target" min="0"
                            max="100" required>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <label for="q4_target" class="form-label">Q4 Target (%)</label>
                        <input type="number" class="form-control" id="q4_target" name="q4_target" min="0"
                            max="100" required>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <label class="form-label" for="start_date">Start Date</label>
                    <input id="start_date" type="date" name="start_date" required class="form-control" placeholder=" ">
                </div>

                <div class="col-md-6 col-lg-3">
                    <label class="form-label" for="end_date">End Date</label>
                    <input id="end_date" type="date" name="end_date" required class="form-control" placeholder=" ">
                </div>

                <div class="mb-3 mt-3">
                    <label for="resource_persource" class="form-label">Resource Persource</label>
                    <textarea class="form-control" id="comments" name="resource_persource" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="budget_perinitiative" class="form-label">Budget Per Resource</label>
                    <input type="number" class="form-control" id="no" name="budget_perinitiative"
                        min="0" max="5000000" required>
                </div>

                <div class="mb-3 mt-3">
                    <label for="comments" class="form-label">Comment</label>
                    <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                </div>

                <button type="submit" class="btn">Save</button>
                <div class="signbtn">
                    <a href="{{ url('/strategic_plan') }}" class="to_register">
                        <button type="button" class="signupbtn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-user-plus"></i>&nbsp;Back to Dashboard</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
