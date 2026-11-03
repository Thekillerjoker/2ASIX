# =====================================
# Script Eliminar OU 
# =====================================

Import-Module ActiveDirectory
$Domini = "DC=musiccloud,DC=local"

# Eliminar departaments

$SubDep = "Administracio", "Comercial", "Desenvolupament", "Sistemes", "Direccio"
foreach ($d in $SubDep) {
    Remove-ADOrganizationalUnit -Identity "OU=$d,OU=Usuaris,OU=MusicCloud,$Domini" -Recursive -Confirm:$false
}

# -Recursive: Indica a powersehll que elimini l'objecte seleccionat i tots els subobjectes que depenen d'ell.
# -Confirm:$false: Desactiva el missatge de confiramció , és ha dir no cal prémer S o Enter a cada pas.

# Eliminar equips

$SubEquip = "Clients", "Servidors"
foreach ($eq in $SubEquip) {
    Remove-ADOrganizationalUnit -Identity "OU=$eq,OU=Equips,OU=MusicCloud,$Domini" -Recursive -Confirm:$false
}

# Eliminar primer nivell i Principal

Remove-ADOrganizationalUnit -Identity "OU=Usuaris,OU=MusicCloud,$Domini" -Recursive -Confirm:$false
Remove-ADOrganizationalUnit -Identity "OU=Equips,OU=MusicCloud,$Domini" -Recursive -Confirm:$false
Remove-ADOrganizationalUnit -Identity "OU=Grups,OU=MusicCloud,$Domini" -Recursive -Confirm:$false
Remove-ADOrganizationalUnit -Identity "OU=MusicCloud,$Domini" -Recursive -Confirm:$false

Write-Host "Tota l'estructura de MusicCloud ha estat eliminada."