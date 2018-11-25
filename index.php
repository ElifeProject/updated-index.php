<?php
include_once "config/core.php";

$page_title = "index";
//include login_checker
$require_login=true;
include_once "login_checker.php";

include_once 'layout_head.php';


$action=isset($_GET['action']) ? $_GET['action'] : "";
//if login was successfull
if($action=='login_success'){
    echo"<div class='alert alert-info'>";
        echo"<strong>Hello" . $_SESSION['firstname'] . ", Welcome back!</strong>";
    echo "<div>";
}
//if already logged in
else if($action=='already_logged_in'){
    echo"<div class='alert alert-info'>";
        echo"<strong>You are already logged in .</strong>";
    echo "<div>";
}

//content when logged in
 echo"<div class='alert alert-info'>";
        echo"<strong>Content when logged in will be here  .</strong>";
    echo "<div>";

echo "</div>";

include 'layout_foot.php';
?>