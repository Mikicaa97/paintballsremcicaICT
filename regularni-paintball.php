<?php
  include "config/connection.php";
  include "fixed/head.php";
  include "fixed/nav.php";
?>


        <!--INFO 2-->
      <div class="infosve1">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">CENOVNIK PAINTBALL SREMCICA</h5>
            <p class="card-text"><b>CENE ZA REGULARNI PAINTBALL<br/> Uzrast od 16 do 99 godina.</b></p>
          </div>
        </div>
      </div>
      <!--KRAJ INFO-->
        <!--POCETAK CENA KARTICE-->
        <div class="cenaindex">
        <div class="card-group">

            <?php
            include "component.php";
            $query_select_paintballcene = "SELECT * FROM paintballcene";
            $query_select_paintballcene_result = mysqli_query($connection, $query_select_paintballcene);

            if(!$query_select_paintballcene_result)
            {
              die("Query failed: ". mysqli_connect_error($connection));
            }
            else
            {
              while($row = mysqli_fetch_assoc($query_select_paintballcene_result))
              {

                $id_paintballcene = $row["id_paintballcene"];
                $naslov_paintballcene = $row["naslov_paintballcene"];
                $slika_paintballcene = $row["slika_paintballcene"];
                $opis_paintballcene = $row["opis_paintballcene"];
                $cena_paintballcene = $row["cena_paintballcene"];
                
                component($naslov_paintballcene, $slika_paintballcene, $opis_paintballcene, $cena_paintballcene);
              }
            }
          ?>
        </div>
      </div>

      <!--Dopune-->
      <!-- <div class="infosve1">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">DOPUNE KUGLICA - PAINTBALL SREMCICA</h5>
          </div>
        </div>
      </div>
      <div class="cenaindex">
        <div class="card-group">
            <div class="card">
              <img class="card-img-top" src="img/dopuna.jpeg" alt="Dopuna 1">
              <div class="card-body">
                <h5 class="card-title">DOPUNA 1</h5>
                <p class="card-text">100 kuglica<br/>
                    <br/>
                    Dopuna dostupna za sve pakete<br/>
                    <br/>
                    <b>400,00 RSD</b><br/>
                </p>
                <p class="card-text"><small class="text-muted">CENA PO OSOBI</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/slika.jpg" alt="Dopuna 2">
              <div class="card-body">
                <h5 class="card-title">DOPUNA 2</h5>
                <p class="card-text">300 kuglica<br/>
                    <br/>
                    Dopuna dostupna za sve pakete
                    <br/>
                    <b>800,00 RSD</b><br/>
                </p>
                <p class="card-text"><small class="text-muted">CENA PO OSOBI</small></p>
              </div>
            </div>
          </div>
      </div> -->
      <!--Karj dopuna-->

        <!--KRAJ CENA-->
        <!--POCETAK GMAIL-->
      <div class="infosve2">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Sve zamerke i kritike pišite nam na:</h5>
            <!--<p class="card-text">Da li zelis da zapocnes projekat kod nas?</p>-->
            <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=new" class="btn btn-primary">Pišite Nam</a>
          </div>
        </div>
      </div>
      <!--KRAJ GMAIL-->
      
<?php
  include "fixed/footer.php";
?>