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
                    elseif(isset($_GET['add_more'])) {
                        include './includes/form2.inc.php';
                    }

                    elseif(isset($_POST['enregistrer'])) {
                        $prenom = htmlspecialchars($_POST['user-prenom']);
                        $nom = htmlspecialchars($_POST['user-nom']);
                        $age = htmlspecialchars($_POST['user-age']);
                        $taille = htmlspecialchars($_POST['user-taille']);
                        $sex = htmlspecialchars($_POST['user-sex']);
                        $table = array(          
                            "first_name" => $prenom,
                            "last_name"  =>  $nom,
                            "age" => $age,
                            "size" => $taille,
                            "civility" => $sex,
                        );

                        $_SESSION["table"] = $table; 
                        echo '<p class="alert-success text-center py-3"> Données sauvegardées !</p>';
                    
                    } elseif (isset($table)) {
                            if (isset($_GET["debugging"])) {
                                echo "<h2 class='text-center'>Débogage</h2><br>";
                                echo "<h3 class='fs-5'>===> Lecture du tableau à l'aide de la fonction print_r()</h3>";
                                print "<pre>";
                                print_r($table);
                                print "</pre>";

                            } elseif (isset($_GET['concatenation'])) {
                                echo "<h2 class='text-center'>Concaténation</h2><br>";
                                
                                echo "<h3 class='fs-5'>===> Construction d'une phrase avec le contenu du tableau :</h3>";
                                $civilite = ($table['civility'] == "woman") ? "Mme " :  "Mr "; 
                                echo "<p> ". $civilite . $table["first_name"] . " " . $table["last_name"] . " <br>J'ai " . $table["age"] . " ans et je mesure " . $table['size'] . "m.</p><br><br>";

                                
                                echo "<h3 class='fs-5'>===> Construction d'une phrase après MAJ du tableau :</h3>"; 
                                $table['first_name'] = ucfirst ($table['first_name']);
                                $table['last_name'] = strtoupper($table['last_name']);
                                $civilite = ($table['civility'] == "woman") ? "Mme " :  "Mr ";                               
                                echo "<p> ". $civilite . $table["first_name"] . " " . $table["last_name"] . " <br>J'ai " . $table["age"] . " ans et je mesure " . $table['size'] . "m.</p><br><br>";
                                
                                echo "<h3 class='fs-5'>===> Affichage d'une virgule à la place du point pour la taille :</h3>";
                                $table['size'] = str_replace('.' , ',', $table['size']);
                                $table['first_name'] = ucfirst ($table['first_name']);
                                $table['last_name'] = strtoupper($table['last_name']);
                                $civilite = ($table['civility'] == "woman") ? "Mme " :  "Mr ";                               
                                echo "<p> ". $civilite . $table["first_name"] . " " . $table["last_name"] . " <br>J'ai " . $table["age"] . " ans et je mesure " . $table['size'] . "m.</p><br><br>";
                            
                            } elseif (isset($_GET['loop'])) {
                                echo "<h2 class='text-center'>Boucle</h2><br>";
                                echo "<h3 class='fs-5'>===> Lecture du tableau à l'aide d'une boucle foreach</h3><br>";
                                $table = $_SESSION['table'];
                                $i = 0;
                                    foreach ($table as $x => $value) {
                                            echo '<div>à la ligne n°' . $i . ' correspond la clé "' . $x . '" et contient "' . $value . '"</div>';
                                            $i++;
                                        }
                                    echo "<br>";

                            } elseif (isset($_GET['function'])) {
                                echo "<h2 class='text-center'>Fonction</h2><br>";
                                echo "<h3 class='fs-5'> ===> J'utilise ma function readTable() </h3>";
                                    function readTable(){
                                        $i = 0;
                                        $table = $_SESSION['table'];
                                        foreach ($table as $property => $propertyValue) {
                                            echo 'à la ligne n°' . $i . ' correspond la clé "' . $property . '" et contient "' . $propertyValue . '"<br>';
                                            $i++;
                                        }
                                    }
                                readTable ();
                                echo "<br>";

                            } elseif (isset($_GET['del'])) {
                                session_destroy(); {
                                    echo '<p class="alert-success text-center py-3"> Données supprimées !</p>';
                                }
                                  
                            }else {
                            echo '<a role="button" class=" btn btn-primary me-2" href="index.php?add">Ajouter des données</a>';
                            echo '<a role="button" class=" btn btn-secondary" href="index.php?add_more">Ajouter plus de données</a>';
                        }
                            
                        } else {
                            echo '<a role="button" class=" btn btn-primary me-2" href="index.php?add">Ajouter des données</a>';
                            echo '<a role="button" class=" btn btn-secondary" href="index.php?add_more">Ajouter plus de données</a>';
                            
                        }
                        
                        
                    
                ?>
            
            </section>
        </div>
    </div>

    <br><?php include_once './includes/footer.inc.html' ; ?>
</body>
</html>

