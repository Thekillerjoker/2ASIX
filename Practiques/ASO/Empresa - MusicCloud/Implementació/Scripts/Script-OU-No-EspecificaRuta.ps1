# ===============================
# Escript on el nom de la OU és obligatori, si la ruta no s'especifica, hi ha una ruta per defecte
# ===================================================================================================

Import-Module ActiveDirectory

# Variables

$LlistaOUs = "Nomdelsdept"

# Si la ruta no s'especifica hi haura la de per defecte.
$RutaPersonalitzada = ""
$RutaPerDefecte = "OU=MusicCloud,DC=musiccloud,DC=local"

if (-not $LlistaOUs -or $LlistaOUs.Count -eq 0) {
    Write-Host "[-] Error: El nom de la OU és obligatori."
    exit
}

# Assignar la ruta:
if ([string]::IsNullOrEmpty($RutaPersonalitzada)) {
    $RutaBase = $RutaPerDefecte
    Write-Host "[i] No s'ha especificat ruta personalitzada . S'utilitza la ruta per defecte."
}
else {
    $RutaBase = $RutaPersonalitzada
    Write-Host "[i] Utilitzant la ruta especificada : '$RutaBase'."
}

# Creacio de la OU
foreach ($NomOU in $LlistaOUs) {
    $RutaCompleta = "OU=$NomOU,$RutaBase"
    $Existeix = Get-ADObject -Filter "DistinguishedName -eq '$RutaCompleta'"
    if (-not $Existeix) {
        New-ADOrganizationalUnit -Name $NomOU -Path $RutaBase -ProtectedFromAccidentalDeletion $false
        Write-Host "`[+] S'ha creat la OU '$NomOU' a '$RutaBase' correctament."
    }
    else {
        Write-Host "[!] L'OU '$NomOU' ja existeix i s'omet."
    }
}