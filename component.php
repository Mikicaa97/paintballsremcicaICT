<?php

    function component($naziv_proizvodi, $slika_proizvoda, $cena_proizvoda, $opis_proizvoda){
        $element = "<div class='card'>
        <img class='card-img-top' src='img/$slika_proizvoda' alt=''>
        <div class='card-body'>
          <h5 class='card-title'>$naziv_proizvodi</h5>
          <p class='card-text'>
              <br/>
              
              <br/>
              <b>$cena_proizvoda</b><br/>
          </p>
          <p class='card-text'><small class='text-muted'>$opis_proizvoda</small></p>
        </div>
      </div>";

      echo $element;
    }


    function regularneCene($naslov_paintballcene, $slika_paintballcene, $opis_paintballcene, $cena_paintballcene){
      $element = "<div class='card'>
      <img class='card-img-top' src='img/$slika_paintballcene' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>$naslov_paintballcene</h5>
        <p class='card-text'><br/>
            <br/>
            $opis_paintballcene
            <br/>
            <b>$cena_paintballcene</b><br/>
        </p>
        <p class='card-text'><small class='text-muted'>CENA PO OSOBI</small></p>
      </div>
    </div>";

    echo $element;
    }


    function rodjendani($naslov_paintballcene, $slika_paintballcene, $opis_paintballcene, $cena_paintballcene, $napomena_rodjendan){
      $element = "<div class='card'>
      <img class='card-img-top' src='img/$slika_paintballcene' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>$naslov_paintballcene</h5>
        <p class='card-text'>

        $opis_paintballcene

            <b>$cena_paintballcene</b><br/>
        </p>
        <p class='card-text'><small class='text-muted'>'$napomena_rodjendan'</small></p>
      </div>
    </div>";

    echo $element;
    }
?>