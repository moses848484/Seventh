@extends('layouts.score')

@section('content')
    <style>
    body {
            background-image: url('../images/cross2.jpg');
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
            <h1>Add Details</h1>
            <form action="{{ route('strategic_plan.storeDetails') }}" method="POST">
                @csrf

                <div class="mb-3 mt-3">
                    <label for="department_name" class="form-label">Department Name</label>
                    <input class="form-control" id="department_name" name="department_name" rows="3"></input>
                </div>

                <div class="mb-3 mt-3">
                    <label for="Quoter" class="form-label">Quoter</label>
                    <input class="form-control" id="quoter" name="quoter" rows="3"></input>
                </div>

                <div class="mb-3 mt-3">
                    <label for="leader" class="form-label">Leader</label>
                    <input class="form-control" id="leader" name="leader" rows="3"></input>
                </div>

                <div class="mb-3 mt-3">
                    <label for="elder_in_charge" class="form-label">Elder In Charge</label>
                    <input class="form-control" id="elder_in_charge" name="elder_in_charge" rows="3"></input>
                </div>

                <div class="mb-3 mt-3">
                    <label for="explanation" class="form-label">Explanation</label>
                    <textarea class="form-control" id="explanation" name="explanation" rows="3"></textarea>
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
