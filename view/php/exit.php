<?php








     $_SESSION["login_status"]  = false ;
  


if ($_SESSION["login_status"] == true ){

    header("location: /shabake/payamha/");
}else{
    header("location: /shabake/index");
  
}



?>