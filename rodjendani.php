<?php
  include "config/connection.php";
  include "fixed/head.php";
  include "fixed/nav.php";
?>

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
                           <p>Dečiji paintball rodjendani imaju <b>novu aktivnost, gadjane u metu sa Airsoft puškom AUG</b>.
                            <br/>Skroluj na dole i pogledaj najbolje cene dečijih paketa. Vrhunska paintball zabava za uzrast od 8 do 14 godina, pice, neograniceno sokova, odaberi paket i rezerviši termin. Za više informacija pozovite nas na broj telefona <a href="kontakt.html">065/58-22-552</a> ili posetite naš instagram profil <a href="https://www.instagram.com/paintballsremcica/">@paintballsremcica</a>. Sve o dečijim rodjendanima(paketi i cene) možete pogledati u nastavku ove strane.</p>
                           <a href="airsoft.html">Aktivne promocije rodjendana</a>
                       </div>
                   </div>
              </div>
          </div>
      </div>

        <!--INFO 2-->
      <div class="infosve1" id="skrol">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">DEČIJI PAINTBALL ROĐENDANI-SPLATMASTER ROĐENDANI</h5>
            <p class="card-text">Trenutno najpopularniji dečiji paintball rođendani za decu ovog uzrasta su JT Splatmaster rođendani. Splatmaster je nežnija varijanta paintball-a, primerena za decu od 8 do 14 godina. Da li će neka ekipa igrati regularni paintball ili splatmaster, definise najmlađi igrač.<br/> <b>Preporuka: Igraci bi trebalo da ponesu neke stare-rezervne patike<br/> Napomena: Kada rezervisete rodjendan, placa se 50% unapred.</b></p>
          </div>
        </div>
      </div>
      <!--KRAJ INFO-->
      <!--POCETAK RODJ CENA-->
      <!--POCETAK CENA KARTICE-->
      <div class="cenaindex">
        <div class="card-group">
        <?php
            include "component.php";
            $query_select_decijirodjendani = "SELECT * FROM decijirodjendani";
            $query_select_decijirodjendani_result = mysqli_query($connection, $query_select_decijirodjendani);

            if(!$query_select_decijirodjendani_result)
            {
              die("Query failed: ". mysqli_connect_error($connection));
            }
            else
            {
              while($row = mysqli_fetch_assoc($query_select_decijirodjendani_result))
              {

                $id_rodjendan = $row["id_rodjendan"];
                $naslov_rodjendan = $row["naslov_rodjendan"];
                $slika_rodjendan = $row["slika_rodjendan"];
                $opis_rodjendan = $row["opis_rodjendan"];
                $cena_rodjendan = $row["cena_rodjendan"];
                $napomena_rodjendan = $row["napomena_rodjendan"];
                
                component($naslov_rodjendan, $slika_rodjendan, $opis_rodjendan, $cena_rodjendan, $napomena_rodjendan);
              }
            }
          ?>
            <!-- <div class="card">
              <img class="card-img-top" src="img/manpaintball.jpeg" alt="Paket 2">
              <div class="card-body">
                <h5 class="card-title">PAKET II</h5>
                <p class="card-text">Grupa <b>od 11 do 14 igrača</b> 2h igra i oprema

                  1h igranja splatmaster-a i <b>3100 kuglica</b>, <b>gadjane u metu sa Airsoft puškom AUG</b>.<br/>
                  
                  <b>4 porodične pice</b> iz Stop picerije i <b>neograničenu
                  količinu sokova</b>.(sve što se ne popije, ostaje kod nas)
                  
                  Vreme za tortu.Tortu donosi slavljenik,dok Vam mi
                  obezbeđujemo viljuške,tanjiriće,nož za tortu,salvete<br/> i ukupno traje 2.5 sata do 3 sata.<br/>
                    <b>19.500,00 RSD</b><br/>
                </p>
                <p class="card-text"><small class="text-muted">ZAKAZATI MINIMUM DVA DANA RANIJE</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/rodj4.jpg" alt="Paket 3">
              <div class="card-body">
                <h5 class="card-title">PAKET III</h5>
                <p class="card-text">Grupa <b>od 15 do 20 igrača</b> 2h igra i oprema

                  1h igranja splatmaster-a i <b>4500 kuglica</b>, <b>gadjane u metu sa Airsoft puškom AUG</b>.<br/>
                  
                  <b>5 porodičnih pica</b> iz Stop picerije i <b>neograničenu
                  količinu sokova</b>.(sve što se ne popije, ostaje kod nas)
                  
                  Vreme za tortu.Tortu donosi slavljenik,dok Vam mi
                  obezbeđujemo viljuške,tanjiriće,nož za tortu,salvete<br/> i ukupno traje 2.5 sata do 3 sata.<br/>
                  <b>25.500,00 RSD</b><br/>
                </p>
                <p class="card-text"><small class="text-muted">ZAKAZATI MINIMUM DVA DANA RANIJE</small></p>
              </div>
            </div> -->
          </div>
      </div>

      <div id="software" class="We_are">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>DEČIJI PAINTBALL ROĐENDANI I PRINCIP IGRE - Paintball <span>Sremcica</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="box_bg">
                         <div class="box_bg_img">
                             <figure><img src="img/girlpaintball1.jpeg" alt="deciji rodjendani"></figure>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
                     <div class="box_text">
                         <p><b>Dečiji paintball rođendani</b> imaju isti princip igre kao i običan paintball. Igrači podeljeni u dve ekipe, označeni florescentnim prslucima, jure se po paintball terenu i gađaju paintball kuglicama. Pogođeni igrači odlaze u svoje baze i čekaju završetak runde.

                          Runda traje <b>do 5 minuta</b>. Dečiji paintball rođendani u proseku traju <b>15-ak rundi</b>.
                          Dečiji paintball rođendani <b>podrazumevanju nošenje zaštitne maske</b>, kombinezona
                          i pancira sve vreme radi <b>bezbednosti učesnika</b>. <b>Skidanje maske na terenu je strogo zabranjeno</b>. Nepoštovanje tog pravila, rezultiraće <b>izbacivanjem igrača iz igre</b>.
                          <b>Sudija je tokom celokupnog vremena sa igračima, prati situaciju i ne dozvoljava skidanje maske</b> ili bilo kakav drugi vid nediscipline.
                          
                          Razlika između regularnog paintball-a i splatmaster-a je u konstrukciji puške, kao i u kinetičkoj energiji ispaljene kuglice. Splatmaster pušku čini plastična, crvena pumparica. <b>Masa Splatmaster puske je oko 700 g, dok je masa paintball puške oko 3.5 kg. Splatmaster pušku je neophodno repetirati svaki put pre pucanja, tako da je nemoguće ispucati sve kuglice za 5 minuta</b>. Kinetička energija kuglice ispaljene iz Splatmaster puske je 1 J (džul), dok je kod regularnih paintball pušaka 5 J (džula).</p>
                         <a href="kontakt.html">Zakaži termin</a>
                     </div>
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