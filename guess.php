
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Le Juste Prix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/modern-css-reset/dist/reset.min.css"
    />
    <link href="style.css" rel="stylesheet" />
  </head>

  <body>
    <header>
      <img alt="logo du juste prix" src="logo.jpg" />
    </header>
    <main>
      <img src="montre.jpg" alt="une belle montre de luxe" />
      <form action="guess.php" method="post">
        <div class="input-group">
          <label for="price">C'est combien ?</label>
          <span>$</span><input id="price" name="guess" />
        </div>
        <button type="submit">Valider</button>
        <?php
        $nombreExact = 90; 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST['guess'] > $nombreExact)
            echo  'Le nombre est inférieur';

            if ($_POST['guess'] < $nombreExact)
            echo  'Le nombre est supérieur';

            if ($_POST['guess'] == $nombreExact)
            echo  'tu as trouvé le nombre';
            }
        ?>
      </form>
    </main>
  </body>
</html>

