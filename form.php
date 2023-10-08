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
