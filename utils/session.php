<?php
    session_start(); //vključimo sejo
    
    var_dump($_SESSION);
        
    //zaščita pred nepooblaščenimi pristopi
    if (!isset($_SESSION['user_id'])  && 
       (strpos ($_SERVER['REQUEST_URI'], 'login.php') == false)  &&
       (strpos ($_SERVER['REQUEST_URI'], 'registration.php') == false)
    ){
       //preusmeritev na pijavo
        header("Location: ../login.php");
    }   
?>
