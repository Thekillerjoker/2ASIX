# ====================================================================================
# Script per crear OU amb el nom de la OU i la ruta variables però no afecta l'ordre
# ====================================================================================

Import-Module ActiveDirectory

# Declarem les variables 
$RutaBase = "OU=MusicCloud,DC=musiccloud,DC=local"
$LlistaOU = "DeptProva1", "DeptProva2"

foreach ($nomOU in $LlistaOU) {
    $RutaCompleta = "OU=$nomOU,$RutaBase"
    $Existeix = Get-ADObject -Filter "DistinguishedName -eq '$RutaCompleta'"
    if (-not $Existeix) {
        New-ADOrganizationalUnit -Name $nomOU -Path $RutaBase -ProtectedFromAccidentalDeletion $false
        Write-Host "[+] S'ha creat la OU '$nomOU' a '$RutaCompleta' correctament."
    }
    else {
        Write-Host "[!] L'OU '$nomOU' ja existeix i s'omet."
    }
}
