<html>
<head>
<title>Registrazione POST</title>
</head>

<body>
Conferma registrazione
<?php
$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
echo "La richiesta di $nome $cognome è stata registrata.<br />";
?>
</body>
</html>