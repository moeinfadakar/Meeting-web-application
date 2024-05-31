<?php
  
session_start();

    $request = $_SERVER["REQUEST_URI"];
   $request =str_replace("/shabake" , "" , $request);

 


    switch ($request)
    {
        case("/"):
        case("/index.php"):
        case("/index"):
            require   "controller/indexof.php";
            break;

            case("/home"):
            case("/home.php"):
            case("/vorod"):
            case("/coming"):
            case("/come"):
                require "controller/signin.php";
               break;

                
                  case("/posts"):
                    case("/post"):
                    case("/payamha"):
                    case("/payamha/"):
                     case("/massages"):
                     case("/massages/"):
require "controller/massages.php";
break;

case("/database"):
case("/database/"):
require "model/database.php";
break;

                     case("/prof"):
                     case("/profile"):
                     case("/pro"):
                     case("/safhehman"):
                     case("/myprofile"):
                   if ($_SESSION["login_status"] == true &&  $_SESSION["login_status"] == null ){
                    require "./controller/profilecontrol.php";
                   }else{
                    require "view/home.php";
                   }
                   break;

                   case("/exit"):
                   case("/exits"):
                   case("/biron"):
                require  "view/exit.php";
                 break;
                
                 case("/test"):
                 require "view/test.php";
                 break;

                 case("/send"):
                 require "addcomments.php";
                 break;

                 case("/editPost"):
                 case("/editPost/"):
                 require "controller/editPost.php";
           
              break;
        
              case("/deletePost"):
                 case("/deletePost/"):
                 case("/del"):
                 require "controller/deletePost.php";
                 break;

              case("/edit"):
                 case("/edit/"):
                 case("/ed"):
                 require "controller/editcontroll.php";
                 break;
                 
              case("/add"):
                 case("/addpost/"):
                 case("/addposts"):
                 require "controller/addpost.php";
                 break;




        default:
            require   "view/error.php";
            break;
    }













?>