<?php
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');


 ?>

 <?php include("header.php"); ?>
  <?php include("nav.php"); ?>
 <?php include("carousel.php"); ?>
 <?php include("presentation.php"); ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
  foreach ($articles as $article) {
?>
      <div class="row Article">
        <div class="col-md-12 text-center">
          <h1><?php echo $article['nom']; ?></h1>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-12 text-center article">
          <img src="assets/images/<?=$article['images']?>" class="img-fluid" alt="Responsive image" />
          <p><?php echo substr($article['texte'],0, 200); ?>[...]
            <a href="/blogVoyage_MVC/index.php/article?id=<?=$article['id']?>">lire la suite</a></p>
          <p class="date"><?php echo $article['date_dujour']; ?></p>

      </div>
    </div>
<?php } ?>
  </body>
</html>

 <?php include("footer.php"); ?>
