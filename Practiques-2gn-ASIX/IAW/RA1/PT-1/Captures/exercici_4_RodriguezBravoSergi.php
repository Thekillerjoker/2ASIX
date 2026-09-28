<?php
echo "<h2>Variables d'entorn</h2>";
echo "<br>";
echo "Arrel dels documents Web: " . $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo "Versió d'Apache: " . $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "Navegador: " . $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "Adreça IP del client: " . $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "Timestamp: " . $_SERVER['REQUEST_TIME'];
?>