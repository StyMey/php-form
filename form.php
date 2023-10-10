<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="telephone">Télephone :</label>
      <input  type="text"  id="telephone"  name="phone_number">
    </div>
      <select>
        <option value="Langages">Langages</option>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="php">PHP</option>
        <option value="js">JavaScript</option>
      </select>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  <?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if(!isset($_POST['user_name']) || trim($_POST['user_name']) === '') 
        $errors[] = "Le nom est obligatoire";
    if(!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '') 
        $errors[] = "Le prénom est obligatoire";
    if(!isset($_POST['user_email']) || trim($_POST['user_email']) === '') 
        $errors[] = "L'adresse e-mail est obligatoire";
    if (!filter_var('user_email', FILTER_VALIDATE_EMAIL)) 
        $erreur[] = "Le format de l'email est invalide";
    if(!isset($_POST['phone_number']) || trim($_POST['phone_number']) === '') 
        $errors[] = "Le numéro de téléphone est obligatoire";
    if(!isset($_POST['Langages']) || trim($_POST['Langages']) === '') 
        $errors[] = "La sélection est obligatoire";
    if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '') 
        $errors[] = "Le message est obligatoire";

    if(empty($errors)) {
        // traitement du formulaire
        // puis redirection
        header('Location: thanks.php');
    }
}
?>