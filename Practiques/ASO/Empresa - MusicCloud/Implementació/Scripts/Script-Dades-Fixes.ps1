# ===================================================================
# Script per crear, on tant el nom de la OU com la ruta son fixes.
# ===================================================================

Import-Module ActiveDirectory

# Dades fixes per crar la OU "Projectes" dins de "MusicCloud"
New-ADOrganizationalUnit -Name "Projectes" -Path "OU=MusicCloud,DC=musiccloud,DC=local" -ProtectedFromAccidentalDeletion $false

Write-Host "S'ha creat correctament la OU de manera fixa."