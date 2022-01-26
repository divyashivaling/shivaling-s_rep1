<?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="stddb";
    $con=new mysqli_connect(server,username,password,dbname);
    if(isset($_POST['nSubmit'])) {
        $id=$_POST['nId'];
        $dbname=$_POST['nName'];
        $marks=$_POST['nMarks'];
        $grade=$_POST['nGrade'];
        $sql_query="insert into stddb values ("101","divya",9,"A")";
        if(mysqli_query($con,$sql_query)) {
            echo "we have inserted the details";
        }
    }
?>