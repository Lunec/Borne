<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Sound of Dogtown Festival</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <?php include("exhibitorsManager.php"); ?>
    </head>
    <body>
      <div class="container-fluid">
        <div class="row map-content-container">
          <div class="col-lg-7 map-container">
            <img src="images/plan_colors.png" class="img-fluid map"/>
          </div>

          <div class="col-lg-5 content-container">
            <div class="search-bar">
              <input type="text" id="search" class="form-control" placeholder="Rechercher..."/>
            </div>

            <div id="search-display">
            </div>
            
            <span class="label-filters">Trier par :</span>
            <select class="filters-container">
              <option type="submit" class="button" name="tout" value="Tout">Tout</option>
              <option type="submit" class="button" name="utilitaire" value="Utilitaire">Utilitaire</option>
              <option type="submit" class="button" name="skate" value="Skate">Skate</option>
              <option type="submit" class="button" name="custom" value="Custom">Custom</option>
              <option type="submit" class="button" name="vêtements" value="Vêtements">Vêtements</option>
              <option type="submit" class="button" name="magazine" value="Magazine">Magazine</option>
              <option type="submit" class="button" name="dédicace" value="Dédicace">Dédicace</option>
              <option type="submit" class="button" name="matériel" value="Matériel">Matériel</option>
            </select>

            <div id="table-slot">
            </div>

          </div>

          <div class="col-md-12 navigation-bar">
            <a href="news.html" id="to-news-button"><span>Actus</span> &#8594;</a>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script type="text/javascript" src="scripts.js"></script>
    </body>
</html>
