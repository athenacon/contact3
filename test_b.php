<?php
session_start();
$con = mysqli_connect("localhost","root","","db_connect");

if(isset($_POST['test_b_radio']))
{ 

    $test_b_1  = $_POST['test_b_1'];
    $test_b_2 =  $_POST['test_b_2'];
    $test_b_3 =  $_POST['test_b_3'];
    $test_b_4 =  $_POST['test_b_4'];
    $test_b_5 =  $_POST['test_b_5'];
    $test_b_6 =  $_POST['test_b_6'];
    $test_b_7 =  $_POST['test_b_7'];
    $test_b_8 =  $_POST['test_b_8'];
    $test_b_9 =  $_POST['test_b_9'];
    $test_b_10 =  $_POST['test_b_10'];
     
    $test_b_1_reaction_time  = $_POST['test_b_1_reaction_time'];
    $test_b_2_reaction_time =  $_POST['test_b_2_reaction_time'];
    $test_b_3_reaction_time =  $_POST['test_b_3_reaction_time'];
    $test_b_4_reaction_time =  $_POST['test_b_4_reaction_time'];
    $test_b_5_reaction_time =  $_POST['test_b_5_reaction_time'];
    $test_b_6_reaction_time =  $_POST['test_b_6_reaction_time'];
    $test_b_7_reaction_time =  $_POST['test_b_7_reaction_time'];
    $test_b_8_reaction_time =  $_POST['test_b_8_reaction_time'];
    $test_b_9_reaction_time =  $_POST['test_b_9_reaction_time'];
    $test_b_10_reaction_time =  $_POST['test_b_10_reaction_time'];

    $query = "INSERT INTO test_b (test_b_1,test_b_2,test_b_3,test_b_4,test_b_5,test_b_6,test_b_7,test_b_8,test_b_9,test_b_10,
    test_b_1_reaction_time,test_b_2_reaction_time,test_b_3_reaction_time, test_b_4_reaction_time,test_b_5_reaction_time,test_b_6_reaction_time, test_b_7_reaction_time
    ,test_b_8_reaction_time,test_b_9_reaction_time,test_b_10_reaction_time) VALUES ('$test_b_1','$test_b_2','$test_b_3','$test_b_4','$test_b_5','$test_b_6','$test_b_7',
    '$test_b_8','$test_b_9','$test_b_10','$test_b_1_reaction_time','$test_b_2_reaction_time','$test_b_3_reaction_time','$test_b_4_reaction_time','$test_b_5_reaction_time',
    '$test_b_6_reaction_time','$test_b_7_reaction_time','$test_b_8_reaction_time','$test_b_9_reaction_time','$test_b_10_reaction_time')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
        header("Location: questionnaire_b.php");
    }
    else{
       

        header("Location: questionnaire_b.php");
    }
}
?>