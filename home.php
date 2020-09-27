<a style="font-size: xx-large;text-decoration: none;color:orangered" href="logout.php">Logout</a>

<p style="font-size: 70px;text-align:center;color:lightskyblue;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <?php

    session_start();
    error_reporting(0);
    include("conn.php");
    echo "<b>Welcome Back<b> " . $_SESSION['username'];
    
    $user = $_SESSION['username'];

    if ($user == true) {
        //display page if condition is true 
    } else { //otherwise user ko login page pe bhej dega
        header('location:login.php');
    }

    $query = "SELECT * FROM STUDENT WHERE  username='$user'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($data);

    ?>
</p>
<br>

<h1 style="text-align:center;"><?php echo "How was your day" . " " . $_SESSION['username'] . "!"; ?> </h1>

<p align="justify" style="font-weight:bolder">
    <img src="<?php echo $result['picsource']; ?>" height='400' width="400" align='right'>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Temporibus, modi laudantium delectus tempore, itaque est inventore
    , tenetur quae ex minus dolores iure? Nam, corrupti enim unde itaque
    quam tenetur quibusdam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex accusantium commodi quae corporis, nulla perferendis rem quos a eos magni! Earum cumque
    deserunt corporis dolores. Similique nesciunt explicabo quod incidunt!
</p>