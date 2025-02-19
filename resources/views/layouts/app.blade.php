<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Employee Management')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-custom {
            max-width: 800px;
            margin-top: 50px;
        }

        .card {
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="{{url('employee/list')}}">Employee Management</a>
        </div>
    </nav>

    <div class="container container-custom">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>