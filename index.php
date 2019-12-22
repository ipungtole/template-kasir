<?php
include('header.php');
$page = $_GET['page']; 
switch ($page) {
    case "open":
        // code to be executed if n=label1;
        include('datatable.php');
        break;
    default:        
        include('home.php');
}

include('footer.php');
