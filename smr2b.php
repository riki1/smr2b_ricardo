
<a href="http://192.168.0.108/smr2b_jesuscrespo/smr2b.php">jesus</a>
Ricardo Gallo
<a href="http://192.168.0.115/smr2b_adrian/smr2b.php">adrian</a>


<form>
	<input name="email" type="email">
	<button>Enviar</button>
</form>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>

<?php
if(isset($_GET['email'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['email']);
	fwrite($f,"\r\n");
	fclose($f);
}
?>