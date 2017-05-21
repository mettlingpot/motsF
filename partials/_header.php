<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="motsFleches">
    <meta name="author" content="mettlingpot">

    <title>
        <?=
           isset($title)? $title : "tu fais mal ton boulot";
        ?>  
    </title>
      
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-D9XILkoivXN+bcvB2kSOowkIvIcBbNdoDQvfBNsxYAIieZbx8/SI4NeUvrRGCpDi" crossorigin="anonymous">
      
      <link rel="stylesheet" href="assets/css/main.css"/>
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  
  </head>

  <body>

<?php include('partials/_nav.php'); ?>
<?php include('partials/_flash.php'); ?>