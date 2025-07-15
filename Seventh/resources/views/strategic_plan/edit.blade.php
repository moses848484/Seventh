<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Scorecard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
 body {
            background-image: url('/images/cross2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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
        border: 1px solid #ddd;
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

<body>
    <div class="container">
        <div class="card mt-5 p-4">
            <div class="logo">
                <a class="navbar-brand brand-logo-mini" href="/"><img src="/images/sda.png" class="sda_logo"></a>
            <h2 class="text-center">Edit Departmental Plan</h2>

            <form method="POST" action="{{ route('strategic_plan.update', $score->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="strategic_theme" class="form-label">Strategic Theme</label>
                    <input type="text" id="strategic_theme" class="form-control" name="strategic_theme"
                        value="{{ $score->strategic_theme }}">
                </div>

                <div class="mb-3">
                    <label for="strategic_area" class="form-label">Strategic Area</label>
                    <input type="text" id="strategic_area" class="form-control" name="strategic_area"
                        value="{{ $score->strategic_area }}">
                </div>

                <div class="mb-3">
                    <label for="strategic_objective" class="form-label">Strategic Objective</label>
                    <input type="text" id="strategic_objective" class="form-control" name="strategic_objective"
                        value="{{ $score->strategic_objective }}">
                </div>

                <div class="mb-3">
                    <label for="kpi" class="form-label">Kpi</label>
                    <input type="text" id="kpi" class="form-control" name="kpi"
                        value="{{ $score->kpi }}">
                </div>

                <div class="mb-3">
                    <label for="initiatives_activities" class="form-label">Initiatives/Activities</label>
                    <textarea id="initiatives_activities" class="form-control" name="initiatives_activities" rows="3">{{ $score->initiatives_activities }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="q1_target" class="form-label">Q1 Target (%)</label>
                    <input type="number" id="q1_target" class="form-control" name="q1_target"
                        value="{{ $score->q1_target }}">
                </div>

                <div class="mb-3">
                    <label for="q2_target" class="form-label">Q2 Target (%)</label>
                    <input type="number" id="q2_target" class="form-control" name="q2_target"
                        value="{{ $score->q2_target }}">
                </div>

                <div class="mb-3">
                    <label for="q3_target" class="form-label">Q3 Target (%)</label>
                    <input type="number" id="q3_target" class="form-control" name="q3_target"
                        value="{{ $score->q3_target }}">
                </div>

                <div class="mb-3">
                    <label for="q4_target" class="form-label">Q4 Target (%)</label>
                    <input type="number" id="q4_target" class="form-control" name="q4_target"
                        value="{{ $score->q4_target }}">
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" id="start_date" class="form-control" name="start_date"
                        value="{{ $score->start_date }}">
                </div>

                <div class="mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" id="end_date" class="form-control" name="end_date"
                        value="{{ $score->end_date }}">
                </div>

                <div class="mb-3">
                    <label for="resource_persource" class="form-label">Resource Persource</label>
                    <textarea id="resource_persource" class="form-control" name="resource_persource" rows="3">{{ $score->resource_persource }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="budget_perinitiative" class="form-label">Budget Per Initiative</label>
                    <input type="number" id="budget_perinitiative" class="form-control" name="budget_perinitiative"
                        value="{{ $score->budget_perinitiative }}">
                </div>

                <div class="mb-3">
                    <label for="comments" class="form-label">Comments</label>
                    <textarea id="comments" class="form-control" name="comments" rows="3">{{ $score->comments }}</textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Update Scorecard</button>
                </div>
                <div class="signbtn">
                    <a href="{{ url('/strategic_plan') }}" class="to_register">
                        <button type="button" class="signupbtn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-user-plus"></i>&nbsp;Back to Dashboard</button>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
