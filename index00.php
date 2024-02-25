
<?php 
include "config/variables.php";
// echo FILE_PATH;

// echo "JUST_FILE:" . JUST_FILE;
// echo "<br>";
// echo "SINGLE_DIR".SINGLE_DIR;
// echo "<br>";
// echo "DOUBLE_DIR". DOUBLE_DIR;

// echo '<pre>';

// $uri = $_SERVER['REQUEST_URI'];
// echo $uri;
// if ($uri == SITE_PATH){
//     echo "Site Home Page";
// }else{
//     echo "<br>";
//     echo "Sorry!!";
//     echo SITE_PATH;
// }
// echo '</pre>';
// echo FILE_PATH;
// include "routes.php";
// include "functions.php"
?>

/*
        $vocabList .= '
            <div class="vocab_card">
                <div class="profile">
                    <img src="' . (isset($row['image_profile']) ? ("data:image/jpeg;base64," . base64_encode($row['image_profile'])) : "assets/imgs/profile-placeholder.jpg") . '" alt="" />

                    <p>
                        <strong>Author:</strong> ' . ucfirst($row["name"]) . '
                    </p>
                </div>
                <div class="content_container">
                    <div class="content">
                        <p>
                            <b>' . $row["concept"] . '</b>
                        </p>
                        <p>' . $row["description"] . '</p>
                        <small>' . $tagList . '</small>
                    </div>
                    <div class="actions">';

                        if (isset($_SESSION["user"]) && $_SESSION["user"] == $row["name"]) {
                            $vocabList .= "<button name='remove'>Remove</button><br>";
                        }

                        $vocabList .= '
                    </div>
                </div>
            </div>
        ';
        */
        //////////////////////
        //////////////////////