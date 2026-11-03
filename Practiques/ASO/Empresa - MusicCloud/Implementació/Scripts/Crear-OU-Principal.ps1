# ==============================================
# Script per crear la OU princpal (MusicCloud)
# ==============================================

Import-Module ActiveDirectory
$Domini = "DC=musiccloud,DC=local"

# Crear la OU principal és ha dir MusicCloud

New-ADOrganizationalUnit -Name "MusicCloud" -Path "$Domini" -ProtectedFromAccidentalDeletion $false

Write-Host "OU MusicCloud creada correctament."