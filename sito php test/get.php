<html>
<head>
<title>Registrazione GET</title>
</head>

<body>
Conferma registrazione
<?php
$nome=$_GET["nome"];
$cognome=$_GET["cognome"];
echo "La richiesta di $nome $cognome è stata registrata.<br />";
?>
</body>
</html>