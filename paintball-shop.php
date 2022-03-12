<?php
    include "config/connection.php";
    include "fixed/head.php";
    include "fixed/nav.php";
?>

  <style>

    .card-group > .card{
      flex-basis: 33.33%;
      max-width: 33.33%;
      width: 100%;
      border: 1px solid rgba(0,0,0,.125) !important;
    }

  </style>

      <div class="infosve1">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">PAINTBALL SREMCICA - PRODAVNICA</h5>
            <p class="card-text"><b>Paintball i Airsoft</p>
          </div>
        </div>
      </div>

  <div class="cenaindex">
    <div class="card-group">
      <?php
        include "component.php";
        $query_select_proizvodi = "SELECT * FROM proizvodi";
        $query_select_proizvodi_result = mysqli_query($connection, $query_select_proizvodi);

        if(!$query_select_proizvodi_result)
        {
          die("Query failed: ". mysqli_connect_error($connection));
        }
        else
        {
          while($row = mysqli_fetch_assoc($query_select_proizvodi_result))
          {

            $id_proizvodi = $row["id_proizvodi"];
            $naziv_proizvodi = $row["naziv_proizvodi"];
            $slika_proizvoda = $row["slika_proizvoda"];
            $cena_proizvoda = $row["cena_proizvoda"];
            $opis_proizvoda = $row["opis_proizvoda"];
            
            component($naziv_proizvodi, $slika_proizvoda, $cena_proizvoda, $opis_proizvoda);  
          }
        }
      ?>
      </div>
  </div>

<?php
    include "fixed/footer.php";
?>