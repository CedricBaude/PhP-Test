<?php  ?>


<!DOCTYPE html>
<html lang="fr">
    
    <?php include_once './includes/head.inc.html' ;  ?>

<body>

    <?php include_once './includes/header.inc.html' ; ?>

    <div class="container">
        <div class="row">
            <nav class="col-md-3 mt-3 ">
                <a href="index.php" class="btn btn-outline-secondary w-100" role="button">Home</a>
            </nav>

            <section class="col-9 mt-3">
                <a href="index.php?add" class="btn btn-primary" role="button">Ajouter des données</a>

                <?php  include 'includes/form.inc.html'; ?>
                

            </section>
        </div>

    </div>




    <br><?php include_once './includes/footer.inc.html' ; ?>
</body>
</html>

