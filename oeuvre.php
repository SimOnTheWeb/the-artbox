<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <title>The ArtBox</title>
  </head>

  <body>
    
    <!-- HEADER -->

    <?php include('header.php'); ?>

    <main>

    <!-- ARTICLE -->

    <?php include('oeuvres.php'); ?>

    <?php if (isset($_GET['id']) && $_GET['id'] > 0 && $_GET['id'] <= count($oeuvres)) : ?>

      <article id="detail-oeuvre">
        <div id="img-oeuvre">
          <img src="img/<?php echo $oeuvres [$_GET['id'] - 1]['image']?>" alt="<?php echo $oeuvres[$_GET['id'] - 1]['titre'] ?>" />
        </div>
        <div id="contenu-oeuvre">
          <h1><?php echo $oeuvres [$_GET['id'] - 1]['titre']?></h1>
          <p class="description"><?php echo $oeuvres [$_GET['id'] - 1]['auteur']?></p>
          <p class="description-complete"><?php echo $oeuvres [$_GET['id'] - 1]['description']?></p>
        </div>
      </article>

    <?php else : ?>

      <article id="detail-oeuvre">
        <p>Nous sommes désolé, cette page n'existe pas.</p>
      </article>

    <?php endif ?>

    </main>

    <!-- FOOTER -->

    <?php include('footer.php'); ?>
  </body>
</html>
