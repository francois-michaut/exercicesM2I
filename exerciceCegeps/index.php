<?php
 $cegeps = array( "Collège Ahuntsic" => "http://www.collegeahuntsic.qc.ca/accueil/accueil.html", "Collège de Bois-de-Boulogne" => "http://www.bdeb.qc.ca/", "Champlain Regional Collège" => "http://www.crc-sher.qc.ca/home/", "Dawson College" => "http://www.dawsoncollege.qc.ca/", "Collège Édouard-Montpetit" => "http://www.college-em.qc.ca/", "John Abbott College" => "http://www.johnabbott.qc.ca/", "Cégep régional de Lanaudière" => "http://www.cegep-lanaudiere.qc.ca/", "Collège Lionel-Groulx" => "http://www.clg.qc.ca/") ;
//   var_dump($cegeps);
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Liste de Cégeps</title>
  </head>
  <body>
      <h1>Liste de Cégeps</h1>
      <main>
          <nav>
              <ul>
                  <?php 
                    foreach($cegeps as $key => $value) {
                        echo '<li><a href="' . $value . '">' . $key . '</a></li>';
                    }
                  ?>
              </ul>

          </nav>
      </main>
      
  </body>
  </html>