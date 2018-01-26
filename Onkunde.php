<?php

?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Madlibs</title>
  </head>
  <body>
    <main>
      <nav>
        <a href="paniek.php">Er heerst paniek...</a>
        <a href="Onkunde.php">Onkunde</a>
      </nav>
      <h1>Ontkunde</h1>
      <form action="onkunde_gevuld.php" method="post">
        <p>Wat zou je graag willen kunnen?<input type="text" name="kunnen"></p>
        <p>Met welk persoon kan je goed opschieten?<input type="text" name="bff"></p>
        <p>Wat is je favoriete getal?<input type="text" name="getal"></p>
        <p>Wat heb je altijd bij als je op vakantie gaat?<input type="text" name="vakantie"></p>
        <p>Wat is je beste persoonlijke eigenschap?<input type="text" name="beste"></p>
        <p>Wat is je slechste persoonlijke eigenschap?<input type="text" name="slechste"></p>
        <p>Wat is het ergste wat je kan overkomen?<input type="text" name="ergste"></p>
        <input type="submit" value="Verzenden"><br><br>
      </form>
    </main>
    <footer>Deze website is gebouwd door Colin de Wit.</footer>
  </body>
</html>
