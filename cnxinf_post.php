<?php 
session_start();//session call
include('core/connection.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = stripcslashes(strtolower($_POST['username']));
    
    $username = filter_input(INPUT_POST,'username');
    $password = stripcslashes(strtolower($_POST['password']));

    $username = htmlentities(mysqli_real_escape_string($conn,$_POST['username']));
    $password = htmlentities(mysqli_real_escape_string($conn,$_POST['password']));

if(empty($username)){
    $user_error = '<p id = "error"> please enter username </p>';
    $err_s = 1;
}
if(empty($password)){
    $pass_error = '<p id = "error"> please enter password </p>';
    $err_s = 1;
    include('logininf.php');
}

}

if (!isset($err_s)) {
    $sql = "SELECT id, username, password FROM infermier WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['username'] === $username && $row['password'] === $password) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header('Location: inf.php');
            exit();
        } else {
            $user_error = '<p id="error">Wrong username or password</p>';
            include('logininf.php');
            exit();
        }
    } else {
        $user_error = '<p id="error">Wrong username or password</p>';
        include('logininf.php');
        exit();
    }
}


?>