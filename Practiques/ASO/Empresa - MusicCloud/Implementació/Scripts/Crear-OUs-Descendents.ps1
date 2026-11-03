# ================================================
# Script crear OU descendents dins de MusicCloud
# ================================================

Import-Module ActiveDirectory
$Domini = "DC=musiccloud,DC=local"

# Crear les OU descendents

New-ADOrganizationalUnit -Name "Usuaris" -Path "OU=MusicCloud,$Domini" -ProtectedFromAccidentalDeletion $false
New-ADOrganizationalUnit -Name "Equips" -Path "OU=MusicCloud,$Domini" -ProtectedFromAccidentalDeletion $false
New-ADOrganizationalUnit -Name "Grups" -Path "OU=MusicCloud,$Domini" -ProtectedFromAccidentalDeletion $false

Write-Host "OUs descendents creades correctament."