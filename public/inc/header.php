<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> | Salmon River Adventures</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">            
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="<?php echo (isset($page)) ? $page : ""; ?>">
    <header>
        <div class="container">  
            <div class="top-header">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo-salmonriver.png" alt="Salmon River Adventures"/>
                    </a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="adventures.php">ADVENTURES</a></li>
                        <li><a href="guides.php">GUIDES</a></li>
                        <li><a href="bookatrip.php">BOOK A TRIP</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
                <button class="mobile-menu-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 24 24" enable-background="new 0 0 24 24" width="512px" height="512px">
                        <g>
                            <path d="M24,3c0-0.6-0.4-1-1-1H1C0.4,2,0,2.4,0,3v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V3z" fill="#FFFFFF"/>
                            <path d="M24,11c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V11z" fill="#FFFFFF"/>
                            <path d="M24,19c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V19z" fill="#FFFFFF"/>
                        </g>
                    </svg>                          
                </button>
            </div>