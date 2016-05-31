<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
    <title>Sporciety</title>
    <link href="../vue/Event.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
  <body>
    <?php include("../Header/HOMETOP.php"); ?>
  <div class="liste_event">
    <h3> <?php echo $_GET['groupe']; ?> </h3>
    <?php
      include_once'../modele/get_event.php';
      $list_Events=get_list_event($_GET['groupe']);
      foreach ($list_Events as $list_Event) { ?>
        <a href="../controleur/Event.php?groupe=<?php echo $_GET['groupe'] ?>&event=<?php echo $list_Event['nom']?>"><?php echo $list_Event['nom']?></a>
        <br />
        <br />
      <?php
      }
    ?>
  </div>

  <div class="detail">
    <?php if (isset($_GET['event'])): ?>
      <h3><?php echo $_GET['event'] ?></h3>
    <?php endif; ?>
    <div id="ligne"></div>
      <p> <?php echo Event['description'];?> </p>
      <p> <?php echo Event['adresse'];?> </p>
      <p> <?php echo Event['date'];?> </p>
    </div>


  </body>
</html>
