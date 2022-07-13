<?php
session_start();
$con = mysqli_connect("localhost","root","","db_connect");

if(isset($_POST['save_radio']))
{
    $test_a  = $_POST['test_a'];

    $query = "INSERT INTO test_a_ans (test_a) VALUES ('$test_a')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Submitted Successfully.";
        header("Location: test_a.php");
    }
    else{
        $_SESSION['status'] = "Submitted Successfully.";
        header("Location: test_a.php");
    }
}
?>