<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
            width: 300px;
            /* Adjust width as needed */
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
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
            /* Include padding in width */
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
    </style>
</head>

<body>

    <div class="container">
        <h2>Signup</h2>
        <form action="{{url('signup')}}" method="POST">
            @csrf
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <label for="phone_no">Phone Number:</label>
            <input type="text" id="phone_no" name="phone_no">

            <button type="submit">Signup</button>
        </form>

        <div class="links">
            Already have an account? <a href="{{url('/')}}">Login</a>
        </div>
    </div>

</body>

</html>