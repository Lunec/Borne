<?php

  function decodeJSONFile() {
    $jsonData = file_get_contents("exhibitors.json");
    $exhibitors = json_decode($jsonData, true);

    return $exhibitors;
  }

  function retrieveArrayToDisplay($category = null) { // Returns a clean array to display
    $exposants = decodeJSONFile();

    $exposantsToShow = [];
    if($category == "Tout") {
      foreach ($exposants["exposants"] as $exposant) {
        $exposantsToShow[] = $exposant;
      }

    } else {
      foreach ($exposants["exposants"] as $exposant) {
        if($exposant['categorie'] == $category) {
          $exposantsToShow[] = $exposant;
        }
      }
    }

    return $exposantsToShow;
  }

  function makeExhibitorsTable($category = null) { // Makes an html table from array

    $exposants = retrieveArrayToDisplay($category);

    $table = '<table class="table table-striped exhibitors-table">
                <thead>
                  <tr>
                    <th scope="col">Numéro<br/>de stand</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Catégorie</th>
                  </tr>
                </thead>
                <tbody>';

    foreach ($exposants as $exposant) {
      $table .= '<tr>';
      foreach ($exposant as $field) {
        $table .= '<td>' . $field . '</td>';
      }
      $table .= '</tr>';
    }
    $table .= '</table>';
    echo $table;

  }

  function lookForExposant($nom) {
    $exposants = decodeJSONFile();
    foreach($exposants["exposants"] as $exposant) {
      if ($exposant["nom"] == $nom) {
        echo $nom;
      }
    }
  }

?>
