<?php
    $dbConnection = new PDO("mysql:host=127.0.0.1;dbname=tp_test","root","");
    $sqlRequest = "SELECT * FROM recettes" ;
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
        <title>Le recettes à Bob</title>
        <link rel="stylesheet" type="text/css" href="styless.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <div class="bandeau">
    <a href="test2.php" class="case">Accueil</a>
    <div class="small-logo-container">
            <img src="logo_bob.webp" class="small-logo">
        </div>
    </div>

    <div class="nav-slide">
       <ul class="social-links">
           <li><span class="titre_menu">CONTACT</span></li>
           <li>
               <a href="https://www.instagram.com/boblechef/" target="_blank">
                   <i class="fab fa-instagram"></i>
               </a>
           </li>
           <li>
               <a href="https://www.linkedin.com/in/" target="_blank">
                   <i class="fab fa-linkedin-in"></i>
               </a>
           </li>
           <li>
           <a href="https://www.facebook.com/anarchieculinaire" target="_blank">
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



   <body class="body christmas-theme">
        <h1>Titre</h1>

        <?php 
            foreach($tableau as $lignetableau){
                echo '<div class="encadrementarticle">';
                echo '<div class="previewphoto">';
                echo '<img src= "data:image/png;base64,' . base64_encode($lignetableau['affiche']) . '">';
                echo '</div class="previewphoto">';
                echo '<a href="/TPTESTCLOUD/Article?'.base64_encode($lignetableau['nom']).'" class="titrearticle">'.$lignetableau['nom'].'</a class="titrearticle2">';
                
               
                echo '</div class="encadrementarticle">';
                echo '</div class="encadrementarticle">';
                echo '<p> <br><p>';
 

            }
        ?>
                <?php
                $num_flakes = 30; // Nombre de flocons
                for ($i = 0; $i < $num_flakes; $i++) {
                    echo '<div class="snowflake">❄</div>'; // Utilisation d'un caractère de flocon
                }
                ?>
    </body> 
    <script src="test2.js"></script>
</html>