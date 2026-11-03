# ======================================================
# Script intel·ligent (Crear OU només sino existeixen)
# ======================================================

Import-Module ActiveDirectory
$Domini = "DC=musiccloud,DC=local"

function Assegurar-OU {
    param([string]$Nom, [string]$RutaBase)
    $dn = "OU=$Nom,$RutaBase"
    $existent = Get-ADObject -Filter "DistinguishedName -eq '$dn'"
	
    if (-not $existent) {
        New-ADOrganizationalUnit -Name $Nom -Path $RutaBase -ProtectedFromAccidentalDeletion $false
        Write-Host "[+] Crada OU: $Nom a $RutaBase"
    }
    else {
        Write-Host "[=] L'OU '$Nom' ja existeix. S'omet."
    }
}

# 1. OU principal

Assegurar-OU -Nom  "MusicCloud" -RutaBase $Domini

# 2. OUs de primer nivell

Assegurar-OU -Nom "Usuaris" -RutaBase "OU=MusicCloud,$Domini"
Assegurar-OU -Nom "Equips" -RutaBase "OU=MusicCloud,$Domini"
Assegurar-OU -Nom "Grups" -RutaBase "OU=MusicCloud,$Domini"

# 3. Departaments dins D'usuaris

$Departaments = "Adminsitracio", "Comercial", "Desenvolupament", "Sistemes", "Direccio"
foreach ($dep in $Departaments) {
    Assegurar-OU -Nom $dep -RutaBase "OU=Usuaris,OU=MusicCloud,$Domini"
}

# 4. Equips dins de la OU Equips

$TipusEquips = "Clients", "Servidors"
foreach ($Eq in $TipusEquips) {
    Assegurar-OU -Nom $Eq -RutaBase "OU=Equips,OU=MusicCloud,$Domini"
}

Write-Host "Procés d'assegurament d'OUs finalitzat correctament.!"