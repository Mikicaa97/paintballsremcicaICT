<?php
  include "config/connection.php";
  include "fixed/head.php";
  include "fixed/nav.php";
?>
         <main>
          
          <div class="infosve1">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Paintball Kontakt</h5>
            <p class="card-text">Paintball rezervacije mozete izvrsiti pozivom na broj telefona.<br/> <b>Napomena:</b> Najbolje zakazati dva dana ranije!</p>
          </div>
        </div>
      </div>
          
          <div class="tm-container-inner-2 tm-contact-section">
              <div class="row">

                  <div class="col-md-6">
                      <div class="tm-address-box">
                          <h4 class="tm-info-title tm-text-success">Nasa Adresa</h4>
                          <address>
                             Radno vreme: Svakog dana od 10 do 22h<br/> Mijatovih njiva 21a<br/> nalazimo se treca ulica desno posle stadiona<br/>Zakazivanje termina samo putem poziva!
                          </address>
                          <a href="tel:+381 65/58-22-552" class="tm-contact-link">
                              <i class="fa fa-phone tm-contact-icon"></i>+381 65/58-22-552
                          </a>
                          <a href="mailto:vlajkovic.1997@gmail.com" class="tm-contact-link">
                              <i class="fa fa-envelope tm-contact-icon"></i>vlajkovic.1997@gmail.com
                          </a>
                          <div class="tm-contact-social">
                              <a href="https://www.facebook.com/paintballsremcica/" class="tm-social-link"><i class="fa fa-facebook tm-social-icon"></i></a>
                              <a href="#!" class="tm-social-link"><i class="fa fa-twitter tm-social-icon"></i></a>
                              <a href="https://www.instagram.com/paintballsremcica/?hl=sr" class="tm-social-link"><i class="fa fa-instagram tm-social-icon"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="tm-contact-form">
                          <div class="form-group">
                            <input type="text" id="tbIme" class="form-control" placeholder="Ime"/>
                            <span style="color: red;" id="fname-error"></span>
                          </div>

                          <div class="form-group">
                            <input type="text" id="tbPrezime" class="form-control" placeholder="Prezime"/>
                            <span style="color: red;" id="lname-error"></span>
                          </div>
                          
                          <div class="form-group">
                            <input type="email" id="tbEmail" class="form-control" placeholder="Email"/>
                            <span style="color: red;"id="email-error"></span>
                          </div>
              
                          <!-- <div class="form-group">
                            <textarea rows="5" name="message" class="form-control" placeholder="Ovde upisati..." required=""></textarea>
                          </div> -->
                  
                        
                          <button type="button" class="btn btn-dark" name="btnKlik" onclick="contact();">Zakaži termin</button>
                          <p style="margin-top: 1rem; font-weight: 700;" id="message-info"></p>
                          
                      </form>
                  </div>

                  
                  
              </div>
          </div>

          
          
          <div class="tm-container-inner-2 tm-map-section">
              <div class="row">
                  <div class="col-12">
                      <div class="tm-map">
                          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2836.8233508465632!2d20.37746261553146!3d44.68238667909959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a73d5f23c61d9%3A0xd066a0b4547c4dea!2sPaintball%20Zone!5e0!3m2!1sen!2srs!4v1575651680785!5m2!1sen!2srs" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
          </div>
          <div class="tm-container-inner-2 tm-info-section">
              <div class="row">
                  <div class="col-12 tm-faq">
                      <h2 class="text-center tm-section-title">Najcesca Pitanja</h2>
                      <p class="text-center">Najcesca pitanja vezana za <b>PaintballSremcica</b></p>
                      <div class="tm-accordion">
                          <button class="accordion">1. Kako rezervisati Paintball rodjendan?</button>
                          <div class="panel">
                            <p>Paintball rodjendani se zakazuju dva dana ranije, a pre toga se izabere zeljenji paket na stranici <a href="rodjendani.html">Rodjendani</a></p>
                          </div>
                          
                          <button class="accordion">2. Da li su deciji rodjendani bezbedni?</button>
                          <div class="panel">
                            <p>Razlika između regularnog paintball-a i splatmaster-a je u konstrukciji puške, kao i u kinetičkoj energiji ispaljene kuglice. Splatmaster pušku čini plastična, crvena pumparica. Masa Splatmaster puske je oko 700 g, dok je masa paintball puške oko 3.5 kg. <b>Kinetička energija kuglice ispaljene iz Splatmaster puske je 1 J (džul), dok je kod regularnih paintball pušaka 5 J (džula).</b></p>
                          </div>
                          
                          <button class="accordion">3. Koliko je ljudi minimum za paintball, a koliko maksimum?</button>
                          <div class="panel">
                            <p>Minimum igraca za regularni paintball je 6, dok je maksimum igraca 10.<br/> Sto se tice decijih rodjendana mozete pogledati na stranici <a href="rodjendani.html">Rodjendani</a>.</p>
                          </div>
                          
                          <button class="accordion">4. Koliko je veliki prostor?</button>
                          <div class="panel">
                              <p>Za regularni paintball namenjeni prostor je 1000m2, dok je za malisane 500m2.</p>
                          </div>
  
                      </div>	
                  </div>
              </div>
          </div>
      </main>
      <div class="infosve2">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Sve zamerke i kritike pišite nam na:</h5>
          
            <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=new" class="btn btn-primary">Pišite Nam</a>
          </div>
        </div>
      </div>
      

      <script>
        $(document).ready(function(){
          var acc = document.getElementsByClassName("accordion");
          var i;
          
          for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var panel = this.nextElementSibling;
              if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
              } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
              }
            });
          }	
        });
      </script>

<?php
  include "fixed/footer.php";
?>