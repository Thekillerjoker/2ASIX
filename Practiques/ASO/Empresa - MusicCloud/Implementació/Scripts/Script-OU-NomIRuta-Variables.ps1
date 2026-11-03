Import-Module ActiveDirectory

# Declarar les variables
$NomOU = "OuDeptProva"
$RutaOU = "OU=MusicCloud,DC=musiccloud,DC=local"

# Execucio

New-ADOrganizationalUnit -Name $NomOU -Path $RutaOU -ProtectedFromAccidentalDeletion $false

Write-Host "OU '$NomOU' a '$RutaOU' creada correctament."