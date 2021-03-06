<?php
ob_start();
session_start();
include 'C:/xampp/htdocs/App/backend/config/Database.php';
include 'C:/xampp/htdocs/App/backend/config/Localization.php';
include 'C:/xampp/htdocs/App/backend/config/Functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>App</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" href="../../../../frontend/assets/img/brand/favicon.png" type="image/png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">