<?php 
 ?>
 <header>
     <h1><?= $currentPage ?></h1>
     <nav>
         <ul>
             <li><a class="<?= $currentPage === 'Accueil' ? 'active': ''  ?>"
                    href="index1.php">Accueil</a></li>
             <li><a class="<?= $currentPage === 'Catalogue' ? 'active' : '' ?>"
                    href="index2.php">Catalogue</a></li>
             <li><a class="<?= $currentPage === 'Contact' ? 'active' : '' ?>"
                    href="index3.php">Contact</a></li>
         </ul>
     </nav>
 </header>