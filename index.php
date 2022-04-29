<?php 
session_start(); 
if(isset($_SESSION['table'])) $table = $_SESSION['table'];
?>

<!DOCTYPE html>
<html lang="fr">
    
    <?php include_once './includes/head.inc.html' ;  ?>

<body>

    <?php include_once './includes/header.inc.html' ; ?>

    <div class="container">
        <div class="row">
            <nav class="col-md-3 mt-3 ">
                <a href="index.php" class="btn btn-outline-secondary w-100" role="button">Home</a>
                <?php if (isset($table)) include_once './includes/ul.inc.php'; ?> 
            </nav>

            <section class="col-9 mt-3">
                <?php if(isset($_GET['add'])) {
                        include './includes/form.inc.html';
                    }
                    elseif(isset($_POST['enregistrer'])) {
                        $prenom = $_POST['user-prenom'];
                        $nom = $_POST['user-nom'];
                        $age = $_POST['user-age'];
                        $taille = $_POST['user-taille'];
                        $sex = $_POST['user-sex'];
                        $table = array(          
                            "first_name" => $prenom,
                            "last_name"  =>  $nom,
                            "age" => $age,
                            "size" => $taille,
                            "civility" => $sex,
                        );

                        $_SESSION["table"] = $table; 
                        echo '<p class="alert-success text-center py-3"> Données sauvegardées !</p>';
                    
                    } elseif (isset($_GET["debugging"])) {
                        echo '<h2>Débogage</h2>';
                        echo "<p>===> Lecture du tableau à l'aide de la fonction print_r()</p>";
                        print "<pre>";
                        print_r($table);
                        print "</pre>";
                    
                        
                    
                    
                    } elseif (isset($_GET['del'])) {
                        session_destroy(); {
                            echo '<p class="alert-success text-center py-3"> Données suprimées !</p>';
                        }
                    }



                    echo '<a role="button" class=" btn btn-primary" href="index.php?add">Ajouter des données</a>';
                    
                





















                
                ?>
            

            </section>

        </div>

    </div>




    <br><?php include_once './includes/footer.inc.html' ; ?>
</body>
</html>

