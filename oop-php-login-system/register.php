<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Registration</h1><br>
            <form action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                </div>


                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <label for="password-again">Password:</label>
                    <input type="password" class="form-control" id="password-again" name="password-repeat" placeholder="Password again" required>
                </div>


                <button class="btn btn-success pull-right" type="submit">Submit</button>
            </form>

        </div>
    </div>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>