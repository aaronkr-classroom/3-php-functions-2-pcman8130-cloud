<?php
function write_logo(){
    echo'<img src="img/logo.png" alt="logo" />';
}
?>
<!DOCTYPE html>
<hyml>
    <head>
        <title> Chapter</title> 
        <link rel="stylesheet" href="css/styles.css">
    </head> 
    <body>
        <h1><?php write_logo();?>The Candy Store</h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="candy.php">Candy</a> |
            <a href="about.php">About</a> |
            <a href="contact.php">Contact</a>
        </nav>