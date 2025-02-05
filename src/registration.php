<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 2rem;
            font-weight: bold;
        }

        label {
            font-weight: 500;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1rem;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Registration Page</h1>
        <form method="POST" action="handle_register_user.php" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select name="gender" id="gender" class="form-select">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>