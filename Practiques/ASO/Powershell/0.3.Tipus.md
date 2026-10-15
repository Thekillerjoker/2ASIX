Tipus de dades
1. Identificar tipus

Crea les variables següents:

$nom = "Servidor01"
$port = 443
$actiu = $true
$espai = 12.5

Consulta el tipus de cadascuna amb:

.GetType()

Completa una taula com aquesta:
Variable 	Valor 	Tipus
$nom 	Servidor01 	
$port 	443 	
$actiu 	$true 	
$espai 	12.5 	
2. Número o text?

Executa:

$a = 10
$b = 5

$a + $b

Després:

$a = "10"
$b = "5"

$a + $b

Respon:

    Quin resultat obtens en cada cas?

    Per què no és el mateix? Mostra després el contingut de cadascuna de les variables.

    Quin tipus tenen $a i $b en cada cas?

3. Canviar el tipus d'una variable

Executa:

$valor = 100

Consulta:

$valor.GetType()

Ara executa:

$valor = "100"

i torna a consultar:

$valor.GetType()

Respon:

Ha canviat el valor? Ha canviat el tipus?
4. Tipus explícits

Executa:

[int]$port = 443

Comprova el tipus:

$port.GetType()

Ara prova:

[string]$portText = 443

Consulta també:

$portText.GetType()

Respon:

Tot i que visualment els dos valors semblen 443, són del mateix tipus?
5. Booleans

Crea:

$serveiActiu = $true
$servidorDisponible = $false

Consulta els tipus.

Després mostra un missatge amb:

Write-Host "Servei actiu: $serveiActiu"
Write-Host "Servidor disponible: $servidorDisponible"

6. General

Crea variables per representar un servidor amb aquesta informació:

Nom: SRV-WEB01
Port: 443
Espai lliure: 125.7 GB
Actiu: True

Després:

    mostra el valor de totes les variables;
    consulta el tipus de cadascuna;
    indica quin tipus de dada has utilitzat per cada valor.
