Pipeline
1. Primer pipeline

Executa:

Get-Service

Ara executa:

Get-Service | Sort-Object Name

Respon:

    Quina diferència observes entre les dues sortides?
    Res.
    Què fa la part situada abans de |?
    Demana les dades dels serveis
    Què fa la part situada després de |?
    Ordenar els objectes pel Nom
    Sort-Object crea els serveis o rep serveis creats per una altra ordre?
    Rep serveis creats per un altra ordre
    Quina ordre és la que genera inicialment les dades?
    Get-Service

Fes ara la prova:

Get-Service | Sort-Object Status

Què ha canviat?

Ara els ordena els serveis pel seu estatus Posant primer els Stoped. 

Finalment:

Get-Service | Sort-Object Status -Descending

Explica amb les teves paraules què ha fet el pipeline.

El que fa es el mateix que abans és ha dir Crida els serveis i el 

2. El mateix problema sense pipeline

Executa:

$serveis = Get-Service

Ara:

$serveis

I després:

$serveis | Sort-Object Name

Compara-ho amb:

Get-Service | Sort-Object Name

Respon:

    Obtenen el mateix resultat?
    Quina diferència hi ha entre les dues formes de treballar?
    En quin cas s'ha guardat prèviament la informació en una variable?

Crea ara:

$serveisOrdenats = Get-Service | Sort-Object Name

Mostra:

$serveisOrdenats

Explica què conté aquesta variable.
3. Construir un pipeline pas a pas

Executa primer:

Get-Process

Ara:

Get-Process | Sort-Object CPU

Finalment:

Get-Process |
    Sort-Object CPU |
    Select-Object -First 5

No continuïs fins haver observat el resultat de cada ordre.

Completa:
Pas 	Ordre 	Què entra? 	Què surt?
1 	Get-Process 		
2 	Sort-Object CPU 		
3 	Select-Object -First 5 		

Explica què passaria si eliminéssim:

Sort-Object CPU

del pipeline.

Comprova-ho executant:

Get-Process | Select-Object -First 5

Els cinc processos obtinguts són necessàriament els que consumeixen més CPU?

Explica per què.
4. Ordenar processos

Emmagatzema en una variable tots els processos que s'estan executant ordenats de major a menor consum de CPU.

Mostra després el contingut de la variable.

A partir de la variable anterior:

    mostra els tres primers processos;
    mostra els cinc primers;
    mostra els deu primers.

No tornis a executar Get-Process per fer aquests tres apartats.
5. Canviar l'ordre del pipeline

Executa:

Get-Process |
    Sort-Object CPU -Descending |
    Select-Object -First 5

Ara executa:

Get-Process |
    Select-Object -First 5 |
    Sort-Object CPU -Descending

Respon:

    Les dues ordres fan el mateix?
    Per què?
    Quants processos arriben a Sort-Object en el primer cas?
    Quants processos arriben a Sort-Object en el segon?

Aquest exercici és important: l'ordre dels cmdlets dins del pipeline modifica el resultat.
6. Fitxers i carpetes

Executa:

Get-ChildItem

Ara ordena el resultat pel nom.

Després ordena'l segons la seva mida.

    Pista: observa les dades que mostra Get-ChildItem.

Mostra per pantalla els dos elements més grans.

Després:

    mostra els tres elements més petits;
    mostra els cinc elements més grans;
    guarda aquests cinc elements en una variable.

Comprova el contingut de la variable.
7. Modificar progressivament una ordre

Parteix de:

Get-ChildItem

Transforma-la progressivament fins aconseguir:

Mostrar només els tres elements més grans.

Documenta cada pas.

Per exemple:

Pas 1 → obtenir elements
Pas 2 → ...
Pas 3 → ...

No escriguis directament l'ordre final.

L'objectiu és construir el pipeline una operació cada vegada.
8. Arrays

Crea:

$servidors = "SRV04", "SRV01", "SRV03", "SRV02"

Mostra primer:

$servidors

Ara:

$servidors | Sort-Object

Respon:

    Què està enviant $servidors al pipeline?
    Quants elements passen pel pipeline?
    Sort-Object modifica la variable original?

Comprova-ho tornant a executar:

$servidors

Ara ordena els servidors en ordre invers.
9. Ports

Crea:

$ports = 443, 22, 8080, 80, 3389

Mostra:

    els ports tal com estan emmagatzemats;
    els ports ordenats de menor a major;
    els ports ordenats de major a menor;
    els dos ports més petits;
    els dos ports més grans.

En cada cas, utilitza $ports com a origen del pipeline.
10. Comptar elements

Executa:

Get-Process | Measure-Object

Localitza:

Count

Compara ara:

$processos = Get-Process
$processos.Count

amb:

Get-Process | Measure-Object

Respon:

    Què està comptant cada cas?
    Quin resultat obtens?
    Quina diferència observes en la sortida?

Fes el mateix amb:

Get-Service

