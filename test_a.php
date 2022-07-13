<?php
session_start();
$con = mysqli_connect("localhost","root","","db_connect");
 
   
 
if(isset($_POST['test_a_radio']))
{ 
    
    $test_a_1  = $_POST['test_a_1'];
    $test_a_2 =  $_POST['test_a_2'];
    $test_a_3 =  $_POST['test_a_3'];
    $test_a_4 =  $_POST['test_a_4'];
    $test_a_5 =  $_POST['test_a_5'];
    $test_a_6 =  $_POST['test_a_6'];
    $test_a_7 =  $_POST['test_a_7'];
    $test_a_8 =  $_POST['test_a_8'];
    $test_a_9 =  $_POST['test_a_9'];
    $test_a_10 =  $_POST['test_a_10'];
     
    $test_a_1_reaction_time  = $_POST['test_a_1_reaction_time'];
    $test_a_2_reaction_time =  $_POST['test_a_2_reaction_time'];
    $test_a_3_reaction_time =  $_POST['test_a_3_reaction_time'];
    $test_a_4_reaction_time =  $_POST['test_a_4_reaction_time'];
    $test_a_5_reaction_time =  $_POST['test_a_5_reaction_time'];
    $test_a_6_reaction_time =  $_POST['test_a_6_reaction_time'];
    $test_a_7_reaction_time =  $_POST['test_a_7_reaction_time'];
    $test_a_8_reaction_time =  $_POST['test_a_8_reaction_time'];
    $test_a_9_reaction_time =  $_POST['test_a_9_reaction_time'];
    $test_a_10_reaction_time =  $_POST['test_a_10_reaction_time'];

    $query = "INSERT INTO test_a (test_a_1,test_a_2,test_a_3,test_a_4,test_a_5,test_a_6,test_a_7,test_a_8,test_a_9,test_a_10,
    test_a_1_reaction_time,test_a_2_reaction_time,test_a_3_reaction_time, test_a_4_reaction_time,test_a_5_reaction_time,test_a_6_reaction_time, test_a_7_reaction_time
    ,test_a_8_reaction_time,test_a_9_reaction_time,test_a_10_reaction_time) VALUES ('$test_a_1','$test_a_2','$test_a_3','$test_a_4','$test_a_5','$test_a_6','$test_a_7',
    '$test_a_8','$test_a_9','$test_a_10','$test_a_1_reaction_time','$test_a_2_reaction_time','$test_a_3_reaction_time','$test_a_4_reaction_time','$test_a_5_reaction_time',
    '$test_a_6_reaction_time','$test_a_7_reaction_time','$test_a_8_reaction_time','$test_a_9_reaction_time','$test_a_10_reaction_time')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
        header("Location: questionnaire_a.php");
    }
    else{
       

        header("Location: questionnaire_a.php");
    }
}

 
 
?>