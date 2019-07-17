<h1> PHP Partie 06 - Les paramètres d'URL </h1>
<h3> Ex 01 </h3>
<p> Paramètres URL à utiliser : index.php?lastname=Nemare&firstname=Jean <p>
<?php
if (isset($_GET['lastname']) AND isset($_GET['firstname'])) // On a le nom et le prénom
{
	echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom et un prénom !';
}

?>
<h3> Ex 02 </h3>
<p> Paramètres URL à utiliser : index.php?lastname=Nemare&firstname=Jean&age=35 <p>
<?php
if (isset($_GET['age']))
{
    echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
    echo ' Vous avez ' . $_GET['age'] . ' ans !';
}
else
{
	echo 'Il faut renseigner un age !';
}
?>
<h3> Ex 03 </h3>
<p> Paramètres URL à utiliser : index.php?startDate=2/05/2016&endDate=27/11/2016 <p>
<?php
if (isset($_GET['startDate']) AND isset($_GET['endDate']))
{
    echo 'Bonjour, la formation aura lieu du ' . $_GET['startDate'] . 
    ' au ' . $_GET['endDate'] . ' !';
}
else
{
	echo 'Il faut renseigner une date de début et une date de fin !';
}
?>
<h3> Ex 04 </h3>
<p> Paramètres URL à utiliser : index.php?language=PHP&server=LAMP <p>
<?php
if (isset($_GET['language']) AND isset($_GET['server']))
{
    echo 'Bonjour, nous utilisons le langage ' . $_GET['language'] . 
    ' sur un serveur ' . $_GET['server'] . ' !';
}
else
{
	echo 'Il faut renseigner un langage et un serveur !';
}
?>
<h3> Ex 05 </h3>
<p> Paramètres URL à utiliser : index.php?week=12 <p>
<?php
if (isset($_GET['week']))
{
    echo 'Bonjour, la formation dure ' . $_GET['week'] . ' semaine(s) !';
}
else
{
	echo 'Il faut renseigner le nombre de semaines !';
}
?>
<h3> Ex 06 </h3>
<p> Paramètres URL à utiliser : index.php?building=12&room=101 <p>
<?php
if (isset($_GET['building']) AND isset($_GET['room']))
{
    echo 'Bonjour, nous vous attendons chambre ' . $_GET['room'] . 
    ' située dans le batiment ' . $_GET['building'] . ' !';
}
else
{
	echo 'Il faut renseigner un batiment et une chambre !';
}
?>