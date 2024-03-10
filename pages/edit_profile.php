<?php
include_once "../config/variables.php";
include_once "../config/session_security.php";





$direPos = "subPage";
$title = "edit_profile";
include_once "../inc/header.php";
include_once "../inc/nav.php";

?>
<main class="page edit_profile">
    <!-- <section class="main_board"> -->

    <div class="main_wrapp">
        
        <div class="vocabulary_container">
            <form id="all_tab_form" method="post">
                <div class="accordion_container">


                    <div class="accord_head">
                        <i class="fa-solid fa-angle-down"></i>
                        Général
                    </div>

                    <div class="accord_body open_accord">
                        <div class="child_wrap">
                            <div>
                                <label for="firstName">Prénom</label>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <input name="firstName" id="firstName" type="text" placeholder="firstName..." />
                        </div>

                        <div class="child_wrap">
                            <div>
                                <label for="lastName">Nom de famille</label>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <input name="lastName" id="lastName" type="text" placeholder="Nom de famille..." />
                        </div>

                        <div class="child_wrap">
                            <div>
                                <label for="textarea">Définition</label>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <textarea name="description" placeholder="Description..." id="mytextarea" cols="30" rows="10"></textarea>

                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- </section> -->
</main>


<?php include "../inc/footer.php" ?>