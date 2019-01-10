<?php
session_start();

DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'aws_project');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$errors = array();
$success = array();

if (isset($_POST['register'])) {
    $fname = mysqli_real_escape_string($mysqli, $_POST["fname"]);
    $lname = mysqli_real_escape_string($mysqli, $_POST["lname"]);
    $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
    $email = mysqli_real_escape_string($mysqli, $_POST["email"]);
    $password = mysqli_real_escape_string($mysqli, $_POST["password"]);
    $password2 = mysqli_real_escape_string($mysqli, $_POST["password2"]);
    $bio = mysqli_real_escape_string($mysqli, " Bio Appears Here");

    if (empty($fname)) {
        array_push($errors, "First name required");
    }

    if (empty($lname)) {
        array_push($errors, "Last name required");
    }

    if (empty($username)) {
        array_push($errors, "Username required");
    } else {

        $sql = "SELECT username FROM users WHERE username = '$username'";
        $result = mysqli_query($mysqli, $sql);
        $num = mysqli_num_rows($result);
        if ($num != 0) {
            array_push($errors, "Username already exists");
        }
    }

    if (empty($email)) {
        array_push($errors, "Email required");
    } else {
        if (! preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) {
            array_push($errors, "Email address Invalid");
        } else {
            $sql = "SELECT email FROM users WHERE email = '$email'";
            $result = mysqli_query($mysqli, $sql);
            $num = mysqli_num_rows($result);
            if ($num != 0) {
                array_push($errors, "Email already exists");
            }
        }
    }

    if (empty($password)) {
        array_push($errors, "Password required");
    }

    if (empty($password2) || strcmp($password, $password2) != 0) {
        array_push($errors, "Passwords dont match");
    }

    if (count($errors) == 0) {
        $password_crpt = $password;
        $sql = "INSERT INTO users (firstname, lastname, email, username, password, bio) VALUES ('$fname', '$lname', '$email','$username' , '$password_crpt' , '$bio')";
        mysqli_query($mysqli, $sql);

        $_SESSION['email'] = $email;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['username'] = $username;
        $_SESSION['success'] = $bio;
        $_SESSION['password'] = $password;
        $_SESSION['bio'] = " Bio Appers Here !!";
        header('location: active_user.php');
    }
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
    $password = mysqli_real_escape_string($mysqli, $_POST["password"]);

    if (empty($username)) {
        array_push($errors, "Username required");
    }

    if (empty($password)) {
        array_push($errors, "Password required");
    }

    $password_crpt = $password;
    $sql = "SELECT username FROM users WHERE username = '$username' and password = '$password_crpt'";
    $result = mysqli_query($mysqli, $sql);
    $num = mysqli_num_rows($result);
    if ($num != 1) {
        array_push($errors, "Username/Password Combo Does not exists");
    } else {
        $sql = "SELECT `firstname`, `lastname`, `email`, `username`, `password`, `bio` FROM `users` WHERE `username`='$username'";
        $result = mysqli_query($mysqli, $sql);
        $account = mysqli_fetch_row($result);

        
        $_SESSION['fname'] = $account[0];
        $_SESSION['lname'] = $account[1];
        $_SESSION['email'] = $account[2];
        $_SESSION['password'] = $password;
        $_SESSION['bio'] = $account[5];
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are Logged In";
        header('location: active_user.php');
    }
}


if (isset($_POST['upload'])) {
    # code...
    $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);
    $target_dir = "images/";
    $target_file = $target_dir.basename($_FILES['image']['name']);
    $target_title = mysqli_real_escape_string($mysqli, $_POST['title']);
    $target_desc = mysqli_real_escape_string($mysqli, $_POST['description']);
    $check = getimagesize($_FILES['image']['tmp_name']);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    if($check == false){
        array_push($errors, "File is not an image");
    }

    if($_FILES['image']['size'] > 500000){
        array_push($errors, "File is too large");
    }

    if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif" ) {
         array_push($errors, "Incorrect file type");
    }

    if(count($errors)==0){
         $sql = "INSERT INTO `image_table`(`username`, `image`, `title`, `text`) VALUES ('$username', '$target_file', '$target_title', '$target_desc')";
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file) && mysqli_query($mysqli,$sql)){
            array_push($success, "Image Successfully Uploaded"." : ".$target_title." : ".$target_desc." : Filename = ".$target_file);
        } else{
             array_push($errors, "Error Uploading Image");
        }
    }

    unset($_POST['upload']);

}

