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
      <h1>Er heerst paniek...</h1>
      <form action="paniek_gevuld.php" method="post">
        <p>Welk dier zou je nooit als huisdier willen hebben?<input type="text" required name="dier"></p>
        <p>Wie is de belangrijkste persoon in jouw leven?<input type="text" required name="persoon"></p>
        <p>In welk land zou je graag willen wonen?<input type="text" required name="land"></p>
        <p>Wat doe je als je je verveelt?<input type="text" required name="verveelt"></p>
        <p>Met welk speelgoed speelde je als kind het meest?<input type="text" required name="speelgoed"></p>
        <p>Bij welke docent spijbel je het liefst?<input type="text" required name="docent"></p>
        <p>Als je €100.000,- had, wat zou je dan kopen?<input type="text" required name="geld"></p>
        <p>Wat is je favoriete bezigheid?<input type="text" required name="bezigheid"></p>
        <input type="submit" value="Verzenden"><br><br>
      </form>
    </main>
    <footer>Deze website is gebouwd door Colin de Wit.</footer>
  </body>
</html>
