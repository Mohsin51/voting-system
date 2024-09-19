<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - Login Page</title>
    <!-- Bootstrap css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-5">
        <h2 class="text-center">Login Here</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">
                <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter Valid Name" required>
                </div>
                <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" name="phone" placeholder="Enter Valid Mobile Number" maxlength="11" minlength="11" required>
                </div>
                <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" name="userpass" placeholder="Enter Password" required>
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-dark my-3">Login</button>
                <p>Don't have an account? <a href="./partials/registration.php" class="text-white">Create Account</a></p>
            </form>
        </div>
    </div>
</body>
</html>
