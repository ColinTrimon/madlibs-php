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
        <p>Er zijn veel mensen die niet kunnen <?php echo $_POST['kunnen'];?>. Neem nou <?php echo $_POST['bff'];?>. Zelfs met de hulp van een
        <?php echo $_POST['vakantie'];?> of zelfs <?php echo $_POST['getal'];?> kan <?php echo $_POST['bff'];?> niet <?php echo $_POST['kunnen'];?>
        Dat heeft niet te maken met een gebrek aan <?php echo $_POST['beste'];?> maar een te veel aan <?php echo $_POST['slechste'];?>.</p>
        Te veel <?php echo $_POST['slechste'];?> leidt tot <?php echo $_POST['ergste'];?> en dat is niet goed als je wilt <?php echo $_POST['kunnen'];?>.
        Helaas voor <?php echo $_POST['bff'];?>.</p>
    </main>
    <footer>Deze website is gebouwd door Colin de Wit.</footer>
  </body>
</html>
