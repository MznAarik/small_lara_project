<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Lists</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        html,
        body,
        .intro {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .bg-image {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f7fa;
        }

        .card {
            border-radius: 0.5rem;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-scroll {
            border-radius: 0.5rem;
            max-height: 600px;
            overflow-y: auto;
        }

        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        thead {
            position: sticky;
            top: 0;
            background-color: #393939;
        }

        #txt-animation {
            width: 40ch;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 2s steps(40) infinite alternate-reverse;
        }

        @keyframes typing {
            from {
                width: 0ch;
            }
        }

        .logout-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #393939;
        }
    </style>
</head>

<body>
    <section class="intro">
        <div class="bg-image">
            <div class="container">


                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="logout-container mt-4">
                            <a href="{{ url('logout') }}" class="btn btn-warning">Logout</a>
                        </div>

                        <a href="{{route('employee.index')}}">
                            <h1>Employees List</h1>
                        </a>

                        @include('error_msg')

                        <div class="row">
                            <div class="col-7">
                                <h5 id="txt-animation">Welcome Back **{{ Auth::user()->fname }}**</h5>
                                <a href="{{ url('employee/create') }}" class="btn btn-info mb-3">Add Employee</a>
                            </div>
                            <div class="col-5 row mt-4">
                                <form action="{{url('employee/list')}}" class="row">
                                    <div class="  col-8 ">
                                        <input type="text" name="search" placeholder="Search here" class="form-control"
                                            value="{{$search}}">
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-info" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive table-scroll">
                                </div>
                                <table class="table table-striped mb-0 text-center">
                                    <thead>
                                        <tr class="text-uppercase table-danger text-success">
                                            <th scope="col">Index</th>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone No.</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($employees->isEmpty())
                                            <tr>
                                                <td colspan="10" class="text-center">No Employees currently</td>
                                            </tr>
                                        @endif
                                        @foreach ($employees as $key => $employee) 
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{ $employee->id }}</td>
                                                <td>{{ $employee->fname }} {{ $employee->lname }}</td>
                                                <td>{{ $employee->phoneno }}</td>
                                                <td>{{ $employee->email }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $employee->image) }}"
                                                        alt="Employee Photo" class="img-fluid rounded"
                                                        style="max-width: 120px; height: 120px;">
                                                </td>
                                                <td>{{ $employee->department }}</td>
                                                <td>
                                                    <a href="{{ route('employee.show', $employee->id) }}"
                                                        class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                                    <a href="{{ route('employee.edit', $employee->id) }}"
                                                        class="btn btn-primary  "> <i class="fa fa-edit"></i> </a>
                                                    <a href="{{ route('employee.delete', $employee->id) }}"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="paginator d-flex justify-content-center mt-3">
                                    {!! $employees->appends(['search' => $search])->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>