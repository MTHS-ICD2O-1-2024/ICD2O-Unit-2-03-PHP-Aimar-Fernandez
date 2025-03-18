<!DOCTYPE html>
<!--ICD2O Unit 1-08 HTML-->
<html lang="en-ca">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The program, PHP" />
    <meta name="keywords" content="ICD2O, mths" />
    <meta name="author" content="Aimar Fernandez" />
    <meta name="viewport" content="width+device-width, initial-scale=.1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://code.getmdl.io/1.3.0/material.deep_orange-red.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>The Program, PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <br />
        <div class="mdl_layout__header-row">
          <span class="mdl-layout-title">The Program, PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div>
          <img src="./images/notebook-animation.svg" alt="Laptop Image">
        </div>
        <div class="page-content">
          <?php
            $name = $_GET["name"];
            $number = $_GET["number"];
            echo "<p>Your address is: " . $number . $name . "</p>";
          ?>
        </div>
        <br />
        <div class="page-content-answer">
          <a href="./index.php"> Return ...<a>
        </div>
        <br />
      </main>
    </div>
  </body>
</html>
