```powershell
$server="web-server"#Posar nom
$server #llenxarla
$port=800
$enabled=$true #habilitarla
$enabled=$false #deshabilitarla
$total= 10 +5

$server="WebServer"#Rnombrarla
write-Host "$services - 1"#O escriu tots seguits
Get-services #Tots els sevies del ordinador
$services="" #Es que no te valor
$services= $null # Es que no hi ha
# Quan sigui un objecte li poso $null
# Quan sigui un string li puc posar ""

```
