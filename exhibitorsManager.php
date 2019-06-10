<?php

  function getCategoryArray($category) {
    $jsonData = file_get_contents("exhibitors.json");
    $exhibitors = json_decode($jsonData, true);

    return $exhibitors[$category];
  }

  function makeExhibitorsTable($category) {
    $exhibitors = getCategoryArray($category);

    $table = '<table class="table table-light exhibitors-table">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col" class="nom">Nom</th>
                      <th scope="col" class="categorie">Catégorie</th>
                      <th scope="col" class="id">Numéro de stand</th>
                    </tr>
                  </thead>
                  <tbody>';

    foreach($exhibitors[$category] as $exhibitor) {
      $table .= '<tr><td scope="row"></td>';
      foreach ($exhibitor as $data) {
        $table .= "<td>" . $data . "</td>";
      }
      $table .= "</tr>";
    }
    $table .= '<table>';
    echo $table;
  }

?>
