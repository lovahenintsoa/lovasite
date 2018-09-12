
<?php session_start();?>
<html>
<title> oclock php </title>
<body>

<?php  // Base oclock et la table fiche dans wampserver sinon on creer une table?..


if(isset($_POST['envoyer']))
{
$sexe=trim($_POST['sexe']; // trim enleve les espaces
$nom=trim($_POST['nom'];
$prenom=trim($_POST['prenom'];
$promo=trim($_POST['promo'];
$mel=trim($_POST['mel'];
$tel=trim($_POST['tel'];
$connect = mysql_connect('localhost','root','')or die ('Error'); // sans mots de pass local
mysql_select_db('oclock')
$req= mysql_query("INSERT INTO fiche VALUES(",'sexe','$nom','$prenom','$promo','$mel','$tel'");

die("inscription términée connctez <a" href= "FormeAcceuil.html"</a>vous);
}
?>

</body>
</html>





