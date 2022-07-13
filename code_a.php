<?php
session_start();
$con = mysqli_connect("localhost","root","","db_connect");

if(isset($_POST['save_radio']))
{
    $gender  = $_POST['gender'];
    $age_range =  $_POST['age_range'];
    $familiarity_tech =  $_POST['familiarity_tech'];
    $myRange1 =  $_POST['myRange1'];
    $myRange2 =  $_POST['myRange2'];
    $myRange3 =  $_POST['myRange3'];
    $myRange4 =  $_POST['myRange4'];
    $myRange5 =  $_POST['myRange5'];
    $myRange6 =  $_POST['myRange6'];
    $myRange7 =  $_POST['myRange7'];
    $myRange8 =  $_POST['myRange8'];
    $myRange9 =  $_POST['myRange9'];
    $myRange10 =  $_POST['myRange10'];
    $text_box =  $_POST['text_box'];

    $query = "INSERT INTO questionnaire_answers_a (gender,age_range,familiarity_tech,myRange1,myRange2,myRange3,myRange4,myRange5,myRange6,myRange7,myRange8,
    myRange9,myRange10,text_box) VALUES ('$gender','$age_range','$familiarity_tech','$myRange1','$myRange2','$myRange3','$myRange4',
    '$myRange5','$myRange6','$myRange7','$myRange8','$myRange9','$myRange10','$text_box')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Submitted Successfully.";
        header("Location: questionnaire_a.php");
    }
    else{
        $_SESSION['status'] = "Submitted Successfully.";
        header("Location: questionnaire_a.php");
    }
}
?>