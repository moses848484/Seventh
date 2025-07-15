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

            <form method="POST" action="{{ route('scorecard.update', $scorecard->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="strategic_theme" class="form-label">Strategic Theme</label>
                    <input type="text" id="strategic_theme" class="form-control" name="strategic_theme"
                        value="{{ $scorecard->strategic_theme }}">
                </div>

                <div class="mb-3">
                    <label for="strategic_area" class="form-label">Strategic Area</label>
                    <input type="text" id="strategic_area" class="form-control" name="strategic_area"
                        value="{{ $scorecard->strategic_area }}">
                </div>

                <div class="mb-3">
                    <label for="strategic_objective" class="form-label">Strategic Objective</label>
                    <input type="text" id="strategic_objective" class="form-control" name="strategic_objective"
                        value="{{ $scorecard->strategic_objective }}">
                </div>

                <div class="mb-3">
                    <label for="kpi" class="form-label">Kpi</label>
                    <input type="text" id="kpi" class="form-control" name="kpi"
                        value="{{ $scorecard->kpi }}">
                </div>

                <div class="mb-3">
                    <label for="initiatives_activities" class="form-label">Initiatives/Activities</label>
                    <textarea id="initiatives_activities" class="form-control" name="initiatives_activities" rows="3">{{ $scorecard->initiatives_activities }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="q1_target" class="form-label">Q1 Target (%)</label>
                    <input type="number" id="q1_target" class="form-control" name="q1_target"
                        value="{{ $scorecard->q1_target }}">
                </div>

                <div class="mb-3">
                    <label for="q2_target" class="form-label">Q2 Target (%)</label>
                    <input type="number" id="q2_target" class="form-control" name="q2_target"
                        value="{{ $scorecard->q2_target }}">
                </div>

                <div class="mb-3">
                    <label for="q3_target" class="form-label">Q3 Target (%)</label>
                    <input type="number" id="q3_target" class="form-control" name="q3_target"
                        value="{{ $scorecard->q3_target }}">
                </div>

                <div class="mb-3">
                    <label for="q4_target" class="form-label">Q4 Target (%)</label>
                    <input type="number" id="q4_target" class="form-control" name="q4_target"
                        value="{{ $scorecard->q4_target }}">
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

                <div class="mb-3 mt-3">
                    <label for="explanation" class="form-label">Explanation</label>
                    <textarea class="form-control" id="explanation" name="explanation" rows="3">{{ $scorecard->explanation }}</textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Update Scorecard</button>
                </div>
                <div class="signbtn">
                    <a href="{{ url('/scorecard') }}" class="to_register">
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