if (isset($_POST['update_fname'])) {

    $newFname = mysqli_real_escape_string($mysqli, $_POST['fname_up']);
    $oldfname = $_SESSION['fname'];
    $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);

    if (empty($newFname)) {
        array_push($errors, "First Name required");
    }

    if($newFname === $oldfname){
       array_push($errors, " New First Name equals Current");
   }

   if (count($errors) == 0){
    $sql = "UPDATE `users` SET `firstname` = REPLACE(`firstname`,'$oldfname','$newFname') WHERE `username` = '$username'";
    mysqli_query($mysqli, $sql);
    array_push($success, "First Name changed to '$newFname' ");
    $_SESSION['fname'] = $newFname;
    
}
unset($_POST['update_fname']);


}

if (isset($_POST['update_lname'])) {
    $newLname = mysqli_real_escape_string($mysqli, $_POST['lname_up']);
    $oldlname = $_SESSION['lname'];
    $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);

    if (empty($newLname)) {
        array_push($errors, "Last Name required");
    }

    if($newLname === $oldlname){
       array_push($errors, " New Last Name equals Current");
   }

   if (count($errors) == 0){
    $sql = "UPDATE `users` SET `lastname` = REPLACE(`lastname`,'$oldlname','$newLname') WHERE `username` = '$username'";
    mysqli_query($mysqli, $sql);
    array_push($success, "Last Name changed to '$newLname' ");
    $_SESSION['lname'] = $newLname;
}

unset($_POST['update_lname']);


}

if (isset($_POST['update_email'])) {
    $newemail = mysqli_real_escape_string($mysqli, $_POST['email_up']);
    $oldemail = $_SESSION['email'];
    $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);

    if (empty($newemail)) {
        array_push($errors, "Email required");
    } 

    if (! preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $newemail)) {
        array_push($errors, "Email address Invalid");
    }
    if($newemail === $oldemail){
        array_push($errors, " New Email equals Current");
    }else{

        $sql = "SELECT email FROM users WHERE email = '$newemail'";
        $result = mysqli_query($mysqli, $sql);
        $num = mysqli_num_rows($result);
        if ($num != 0) {
            array_push($errors, "Email already exists");
        }
    }
    

    if(count($errors)==0){
        $sql = "UPDATE `users` SET `email`= REPLACE(`email`, '$oldemail', '$newemail') WHERE `username`='$username'";

        if (!mysqli_query($mysqli, $sql)) {
             array_push($errors, "Error changing Email");
        }else{
            array_push($success, "Email changed to '$newemail' ");
            $_SESSION['email'] = $newemail;
        }
        
    }

    unset($_POST['update_email']);

}


if (isset($_POST['update_bio'])) {
    $newbio = nl2br(mysqli_real_escape_string($mysqli, $_POST['bio_up']), false);
    $oldbio = $_SESSION['bio'];
    $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);

     $sql = "UPDATE `users` SET `bio`= REPLACE(`bio`, '$oldbio', '$newbio') WHERE `username`='$username'";

     if (!mysqli_query($mysqli, $sql)) {
             array_push($errors, "Error updating bio");
        }else{
            array_push($success, "Bio successfully updated");
            $_SESSION['bio'] = nl2br($newbio,false);
        }

        unset($_POST['update_bio']);
}

if (isset($_POST['update_password'])) {
    # code...
    $newpassword = mysqli_real_escape_string($mysqli, $_POST['password_up']);
    $newpassword2 = mysqli_real_escape_string($mysqli, $_POST['password2_up']);
    $oldpassword = $_SESSION['Password'];
    $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);

    if (empty($newpassword)) {
        array_push($errors, "Password required");
    }

    if (empty($newpassword2) || strcmp($newpassword, $newpassword2) != 0) {
        array_push($errors, "Passwords dont match");
    }

    if(count($errors)==0){
        $newpassword_crpt = $newpassword;
        $oldpassword_crpt = $oldpassword;

        $sql = "UPDATE `users` SET `password`= REPLACE(`password`, '$oldpassword_crpt', '$newpassword_crpt') WHERE `username`='$username'";
        //$sql = "UPDATE `users` SET `password`= REPLACE(`password`, 'c20ad4d76fe97759aa27a0c99bff6710', '123')  WHERE `username`='km12';"

        if (!mysqli_query($mysqli, $sql)) {
             array_push($errors, "Error updating password".$newpassword." : ".$newpassword2." : ".$oldpassword);
        }else{
            array_push($success, "Password successfully updated ".$newpassword." : ".$newpassword2." : ".$oldpassword);
            $_SESSION['password'] = $newpassword;
        }

    }

    unset($_POST['update_password']);


}
/**
if (isset($_POST['update_username'])) {
    # code...
}

**/


?>