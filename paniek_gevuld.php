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
        <p>Er heerst paniek in het koningkrijk <?php echo $_POST['land']; ?>. Koning <?php echo $_POST['docent']?>
        is ten einde raad en als koning <?php echo $_POST['docent']?> ten inde raad is, dan roept hij zijn
        ten-einde- raadsheer <?php echo $_POST['persoon']; ?></p>
        <p><?php echo $_POST['persoon']; ?>! Het is een ramp! Het is een schande!</p>
        <p>Sire, majesteit, Uwe luidruchtigheid, wat is er aan de hand?</p>
        <p>Mijn <?php echo $_POST['dier'];?> is verdwenen! Zo maar, zonder waarschuwing! En ik had net <?php echo $_POST['speelgoed'];?> voor
        hem gekocht!</p>
        <p>Majesteit, uw <?php echo $_POST['dier'];?> zal vast wel van zelf terugkomen?</p>
        <p>Ja, da/'s wel leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['bezigheid'];?> leren?</p>
        <p>Maar Sire, daar kunt u toch uw <?php echo $_POST['geld'];?> voor gebruiken?</p>
        <p><?php echo $_POST['persoon'];?>, je hebt helemaal gelijk! Wat zou ik doen als jou niet had?</p>
        <p><?php echo $_POST['verveelt'];?> Sire.</p>
    </main>
    <footer>Deze website is gebouwd door Colin de Wit.</footer>
  </body>
</html>
