<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Recherche</title>
	<meta name="generator" content="Geany 1.27" />
	<meta charset="utf-8">
  <style type="text/css">@import url(css/global.css);</style>
  <style type="text/css">@import url(css/recherche.css);</style>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/recherche.js"></script>
</head>

<body>
  <div id="toolbar">
    <ul class="menu">
      <li class="menu"><img class="logo" src="ressources/logo.png" alt="logo du site"></li>
      <li class="menu"><a href="index.html" class="menu">Site du Hackeur</a></li>
      <li class="menu dropdown">
        <span class="menu">A Propos <img class="icon" src="ressources/icon-down-white.png" alt="icon flèche du bas"></span>
        <ul class="dropdown-content">
          <li class="style"><a href="notre-organisation/equipe.html">Equipe</a></li>
          <li class="style"><a href="notre-organisation/entreprise.html">Entreprise</a></li>
        </ul>
      </li>

      <li class="menu dropdown">
        <span class="menu">Formation <img class="icon" src="ressources/icon-down-white.png" alt="icon flèche du bas"></span>
        <ul class="dropdown-content">
          <li><a href="formation/catalogue-de-formation.html">Catalogue</a></li>
          <li><a href="formation/comparatif.html">Comparatif</a></li>
        </ul>
      </li>
      <li class="menu"><a href="contact.html" class="menu">Contact<img class="icon" src="ressources/icon-mail.png" alt="icon courier"></a></li>
      <li class="menu"><a href="recherche.php" class="menu">Recherche<img class="icon" src="ressources/icon-recherche.png" alt="icon loupe"></a></li>
    </ul>
  </div>
  
  <div id="main">
    <form action="recherche.php" method="post">
    <!-- Ici va s'afficher le terme saisie dans le champ recherche
    si il n'est pas nul -->
    <?php if($_POST['recherche'] != ''): ?>
      <input type="text" name="recherche" value="<?php echo $_POST['recherche'] ; ?>">
    <?php else: ?>
      <input type="text" name="recherche" >
    <?php endif; ?>

    <input type="submit" value="Rechercher">

  </form>
  <?php if(strtolower($_POST['recherche']) == 'formation'): ?>
    <!-- Ici va s'afficher la liste des resultats pour html-->
    <table>
      <tr>
        <th>Titre</th>
        <th>Thème</th> 
        <th>Durée</th>
        <th>Format</th>
        <th>Type accès</th>
        <th>Lien</th>
      </tr>
      <tr>
        <td>Formule FREE niveau I</td>
        <td>Script Kiddie</td>
        <td>120 jours</td>
        <td>en ligne</td>
        <td>free</td>
        <td><a href="formation/scriptkiddie.html">détails</a></td>
      </tr>
      <tr>
        <td>Formule PRO niveau I</td>
        <td>HackerMan</td>
        <td>90 jours</td>
        <td>en ligne</td>
        <td>pro</td>
        <td><a href="formation/hackerman.html">détails</a></td>
      </tr>
      <tr>
        <td>PREMIUM niveau I</td>
        <td>Rainbow Hat</td>
        <td>70 jours</td>
        <td>en ligne</td>
        <td>pro</td>
        <td><a href="formation/rainbowhat.html">détails</a></td>
      </tr>
      <tr>
        <td>Formule PRO niveau II</td>
        <td>Good Boy</td>
        <td>70 jours</td>
        <td>sur site</td>
        <td>premium</td>
        <td><a href="#">détails</a></td>
      </tr>
      <tr>
        <td>Formule PREMIUM niveau II</td>
        <td>Master Hat</td>
        <td>50 jours</td>
        <td>sur site</td>
        <td>premium</td>
        <td><a href="#">détails</a></td>
      </tr>
      <tr>
        <td>Formule PREMIUM niveau III</td>
        <td>Expert</td>
        <td>70 jours</td>
        <td>sur site</td>
        <td>premium</td>
        <td><a href="#">détails</a></td>
      </tr>
    </table>

  <?php else: ?>
<!-- Ici va s'afficher la liste des resultats pour les autres recherche
  => il faut adapter le message pour pas de résultats  -->
  Aucun résultat ne correspond aux termes de recherche spécifiés 
  <h3>Suggestions</h3>
  <ul class="suggestion">
    <li class="suggestion">Vérifiez l’orthographe des termes de recherche.</li>
    <li class="suggestion">Essayez d'autres mots.</li>
    <li class="suggestion">Utilisez des mots clés plus généraux.</li>
    <li class="suggestion">Spécifiez un moins grand nombre de mots.</li>
  </ul>

<?php endif; ?>
</div>
<div id="footer">
 <ul>
   <li><a href="notre-organisation/equipe.html"> L'équipe </a></li>
   <li>COPYRIGHT &copy; 2017 </li>
   <li><a href="mention.html">Mentions Légales </a></li>
 </ul>
</div>
</body>

</html>
