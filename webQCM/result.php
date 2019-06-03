<?php
$aip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Paris');
$e_time = date('H:i');
$nom = $_POST['name'];
$prenom = $_POST['surname'];
$classe = $_POST['classe'];
$s_date = $_POST['sd'];
$s_time = $_POST['st'];
$duration = $_POST['ts'];
$score = $_POST['score'];
$fingp = $_POST['fp'];
$qTitle = $_POST['qTitle'];
$qURL = $_POST['qURL'];
$ua = $_POST['ua'];
if (file_exists("myStat")) {
	$fp = fopen ("myStat", "a");
    fputcsv($fp, array($qTitle,$nom,$prenom,$classe,$aip,$s_date,$s_time,$e_time,round($duration),round($score),$ua,$fingp));
} else {
	$fp = fopen ("myStat", "a");
    fputcsv($fp, array("QCM","Nom","Prénom","Classe","AIP","Date","Heure début","Heure fin", "Durée", "Score", "user-agent","fingerprint"));
	fputcsv($fp, array($qTitle,$nom,$prenom,$classe,$aip,$s_date,$s_time,$e_time,round($duration),round($score),$ua,$fingp));
}
fclose ($fp);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questionnaire terminé</title>
<style type="text/css">
body{
margin:40px auto;
max-width:650px;
line-height:1.6;
font-size:22px;
color:#444;
padding:0 10px;
background-color:#29477F;
}
h1,h2,h3{
line-height:1.2;
}
h2{
color: #ddd;
text-shadow: 2px 2px 2px #222;
text-align: center;
}
input,select{
width:100%;
font-size:120%;
padding:.4em;
margin:.2em;
box-sizing:border-box;
}
.space{
margin:1em;
}
.content{
background-color:#999;
padding:1em;
}
.questions{
font-size:150%;
color:black;
line-height:1.2;
font-weight:800;
}
input.selected{
background-color:#33c;
color:white;
}
.tip{
color:white;
padding:.5em;
margin:.2em;
width:100%;
box-sizing:border-box;
box-shadow:2px 2px 4px black;
}
input:disabled{
opacity:.6;
}
.score{
padding: 1em;
text-align: center;
margin: 1em;
font-size: xx-large;
background: #fff;
font-weight: bold;
box-shadow: 2px 2px 3px black;
border-radius: 10px;
}
</style>
</head>
<body>
<div class="content">
	<div class="questions">
<h2>Résultats</h2>
	</div>
	<div class="answers">
    <p>Votre score :</p>
    <div class="score">
    <?php
    echo round($score);
    ?>%
    </div>
	</div>
	<div class="tip">
Si vous estimez qu'il vous faut réviser, replongez vous dans vos cahiers, <a href=# onclick="recommencer();">Recommencer</a> le questionnaire ou allez chercher le cours sur <a href="">Pronote</a>.
Si vous avez une question sur le cours, n'hésitez pas à <a href="mailto:">m'écrire</a>.
	</div>
	<div class="space"></div>
	<div id="buttons">
<!--	<input type="button" value="Question suivante">
	<input type="button" value="Valider"> -->
	</div>
</div>



<form method="GET" action="../<?php echo $qURL ?>/index.html" id="infos">
<?php
echo "<input type=\"hidden\" name=\"name\" value=\"$nom\" />";
echo "<input type=\"hidden\" name=\"surname\" value=\"$prenom\" />";
echo "<input type=\"hidden\" name=\"classnr\" value=\"$classe\" />";
?>
</form>

    </body>
<script>
function recommencer(){
    document.getElementById("infos").submit();
}
</script>
</html>
