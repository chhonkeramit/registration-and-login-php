<?php

include 'conn.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO `student`(`username`, `password`) VALUES ('$username','$password')";
    $data = mysqli_query($conn, $query);
    echo "<font color=green><b>Thankyou for registration!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .form-control {
            background-color: transparent;
        }
    </style>
</head>

<body style="background-image: url(cat.jpg);background-size:cover ">
    <div class=" col-lg-6 m-auto p-4">

        <h2 class="text-center bg-dark text-white p-3 ">REGISTER YOURSELF</h2>
        <form method="post">
            <div class="form-group">

                <input type="text" class="form-control mt-5 p-3" placeholder="Enter Username" name="username" required>
            </div>
            <div class="form-group">

                <input type="password" class="form-control mt-5 p-3" placeholder="Enter password" name="password" required>
            </div>

            <button style="width: 100%;" type="submit" class="btn btn-danger" name="submit">Register</button>
            <a href="login.php">
                <font color=red> If you are already a member login here
            </a>
        </form>
    </div>


</body>

</html>