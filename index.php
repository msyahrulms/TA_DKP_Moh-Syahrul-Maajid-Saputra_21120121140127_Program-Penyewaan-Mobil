<?php
include('userService.php');

$user = new userService($_POST['email'], $_POST['password']);

if($get_user = $user->login()) {
    header('Location: http://localhost/RentalMobil/Main/index.html');
}
else {
    echo '<center><h1>Woops! Email atau Password yang Anda masukkan Salah :(<h1><center>';
}
?>