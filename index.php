<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Sound of Dogtown Festival</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    </head>
    <body>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 map-container">
            <img src="images/plan.png" class="img-fluid map"/>
          </div>

          <div class="col-lg-6 content-container">
            <div class="search-bar">
              <input type="text" class="form-control" placeholder="Rechercher..."/>
              <button class="btn btn-submit" type="submit">Rechercher</button>
            </div>

            <div class="filters-container">
              <ul>
                <li class="filter" id="first-filter"><a href="#">Vêtements</a></li>
                <li class="filter"><a href="#">Custom</a></li>
                <li class="filter"><a href="#">Skate</a></li>
                <li class="filter"><a href="#">Skatepark</a></li>
              </ul>
            </div>

            <table class="table table-light exhibitors-table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col" class="nom">Nom</th>
                  <th scope="col" class="categorie">Catégorie</th>
                  <th scope="col" class="horaire">Horaire</th>
                  <th scope="col" class="id">Numéro de stand</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <a href="#" id="to-news-button">-></a>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="js/scripts.js"></script>
    </body>
</html>
