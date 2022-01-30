<?php 
session_start();
include("includes/connection.php");


if(isset($_POST['login_btn']))
{
    $ime = mysqli_real_escape_string($conn, $_POST['ime']);
    $prezime = mysqli_real_escape_string($conn, $_POST['prezime']);

    $login_query = "SELECT * FROM ucesnici WHERE ime = '$ime' AND prezime = '$prezime' LIMIT 1";
    $login_query_run = mysqli_query($conn, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_jmbg = $data['jmbg'];
            $user_email = $data['email'];
            $role_as = $data['user_type'];

        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = $role_as; // 1 => admin, 0 => users
        $_SESSION['auth_user'] = [
            "user_id" => $user_id,
            "user_jmbg" => $user_jmbg,
            "user_email" => $user_email,
        ];

        if($_SESSION['auth_role'] == '1'){ // 1 =admin
            $_SESSION['message'] = "Welcome to dashboard";
            header("Location: adminn/index.php");
            exit(0);
        }else if($_SESSION['auth_role'] == '0'){ // 0 = user
            $_SESSION['message'] = "You are loged in";
            header("Location: index.php");
            exit(0);
        }
        
    }
    else{
        $_SESSION['message'] = "Invalid name";
        header("Location: prijavaAdmin.php");
        exit(0);
    }
}
else
{
    $_SESSION['message'] = "You are not allowed";
    header("Location: prijavaAdmin.php");
    exit(0);
}

?>