<?php
if ($_POST['sent']) {
  $log = 'options.txt';
  $record = fopen($log, 'a+');
  $order = array(
    $_POST['name'] => $_POST['order']
  );
  $json = json_encode($order);
  fwrite($record, "\n$json");

  echo '<h1 style="color:#f00">ENVIADO!</h1>';
}
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Choosr</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <p>Identifique-se. Organize a lista de jogos na ordem que você preferir. Depois clique em votar.</p>

        <form method="post">
            <label>Identifique-se: <input type="text" name="name"></label>
            <ul id="sortable">
              <li class="ui-state-default" data-game="Siri.ars"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Siri mestrando Ars Magica, cabala de magos na idade média</li>
              <li class="ui-state-default" data-game="Siri.l5r"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Siri mestrando Legend of the Five Rings High Fantasy</li>
              <li class="ui-state-default" data-game="Siri.pandora"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Siri mestrando Pandora, High Fantasy de cenário próprio usando Fate RPG</li>
              <li class="ui-state-default" data-game="Proto.noir"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Felipe Proto mestrando Deadlands Noir, investigação estilo noir</li>
              <li class="ui-state-default" data-game="Proto.tale"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Felipe Proto mestrando A Tale of Many Kingdoms, High fantasy de politicagem usando Savage Worlds</li>
              <li class="ui-state-default" data-game="Poke.matrix"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Conrado Poke mestrando Matrix usando New World of Darkness</li>
              <li class="ui-state-default" data-game="Poke.terror"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Conrado Poke mestrando Long Nights of Terror (Narnya feat Harry Potter) usando New World of Darkness</li>
              <li class="ui-state-default" data-game="Poke.l5r"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Conrado Poke mestrando Legend of the Five Rings Low Fantasy</li>
            </ul>
            <input type="hidden" name="order" value="">
            <input type="hidden" name="sent" value="1">
            <input type="submit">
        </form>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
