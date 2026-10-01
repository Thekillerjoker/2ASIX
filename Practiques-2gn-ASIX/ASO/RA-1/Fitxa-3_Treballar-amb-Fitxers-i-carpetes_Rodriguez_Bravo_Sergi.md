Treballar amb fitxers i carpetes

Situació: encara no hem estudiat les ordres de PowerShell per treballar amb fitxers i carpetes. Les haurem de descobrir utilitzant les eines d'ajuda de PowerShell.

1. Buscar ordres

Busca cmdlets que continguin la paraula Item:

Get-Command *Item*

Observa les ordres que apareixen.
![Captura1](./Empresa-1/Captures-Powershell/Capt1.png)

Intenta identificar quina ordre podria servir per:

    crear un element;
    "New-Item"
    eliminar un element;
    "Remove-Item"
    canviar el nom d'un element;
    "Rename-Item"
    copiar un element;
    "Copy-Item"
    moure un element.
    "Move-Item"

2. Investigar una ordre

Sense executar-la encara, consulta què fa:

Get-Help New-Item

Respon:

    Per a què serveix New-Item? 
    "Per crear un nou element."
    Quina estructura té l'ordre?
    "New-Item [-Path] <string[]> [<CommonParameters>]

Consulta alguns exemples:

Get-Help New-Item -Examples

3. Descobrir un paràmetre

Consulta què significa el paràmetre -ItemType:

Get-Help New-Item -Parameter ItemType

![Capt-2](./Empresa-1/Captures-Powershell/Capt-2.png)


A partir de l'ajuda, intenta descobrir com crear una carpeta.

Per exemple, haurien d'arribar a alguna cosa semblant a:

New-Item -ItemType Directory -Name Prova

![Capt-3](./Empresa-1/Captures-Powershell/Capt-4.png)


4. Nou repte

Ara necessites saber com canviar el nom de la carpeta, però no coneixes l'ordre.

Utilitza:

Get-Command *Item*

i després consulta l'ajuda de l'ordre que creguis adequada.

L'objectiu és arribar a descobrir:

Rename-Item

i consultar:

Get-Help Rename-Item -Examples

Sense utilitzar Internet, descobreix quins cmdlets faries servir per:

    crear una carpeta;
    "New-Item -ItemType Directory -Name NomCarpeta"
    canviar-li el nom;
    "Rename-Item Nomactual NomNou"
    copiar-la;
    "Copy-Item Carpetaorigen carpetadesti"
    moure-la;
    "Move-Item Carpetaorigen carpetadesti"
    eliminar-la.
    "Remove-Item nomcarpeta"
Condició: només pots utilitzar Get-Command i Get-Help per investigar les ordres.

Descobrir ordres de xarxa amb PowerShell
Situació

Estàs administrant un servidor Windows i necessites consultar informació de la seva configuració de xarxa.

Encara no coneixes les ordres de PowerShell relacionades amb xarxa.

La teva feina és descobrir-les utilitzant principalment:

Get-Command
Get-Help

No pots buscar les respostes a Internet.
Tasques

Descobreix quines ordres de PowerShell et permeten obtenir la informació següent:

    - Mostrar els adaptadors de xarxa de l’equip.
    "La comanda és 'Get-NetAdapter'."
    "O he trobat amb 'Get-Command *NetAdapter*'."

    "Què fa: mostra els adaptadors de xarxa de l’equip, el seu estat, velocitat, nom, etc."

    - Consultar les adreces IP configurades.
    "La commanda és 'Get-NetIPAddress'."
    "O he trobat amb 'Get-Command *NetIPAddress*'."

    "Què fa: mostra les adreces IP configurades en els adaptadors de xarxa."

    - Consultar la configuració IP completa dels adaptadors de xarxa.
    "La comanda és 'Get-NetIPConfiguration'."
    "O he trobat amb 'Get-Command *NetIPConfiguration*'."
    
    "Què fa: mostra la configuració IP dels adaptadors, incloent-hi informació com l'adreça IP, la porta d'enllaç i els servidors DNS."

    - Consultar els servidors DNS configurats.
    "La comanda és 'Get-DnsClientServerAddress'."
    "O he trobat amb 'Get-Command *Dns*'."

    "Què fa: mostra els servidors DNS configurats per a cada adaptador de xarxa."

    - Comprovar si hi ha connectivitat amb un altre equip de la xarxa.
    "La comanda és 'Test-NetConnection IPdesti'."
    "O he trobat amb 'Get-Command *NetConnection*'."

    "Què fa: comprova la connectivitat de xarxa amb un altre equip o una adreça IP."
    


## Resultat comanda Get-NetAdapter:

![Capt-5](./Empresa-1/Captures-Powershell/Capt-5.png)

## Resultat comanda Get-NetIPAddress:

![Capt-6](./Empresa-1/Captures-Powershell/Capt-6.png)


## Resultat comanda Get-NetIPConfiguration:

![Capt-7](./Empresa-1/Captures-Powershell/Capt-7.png)

## Resultat comanda Get-DnsClientServerAddress:

![Capt-8](./Empresa-1/Captures-Powershell/Capt-8.png)

## Reesultat comanda Test-NetConnection IPdesti:

![Capt-9](./Empresa-1/Captures-Powershell/Capt-9.png)