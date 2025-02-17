<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to our System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        .links {
            text-align: center;
            margin-top: 15px;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        #txt-animation {
            width: 18ch;
            text-wrap: nowrap;
            overflow: hidden;
            animation: typing 1.2s steps(18) infinite alternate-reverse;
            text-align: center;
            font-size: 14px;
            color: gray;
        }

        @keyframes typing {
            from {
                width: 0ch;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Login</h2>
        <h4 id="txt-animation">Login to our system...</h4>

        <form action="{{url('login')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                    required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password" required>
            </div>

            @include('error_msg')


            <button type="submit" class="btn btn-success w-100">Login</button>
        </form>

        <div class="links mt-3">
            Don't have an account? <a href="{{url('register')}}">Sign Up</a>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>