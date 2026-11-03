Import-Module ActiveDirectory

# Variable pel nom de la OU.
$NomOU = "DepartamentProva"

# Execucio
New-ADOrganizationalUnit -Name $NomOU -Path "OU=MusicCloud,DC=musiccloud,DC=local" -ProtectedFromAccidentalDeletion $false

Write-Host "S'ha creat la OU '$NomOU' correctament."