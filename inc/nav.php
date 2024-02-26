<?php
/*
    if ($levelDir == 'pages') {
        include_once "../config/variables.php";
        include_once "../config/connection.php";
        include_once "../config/functions.php";
    } else {
        include_once "config/variables.php";
        include_once "config/connection.php";
        include_once "config/functions.php";
    }
*/
include_once "config/variables.php";
include_once "config/connection.php";
include_once "config/functions.php";
// if (isset($pageGlossaires) && $pageGlossaires === "pageGlossaires"){
//     include_once "config/session_security.php";
// }
?>


<nav>

<!-- Start First column -->
    <ul class="left_nav">
        <button class="asiderBtn"><img class='menu m_Icon' src="assets/icons/bars-solid.svg" alt="" /></button>
        <li><img class='dixMentionImg big_icon' src="assets/icons/Logo_10MW_noir_fond_blanc.jpg" alt="" /></li>
        <li class='menuItem1'>
            <label for="sub_nav_1">Groupe Colombbus <img class='s_Icon' src="assets/icons/sort-down-solid.svg" alt="" /></label>
            <ul class="subMenu">
                <li>Colombbus</li>
                <li>10 Mention Web</li>
                <li>Declick</li>
            </ul>
        </li>
        <li class='menuItem1'>
            <label htmlFor="sub_nav_1">Moodle <img class='s_Icon' src="assets/icons/sort-down-solid.svg" alt="" /></label>

            <ul class="subMenu">
                <li>Colombbus</li>
                <li>10 Mention Web</li>
                <li>Declick</li>
            </ul>
        </li>
        <!-- <li><img class='universal_access big_Icon' src="assets/icons/universal_access.png" alt="" /></li> -->
        <li><i class="fa-solid fa-universal-access big_icon"></i></li>
    </ul>
<!-- End of first  column -->


<!-- Start Midle Warning  Box -->

<?php 
    if (!isset($_SESSION["user"])){
        echo "<span class='loginWarning' style='background-color: hsl(0, 100%, 50%,.5); outline: 2px solid red; display:flex; align-items:center; padding-inline:1em; margin-block:10px; border-radius:5px;'>The user is not specified in session</span>";
    }
?>






<!-- Start Right Column -->
    <ul class="right_nav">
        <li><img class='m_Icon' src="assets/icons/search.svg" alt="" /></li>
        <li><img class='m_Icon' src="assets/icons/bell-solid.svg" alt="" /></li>
        <li><img class='m_Icon' src="assets/icons/conversation.svg" alt="" /></li>
        <li>
            <div class='menuItem1'>
                <p>
                    <?php
                    if (isset($_SESSION["user"])) {
                        echo ucfirst($_SESSION["user"]);
                    } else {
                        echo "<a href='" . SITE_PATH . "login.php'>Login</a>";
                    }
                    ?>
                </p>
                <img class='profile' src="
                <?= (isset($imageProfile))
                    ? ("data:image/jpeg;base64," . base64_encode($imageProfile))
                    : SITE_PATH . "assets/imgs/imgPlaceholder01.png";
                ?>" alt="" />

                <img class='s_Icon' src="assets/icons/sort-down-solid.svg" alt="" />
                <ul class="subMenu">
                    <a href="<?= SITE_PATH ?>"><i class="fa-solid fa-house"></i>Tableau du bord</a>
                    <a href='<?= SITE_PATH ?>profile.php'><i class="fa-solid fa-user"></i>Profile</a>
                    <a href='<?= SITE_PATH ?>pages/profile2'><i class="fa-solid fa-envelope-open-text"></i>Messages Personnels</a>
                    <button><i class="fa-solid fa-screwdriver-wrench"></i>Préférences</button>
                    <a href="<?= SITE_PATH ?>/login.php" onClick={logout} name="logout"><i class="fa-solid fa-right-from-bracket"></i> login/out</a>
                </ul>
            </div>
        </li>
    </ul>
</nav>