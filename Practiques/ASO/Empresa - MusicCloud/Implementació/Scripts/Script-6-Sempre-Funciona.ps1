# =============================================
# El script funciona en totes les situacions
# =============================================

Import-Module ActiveDirectory 

# Variables
$LlistaOUs = "Departament1", "Departament2"
$RutaPersonalitzada = ""                                       
$RutaPerDefecte = "OU=MusicCloud,DC=musiccloud,DC=local"

# 1. Validació: El nom de la OU és obligatori
if (-not $LlistaOUs -or $LlistaOUs.Count -eq 0) {
    Write-Host "[-] Error critic: El nom de la OU es obligatori." 
    exit
}

# 2. Gestió de la ruta (Si no s'especifica, s'aplica la per defecte)
if ([string]::IsNullOrEmpty($RutaPersonalitzada)) {
    $RutaBase = $RutaPerDefecte
    Write-Host "[i] No s'ha especificat ruta personalitzada. S'utilitza la per defecte: '$RutaBase'"
}
else {
    $RutaBase = $RutaPersonalitzada
    Write-Host "[i] Utilitzant la ruta especificada: '$RutaBase'"
}

# 3. Creació segura i robusta de cada OU
foreach ($NomOU in $LlistaOUs) {
    $RutaCompleta = "OU=$NomOU,$RutaBase"
    
    $Existeix = Get-ADObject -Filter "DistinguishedName -eq '$RutaCompleta'"

    if (-not $Existeix) {
        try {
            New-ADOrganizationalUnit -Name $NomOU -Path $RutaBase -ProtectedFromAccidentalDeletion $false
            Write-Host "[+] Èxit: S'ha creat la OU '$NomOU' a '$RutaBase'." 
        }
        catch {
            Write-Error "[-] S'ha produït un error en crear la OU '$NomOU': $_"
        }
    }
    else {
        Write-Host "[!] Avís: L'OU '$NomOU' ja existeix a Active Directory. S'omet."
    }
}

Write-Host "[ús] Procés finalitzat correctament."