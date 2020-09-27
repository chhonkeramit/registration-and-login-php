<?php

$conn = mysqli_connect('localhost','root','','registration');
if($conn){
    echo "";
}
else {
    echo mysqli_connect_error();
}
?>