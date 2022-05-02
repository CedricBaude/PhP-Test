<p class="h1 text-center">Ajouter des données</p>

<form action="index.php" method="POST">
  <div class="row">
    <div class="coordonnees col-8 mt-3">
      <div class="form-group">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="prenom" name="user-prenom" placeholder="Prénom" required>
            <label for="prenom"> Prénom </label>
          </div>
      </div>
      <div class="form-group">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nom" name="user-nom" placeholder="Nom" required> 
            <label for="nom"> Nom </label>
          </div>
      </div>
      <div class="form-group">      
        <label for="age"> Age (18 à 70 ans) </label>
        <input type="number" min="18" max="70" class="form-control" id="age" name="user-age" placeholder="Renseignez votre âge" required>
      </div>

      <br>

      <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"> Taille ( 1,26 à 3m ) </div>
        </div>   
            <input type="number" min="1.26" max="3" step="0.01" class="form-control" id="taille" name="user-taille" placeholder="1,7" required>
        <div class="input-group-prepend">
            <div class="input-group-text"> m </div>
        </div>
      </div>

      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="sexh" name="user-sex" value="woman" required>
        <label class="form-check-label" for="inlineRadios2"> Femme </label>
      </div>

      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" id="sexf" name="user-sex" value="man" required>
      <label class="form-check-label" for="inlineRadios1"> Homme </label>
      </div>
    </div>
    <div class="connaissances col-4 mt-3">

    </div>
  </div>

<br>


  <button type="submit" class="btn btn-primary float-end" name="enregistrer">Enregistrer les données</button>
  </form>