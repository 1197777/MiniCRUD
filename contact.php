<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title></title>
</head>

<body>
<?php

include_once 'nav.php';
?>
<div class="contact">
    <h1>Neem Contact Op</h1>
<div class="border"></div>
    <form class="contact-form" action="contact.php" method="post">
        <input type="text" class="contact-form" placeholder="Je Naam...">
        <input type="email" class="contact-form" placeholder="Je Email...">
        <input type="text" class="contact-form" placeholder="Je Telefoonnr...">
        <textarea class="contact-form-textarea" placeholder="Je Bericht..."></textarea>
        <button type="submit" class="btn">Stuur Bericht</button>
    </form>
</div>
<div class="footer4">
<div class="col-1">
    <h3>Gebruikbare Links</h3>
    <h3>↓</h3>
     <a href="menu.php">Menu</a>
     <a href="overons.php">Overons</a>
  </div>
  <div class="col-2">
    <h3>FoodCompanyNL</h3>
    <a href="index.php"><ion-icon name="pizza-outline"></ion-icon></a>

  </div>
  <div class="col-3">
  <h3>Neem Contact op met ons</h3>
    <h3>↓</h3>
    <a href="contact.php">
<button>Contact</button>
</a>
</body>

</html>
