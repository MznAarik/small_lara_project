<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
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
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .login-form {
            display: grid;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }


        #txt-animation {
            width: 25ch;
            text-wrap: nowrap;
            overflow: hidden;
            animation: typing 1.2s steps(25) infinite alternate-reverse;

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
        <form action={{url('login')}} method="POST">
            @csrf
            <div class="login-form">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <button type="submit">Login</button>
            </div>
        </form>

        <div class="links">
            Don't have an account? <a href="{{url('register')}}">Sign Up</a>
        </div>
    </div>

</body>

</html>