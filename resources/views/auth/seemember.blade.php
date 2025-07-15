<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager">
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager">

    <title>View Church Members</title>

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/viewmember.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.2-web/css/all.min.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Top Footer Section -->
    <footer class="footer2">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted4 d-block text-center text-sm-left d-sm-inline-block">
                <i class="fa-solid fa-user"></i>&nbsp;Church Members
            </span>
        </div>
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted3 d-block text-center text-sm-left d-sm-inline-block">
                <i class="fa-solid fa-circle-info"></i>&nbsp;Number Of Members:
                <span class="badge badge-info">{{ $memberCount }}</span>
            </span>
        </div>
        <div class="search-container">
            <input type="text" id="search-input" class="form-control" placeholder="Search Members" onkeyup="searchTable()">
        </div>
    </footer>

    <!-- Members Table -->
    <div id="block_bg" class="block">
        <div id="register" class="form-container">
            <form method="POST" autocomplete="on" action="{{ url('/add_members') }}">
                @csrf

                <div class="table-wrapper">
                    <table class="table" id="example" cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th class="t1">ID</th>
                                <th class="t4">First Name</th>
                                <th class="t4">Middle Name</th>
                                <th class="t4">Last Name</th>
                                <th class="t4">Gender</th>
                                <th class="t4">Address</th>
                                <th class="t4">Marital Status</th>
                                <th class="t4">Birthday</th>
                                <th class="t4">Ministry</th>
                                <th class="t4">Mobile Number</th>
                                <th class="t4">Register As</th>
                                <th class="t4">Date Of Registration</th>
                                <th class="t4">Email Address</th>
                                <th class="t4">Baptism Certificate</th>
                                <th class="t4">Delete</th>
                                <th class="t2">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $member)
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->fname }}</td>
                                    <td>{{ $member->mname }}</td>
                                    <td>{{ $member->lname }}</td>
                                    <td>{{ $member->gender }}</td>
                                    <td>{{ $member->address }}</td>
                                    <td>{{ $member->marital }}</td>
                                    <td>{{ $member->birthday }}</td>
                                    <td>{{ $member->ministry }}</td>
                                    <td>{{ $member->mobile }}</td>
                                    <td>{{ $member->registeras }}</td>
                                    <td>{{ $member->registrationdate }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->document }}</td>
                                    <td>
                                        <a onclick="return confirm('Are you sure you want to delete this member?')"
                                           class="btn btn-danger"
                                           href="{{ url('delete_members', $member->id) }}">
                                            <i class="fa-solid fa-trash icon-medium"></i> Delete
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ url('/update_member', $member->id) }}">
                                            <i class="fa-solid fa-pen-to-square icon-medium"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>

    <!-- Bottom Footer Section -->
    <footer class="footer mt-5">
        <div class="d-sm-flex justify-content-center justify-content-sm-between px-3 py-2 bg-dark text-white">
            <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">
                © University SDA Church 2024
            </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                Computer Science Dept —
                <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank" class="text-white">
                    Computer Systems Engineering, UNZA
                </a>
            </span>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        function searchTable() {
            const input = document.getElementById("search-input").value.toLowerCase();
            const rows = document.querySelectorAll("#example tbody tr");

            rows.forEach(row => {
                const match = Array.from(row.getElementsByTagName("td"))
                    .some(td => td.innerText.toLowerCase().includes(input));
                row.style.display = match ? "" : "none";
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
