<?php
include "./db_conn.php";

if(isset($_POST['login_user'])){
    $User_NAME = mysqli_real_escape_string($conn,$_POST['NAME']);
    $User_password = mysqli_real_escape_string($conn,$_POST['PASSWORD']);
    $sql_name = 0;
    $sql_pasword = 0;
    $sql =  "SELECT * FROM login";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($result)) {
        if ($row["User_Name"] == $User_NAME) {
            $sql_name = 1;
            echo "sql_name $sql_name";
        }
        if ($row["User_password"] == $User_password) {
            $sql_pasword = 1;
            echo "sql_pasword $sql_pasword";
        }
    }
    if ($sql_name == 1 and $sql_pasword == 1) {
        echo "
        <script>
            alert('login_successfully');
            window.location.href='M.5/Student/index.php';
        </script>";
    } else {        
        echo "
        <script>
            alert('login_error');
            window.location.href='login.php';
        </script>";
    }
}

if(isset($_POST['Sign_up_user'])){
    $User_NAME = mysqli_real_escape_string($conn,$_POST['NAME']);
    $User_password = mysqli_real_escape_string($conn,$_POST['PASSWORD']);
    $User_confirm_password = mysqli_real_escape_string($conn,$_POST['CONFIRM_PASSWORD']);
    $sql_name = 1;
    if ($User_NAME == null or $User_password == null) {
        echo "
        <script>
            alert('signup_error');
            window.location.href='signup.php';
        </script>";
    }

    if ($User_password != $User_confirm_password) {
        echo "
        <script>
            alert('password_error');
            window.location.href='signup.php';
        </script>";
    }

    $sql =  "SELECT * FROM login";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($result)) {
        if ($row["User_Name"] == $User_NAME) {
            echo "
            <script>
                alert('name_error');
                window.location.href='signup.php';
            </script>";
        }
    }

    $sql = "INSERT INTO login(User_Name,User_password)
        VALUES('$User_NAME','$User_password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "
        <script>
            alert('New record created successfully');
            window.location.href='login.php';
        </script>";
    }else {
        die("Error");
    }
}