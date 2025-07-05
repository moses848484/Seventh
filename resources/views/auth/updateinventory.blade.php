<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/addmember.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css'); ?>" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Equipment</title>
    <style>
         /* Custom Autofill input styling */
         input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #04AA6D !important;
        }

        /* Floating Label Styles */
        .form-floating {
            position: relative;
        }

        .form-floating input {
            padding: 1rem 0.75rem;
            padding-top: 1.5rem;
        }

        .form-floating label {
            position: absolute;
            top: 45%;
            left: 3%;
            transform: translateY(-50%);
            transition: all 0.2s ease-in-out;
            color: #04AA6D;
            pointer-events: none;
        }

        .form-floating input:focus+label,
        .form-floating input:not(:placeholder-shown)+label {
            top: 25%;
            transform: translateY(-100%);
            font-size: 0.80rem;
            color: #04AA6D;
            background: white;
        }

        /* Adjustments for input border */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .form-control:focus {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .textcolor {
            color: #04AA6D;
        }

        .text-primary {
            color: #e4af00 !important;
        }

                /* Responsive adjustments */
                @media (max-width: 1200px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 1rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 0.75rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .container {
                padding: 2rem;
            }

            .footer span {
                font-size: 0.85rem;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 1rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 0.75rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .container {
                padding: 2rem;
            }

            .footer span {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 2rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 1rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .container {
                padding: 1rem;
            }

            .footer span {
                font-size: 0.75rem;
            }
        }
    </style>
</head>

<body>
    <x-validation-errors class="mb-4" />
    <div id="register" class="container bg-white p-4 rounded shadow mt-2">
        <form method="POST" autocomplete="on" action="{{ url('/update_equipment', $inventory->id) }}"
            enctype="multipart/form-data">
            @csrf

            <div class="text-center mb-4">
                <img src="/images/sda.png" class="sda_logo mb-3" alt="Logo" style="width: 55px;">
                <h2 class="text-primary">Update Equipment</h2>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="title" name="title" value="{{ $inventory->title }}" type="text" required
                        autofocus class="form-control" placeholder=" ">
                    <label for="title">Equipment Title</label>
                </div>
                <div class="col-md-6">
                    <input id="description" name="description" value="{{ $inventory->description }}" type="text"
                        class="form-control" placeholder=" ">
                    <label for="description">Equipment Description</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="price" name="price" value="{{ $inventory->price }}" type="text" required
                        class="form-control" placeholder=" ">
                    <label for="price">Equipment Price</label>
                </div>
                <div class="col-md-6">
                    <input id="quantity" name="quantity" value="{{ $inventory->quantity }}" type="number" required
                        class="form-control" placeholder=" ">
                    <label for="quantity">Equipment Quantity</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="category" name="category" value="{{ $inventory->category }}" type="text" required
                        class="form-control" placeholder=" ">
                    <label for="category">Equipment Category</label>
                </div>
                <div class="col-md-6">
                    <input id="serial_number" name="serial_number" value="{{ $inventory->serial_number }}"
                        type="number" required class="form-control" placeholder=" ">
                    <label for="serial_number">Equipment Serial Number</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="qr_code" name="qr_code" value="{{ $inventory->qr_code }}" type="number" required
                        class="form-control" placeholder=" ">
                    <label for="qr_code">Equipment QR Code</label>
                </div>
                <div class="col-md-6">
                    <input id="condition" name="condition" value="{{ $inventory->condition }}" type="text" required
                        class="form-control" placeholder=" ">
                    <label for="condition">Equipment Condition</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor" for="image" class="form-label">Current Equipment Image</label>
                    <div class="image-input">
                        <img height="auto" width="100px" src="/inventory/{{ $inventory->image }}"
                            alt="Equipment Image">
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="textcolor" for="purchase_date">Equipment Purchase Date</label>
                    <input id="purchase_date" name="purchase_date" value="{{ $inventory->purchase_date }}"
                        type="datetime-local" step="1" required class="form-control" placeholder=" ">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="textcolor" for="image">Change Equipment Image</label>
                    <input id="image" name="image" type="file" class="form-control" />
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100">
                <i class="fa-solid fa-pen-to-square"></i> Update Equipment
            </button>
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
            <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"
                class="text-white">
                Computer Systems Engineering
            </a> from University Of Zambia
        </span>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/images/script.js"></script>
</body>

</html>
