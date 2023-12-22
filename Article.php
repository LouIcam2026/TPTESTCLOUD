<?php
    $dbConnection = new PDO("mysql:host=127.0.0.1;dbname=tp_test","root","");
    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $query= '"'.base64_decode(substr($_SERVER['REQUEST_URI'],20,null)).'"';
    $sqlRequest = "SELECT * FROM `recettes` WHERE nom=$query;" ;
    $request = $dbConnection->prepare($sqlRequest);
    $request->execute() ;
    $tableau = [];
    while ($row = $request->fetch()){
        $tableau[]=$row;
    }
?>


<!-- 
        Columnlist
        ID,titre,description,image,contenu 
-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Acceuil</title>
        <div class="bandeau">
        <a href="test2.php" class="case">Accueil</a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


        <div class="small-logo-container">
            <img src="logo_bob.webp" class="small-logo">
        </div>
        <div class="nav-slide">
       <ul class="social-links">
           <li><span class="titre_menu">CONTACT</span></li>
           <li>
               <a href="https://instagram.com/100escales" target="_blank">
                   <i class="fab fa-instagram"></i>
               </a>
           </li>
           <li>
               <a href="https://www.linkedin.com/in/" target="_blank">
                   <i class="fab fa-linkedin-in"></i>
               </a>
           </li>
           <li>
           <a href="https://www.facebook.com/100escales" target="_blank">
               <i class="fab fa-facebook-f"></i>
           </a>
           </li>
       </ul>
       <div class="menu-hamburger">
           <div class="barre"></div>
           <div class="barre"></div>
           <div class="barre"></div>
       </div>
   </div>

      
 

    </div>
        <link rel="stylesheet" type="text/css" href="styless.css">
    </head>
    
    <body class="body christmas-theme">
    <?php 
foreach($tableau as $lignetableau){
    echo '<div class="container">';
    echo '<div class="image-container" style="margin-top: 100px;">'; // Ajoute une marge de 100px vers le bas
    echo '<img src="data:image/png;base64,' . base64_encode($lignetableau['affiche']) . '" class="centered-img">';
    echo '</div>';
    echo '<div class="content-container">';
    echo '<h1 class="fade-in">'.$lignetableau['nom'].'</h1>'; /* Ajoutez la classe pour l'animation */
    echo '<p class="description fadeIn">'.$lignetableau['ingrédient'].'</p>'; /* Ajoutez la classe pour l'animation */
    echo '<p class="description fadeIn">'.$lignetableau['description'].'</p>'; /* Ajoutez la classe pour l'animation */
    echo '</div>';
    echo '</div>';
}

    ?>
<script src="test2.js"></script>
    </body> 
</html>