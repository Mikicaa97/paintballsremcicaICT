<?php
  include "config/connection.php";
  include "fixed/head.php";
  include "fixed/nav.php";
?>
        
        <!--KRAJ DRUGE KARTICE-->
      <!--INFO 2-->
      <div class="infosve1">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">CENOVNIK PAINTBALL SREMCICA - PAKETI ZA ODRASLE</h5>
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
      



        <div id="software" class="We_are">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="titlepage">
                          <h2>Paintball dečiji paketi, niske cene, velika zabava - Paintball <span>Sremcica</span></h2>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container-fluid">
              <div class="row">
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="box_bg">
                           <div class="box_bg_img">
                               <figure><img src="img/meta1.jpg" alt="niske cene"></figure>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
                       <div class="box_text">
                           <p>Dečiji rodjendani imaju novu <b>aktivnost, gadjane u metu sa Airsoft puškom AUG</b>. Pogledajte i ostale naše pakete dečijih rodjendana. Za više informacija pozovite nas na broj telefona <a href="kontakt.html">065/58-22-552</a> ili posetite naš instagram profil <a href="https://www.instagram.com/paintballsremcica/">@paintballsremcica</a>. Sve o dečijim rodjendanima(paketi i cene) možete pogledati u linku ispod.</p>
                           <a href="rodjendani.html">Paintball Rodjendani</a>
                       </div>
                   </div>
              </div>
          </div>
      </div>

      
      
      <!--Karj dopuna-->
      
      <div class="tm-container-inner-1 tm-map-section"> <!--tm-container-inner-2 tm-map-section-->
          <div class="row">
            <div class="col-12 mx-auto my-5">
              <div class="tm-map">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2836.8233508465632!2d20.37746261553146!3d44.68238667909959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a73d5f23c61d9%3A0xd066a0b4547c4dea!2sPaintball%20Zone!5e0!3m2!1sen!2srs!4v1575651680785!5m2!1sen!2srs" allowfullscreen></iframe>
              </div>
            </div>
          </div>
      </div>

      <div class="infosve2">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Sve zamerke i kritike pišite nam na:</h5>
            <!--<p class="card-text">Da li zelis da zapocnes projekat kod nas?</p>-->
            <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=new" class="btn btn-primary">Pišite Nam</a>
          </div>
        </div>
      </div>
      

<?php
  include "fixed/footer.php";
?>