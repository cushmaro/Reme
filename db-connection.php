<?php
    
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'reme';
    
    $con = mysqli_connect($host ,$user ,$password ,$db);

// Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $que = "select test1 from test ";
    $ans = mysqli_query($con, $que);
    $row = mysqli_fetch_assoc($ans);
    echo $row['test1'];