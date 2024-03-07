<?php
include "config/connection.php";
include "config/session_security.php";
include "config/variables.php";
include "config/functions.php";









$title = "Profile";
include "inc/header.php";
include "inc/nav.php";
?>
<main class="page Profile ">
    
    <div class="main_wrapp">
        <section class="main_board">




            <div class='hero_of_main'>

            
                <div class="wrap">
                    <img class='profile' src="
                    <?= (isset($imageProfile))
                        ? ("data:image/jpeg;base64," . base64_encode($imageProfile))
                        : SITE_PATH . "assets/imgs/imgPlaceholder01.png";
                    ?>" alt="" />

                    <h1>10MW: Tableau de bord</h1>
                </div>

                <div class="wrap">
                    <button>Réinitialiser la page</button>
                </div>


            </div>










            <div class="profile_infos">
                <div class="card_info">
                    <h3>Informations détaillées</h3>
                    <a href="#" class='btn'>Modifier le profil</a>
                    <dl>
                        <dt>Adresse de courriel</dt>
                        <dd><?= $email?></dd>
                    </dl>

                    <dl>
                        <dt>Pays</dt>
                        <dd><?= $country?></dd>
                    </dl>

                    <dl>
                        <dt>Ville</dt>
                        <dd><?= $city?></dd>
                    </dl>
                    <dl>
                        <dt>Centres d'intérêt</dt>
                        <!-- The php should rebder an array !!!!!!! -->
                        <dd><?= $interests?></dd>
                    </dl>
                </div>

                <div class="card_info">
                    <h3>Protection des données et politiques</h3>
                    <ul>
                        <a href="">Contacter le délégué à la protection des données</a>
                        <a href="">Demandes de données</a>
                        <a href="">Exporter toutes mes données personnelles</a>
                        <a href="">Supprimer mon compte</a>
                        <a href="">Politiques et accords</a>
                    </ul>
                </div>

                <div class="card_info">
                    <h3>Informations détaillées du cours</h3>
                    <dl>
                        <dt>Profils de cours</dt>
                        <dd><a href="">Développeur Web & Web Mobile</a></dd>
                    </dl>
                </div>
                <div class="card_info">
                    <h3>Divers</h3>
                    <ul>
                        <a href="#">Articles de blog</a>
                        <a href="#">Mes certificats</a>
                        <a href="#">Messages des forums</a>
                        <a href="#">Discussions de forum</a>
                        <a href="#">Plans de formation</a>

                    </ul>
                </div>

                <div class="card_info">
                    <h3>Rapports</h3>
                    <ul>
                        <a>Sessions du navigateur</a>
                        <a>Vue d'ensemble des notes</a>
                        <a>Note</a>
                    </ul>
                </div>

                <div class="card_info">
                    <h3>Informations de connexion</h3>
                    <dl>
                        <dt>Premier accès au site</dt>
                        <dd>vendredi 22 septembre 2023, 10:00 (80 jours 1 heure)</dd>

                        <dt>Dernier accès au site</dt>
                        <dd>lundi 11 décembre 2023, 10:13 (7 s)</dd>
                    </dl>
                </div>

                <div class="card_info">
                    <h3>App mobile</h3>
                    <dl>
                        <dt>Code QR pour accès avec l'app mobile</dt>
                        <dd class='problem'>Lire le code QR avec votre app mobile pour vous connecter automatiquement. Le code QR sera périmé dans 10 minutes.</dd>
                    </dl>
                    <button>Afficher le code QR</button>
                </div>
            </div>


        </section>
    </div>
    
    <?php include "inc/footer_page.php"; ?>
</main>


<!-- ---------------- -->
<?php include "inc/footer.php" ?>