<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="prenom">
    </div>
    <div>
      <label  for="phone">Numéro :</label>
      <input  type="text"  id="phone"  name="phone">
    </div>
    <div><label for="sujet">Sujet :</label>
    <select name="sujet">
      <option value="contact">Contact</option>
      <option value="suggestion">Suggestion</option>
      <option value="bug">Bug</option>
    </select></div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>