<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/template_tsa/scss/styles.css" />
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Open+Sans&display=swap" rel="stylesheet">
    <title>Template Static Sites</title>
  </head>


  <body>
    <!---------------------------------------- HEADER --------------------------------------------->
    <?php include "includes/header.php"; ?>

  <!---------------------------------------- MAIN --------------------------------------------->
  <main>

    <!---------------------------------------- TITLE1 --------------------------------------------->
    <?php include "includes/titulo1.php"; ?>

    <!---------------------------------------- FIRST GRID --------------------------------------------->
    <?php include "includes/firstGrid.php"; ?>
    <!---------------------------------------- PRODUCTS ----------------------------------------->
    
    <?php include "includes/products.php"; ?>

    <!---------------------------------------- TYPES ----------------------------------------->

    <?php include 'includes/types.php'; ?>

    <!---------------------------------------- BRANDS ----------------------------------------->

    <?php include 'includes/brands.php'; ?>

    <!---------------------------------------- BRANDS ----------------------------------------->

    <?php include 'includes/blender-types.php'; ?>

    
  </main>
  
  <!---------------------------------------- FOOTER ----------------------------------------->
  <?php include 'includes/footer.php'; ?>
  
  <!---------------------------------------- COOKIE CONSENT ----------------------------------------->

  <?php include 'includes/cookie-consent.php'; ?>
  <!---------------------------------------- SCRIPTS ----------------------------------------->
  <?php include "includes/scripts.php"; ?>
  
  </body>
</html>
