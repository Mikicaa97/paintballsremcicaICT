<div class="bgslika">
  <div class="header">
      <div class="logo">
        <!-- <a class="navbar-brand" href="index.html"><b>Code</b><span><b>House</b></span></a> -->
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo"/></a>
      </div>
      <ul class="nav nav-tabs">
        <?php 
        
        
        $query_select_navigation = "SELECT * FROM navigation";
        $query_select_navigation_result = mysqli_query($connection, $query_select_navigation);

        if(!$query_select_navigation_result)
        {
          die("Query failed: " . mysqli_connect_error($connection));
        }
        else
        {
          while($row = mysqli_fetch_assoc($query_select_navigation_result))
          {
            $id_navigation = $row["id_navigation"];
            $name_navigation = $row["name_navigation"];
            $link_navigation = $row["link_navigation"];
            $link_value = $row["link_value"];
            ?>

            <li class="nav-item">
              <a style="<?php if($link_value == 1){ echo 'text-decoration: underline; text-decoration-color: white;'; } ?> color: #fff;" class="nav-link" href="<?php if(isset($_SESSION['id-user'])){ if($link_navigation == 'prijava.php'){ echo 'odjava.php'; }else{ echo $link_navigation;
              }}else{ echo $link_navigation; } ?>"><?php if(isset($_SESSION['id-user'])){ if($name_navigation == 'Prijava'){ echo 'Logout'; }else{ echo $name_navigation;
              }}else{ echo $name_navigation; } ?></a>
            </li>

            <?php
          }
        }
        
        ?>
      </ul>
    </div>
      <div class="ptext">
        <h1>IGRAJ PAINTBALL</h1>
        <!-- <a href="kontakt.html">Rezerviši</a> -->
    </div>
  </div>

