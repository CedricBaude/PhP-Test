<p class="h1 text-center">Ajouter des données</p>

<form action="index.php" method="POST">
  <div class="row">
    <div class="coordonnees card col-md-7 mx-auto my-1">
      <div class="form-group">
          <div class="form-floating mb-3 mt-3">
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
      <div class="w-100">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="sexh" name="user-sex" value="woman" required>
          <label class="form-check-label" for="inlineRadios2"> Femme </label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="sexf" name="user-sex" value="man" required>
          <label class="form-check-label" for="inlineRadios1"> Homme </label>
        </div>
      </div>
      <br>
    </div>
    <div class="connaissances card col-md-4 mx-auto my-1">
      <p class="mt-2">Connaissances</p>
      <div class="form-check">
        <input class="form-check-input" type="checkbox"  id="htlm" name="skill-html" value="HTML5" placeholder="html">
        <label class="form-check-label" for="flexCheckDefault">
          HTML
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="css" name="skill-css" value="CSS3" placeholder="css">
        <label class="form-check-label" for="flexCheckDefault">
          CSS
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="javascript" name="skill-javascript" value="JavaScript" placeholder="javascript">
        <label class="form-check-label" for="flexCheckDefault">
          JavaScript
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="php" name="skill-php" value="PHP" placeholder="php">
        <label class="form-check-label" for="flexCheckDefault">
          PHP
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="mysql" name="skill-mysl" value="MySQL" placeholder="mysql">
        <label class="form-check-label" for="flexCheckDefault">
          MySQL
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="bootstrap" name="skill-bootstrap" value="BootStrap" placeholder="bootstrap">
        <label class="form-check-label" for="flexCheckDefault">
          BootStrap
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="symphony" name="skill-symphony" value="Symphony" placeholder="symphony">
        <label class="form-check-label" for="flexCheckDefault">
          Symphony
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="react" name="skill-react" value="React" placeholder="react">
        <label class="form-check-label" for="flexCheckDefault">
          Réact
        </label>
      </div>

      <div>
        <label for="color" class="form-label">Couleur préférée</label>
        <input type="color" class="form-control form-control-color" id="color" value="#563d7c" title="Choose your color">
    </div>
    <div>
        <label class="form-label mt-2">Date de naissance</label>
        <input type="date" class="form-control w-50" id="birthday">
    </div>

    </div>

    <div class="form-group ajout_photo card col-md-11 mx-auto my-1">
      <label for="formFile" class="form-label">Joindre une photo (jpg ou png)</label>
      <input class="form-control" type="file" id="formFile">
    </div>


    
  </div>

<br>


  <button type="submit" class="btn btn-primary float-end" name="enregistrer">Enregistrer les données</button>
  </form>