<?php

$page = $_GET["p"];

switch ($page){
    case "home":
        include_once("includes/header.php");
        include_once("pages/home.php");
        include_once("includes/footer.php");
        break;
    case "catalog":
        include_once("includes/header.php");
        include_once("pages/catalog.php");
        include_once("includes/footer.php");
        break;
    case "favorites":
        include_once("includes/header.php");
        include_once("pages/favorites.php");
        include_once("includes/footer.php");
        break;
    case "userProfile":
        include_once("includes/header.php");
        include_once("pages/userProfile.php");
        include_once("includes/footer.php");  
        break;
    case "product":
        include_once("includes/header.php");
        include_once("pages/product.php");
        include_once("includes/footer.php");
        break; 
    case "login":
        include_once("includes/header.php");
        include_once("pages/login.php");
        include_once("includes/footer.php");
        break;  
    case "register":
        include_once("includes/header.php");
        include_once("pages/register.php");
        include_once("includes/footer.php");
        break;     
    default:
        include_once("includes/header.php");
        include_once("pages/home.php");
        include_once("includes/footer.php");
        break;
}




?>