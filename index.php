<?php

define('_CONFIG_', true);
require_once "include/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>
<header>
  <h1>Welcome to my login system created in PHP</h1>
</header>
  	<div class="uk-section uk-container">
  		<p>
        You can either sign in or sign up by clicking one of the links below!
      </p>
      <p>
        <a href="/login.php">Login</a>
        <a href="/register.php">Register</a>

      </p>
  	</div>

  <? php require_once "include/footer.php" ?>
  </body>
</html>
