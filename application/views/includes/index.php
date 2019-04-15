<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
$userSession = new UserSession();
$user = new User();
if(isset($_SESSION['email'])){
	echo "Hay sesion";
 
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';
}else if(isset($_POST['email']) && isset($_POST['password'])){
    
    $userForm = $_POST['email'];
    $passForm = $_POST['password'];
    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'vistas/home.php';
    }else{
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'vistas/login.php';
    }
}else{
    include_once 'vistas/login.php';
}
?>