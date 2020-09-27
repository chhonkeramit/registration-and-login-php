<!DOCTYPE html>
<html>

<head>
    <title>transparent login form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .form-control {
            background-color: transparent;
        }
    </style>
</head>

<body style="background-image: url(cat.jpg);background-size:cover ">

    <div class=" col-lg-6 m-auto p-4">

        <h2 class="text-center bg-dark text-white p-3 ">Log In</h2>
        <form method="post">

            <?php
            session_start();
            include("conn.php");
            ?>


            <?php
            if (isset($_POST['submit'])) {

                $user = $_POST['username'];
                $pwd = $_POST['password'];
                $query = "SELECT * FROM STUDENT WHERE  username='$user' && password='$pwd'";
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
                if ($total == 1) {
                    $_SESSION['username'] = $user;
                    header('location:home.php');
                } else {
                    echo "<h3><font color=red>Username/password is incorrect.</h3> ";
                }
            }
            ?>



            <div class="form-group">

                <input type="text" class="form-control mt-5 p-3" placeholder="Enter Username" name="username" required>
            </div>
            <div class="form-group">

                <input type="password" class="form-control mt-5 p-3" placeholder="Enter password" name="password" required>
            </div>

            <button style="width: 100%;" type="submit" class="btn btn-success" name="submit">log in</button>
            <a href="registration.php"><b>New user can register here!</b></a>
        </form>
    </div>


    </div>



</body>

</html>