Pipeline
1. Primer pipeline

Executa:
```powershell

Get-Service
```

Ara executa:
```powershell
Get-Service | Sort-Object Name
```

Respon:

  1.  Quina diferència observes entre les dues sortides?
    Res.
  2.  Què fa la part situada abans de |?
    Demana les dades dels serveis
  3.  Què fa la part situada després de |?
    Ordenar els objectes pel Nom
  4.  Sort-Object crea els serveis o rep serveis creats per una altra ordre?
    Rep serveis creats per un altra ordre
  5.  Quina ordre és la que genera inicialment les dades?
    Get-Service

Fes ara la prova:
```powershell
Get-Service | Sort-Object Status
```

Què ha canviat?

Ara els ordena els serveis pel seu estatus Posant primer els Stoped. 

Finalment:
```powershell
Get-Service | Sort-Object Status -Descending
```

Explica amb les teves paraules què ha fet el pipeline.

El que fa es el mateix que abans és ha dir Crida els serveis i esl ordena pel seu status de forma descendent és ha dir posant primer els que estan Running i després els Stopped 

----

2. El mateix problema sense pipeline

Executa:
```powershell
$serveis = Get-Service
```

Ara:
```powershell
$serveis
```

I després:
```powershell
$serveis | Sort-Object Name
```
Compara-ho amb:
```powershell
Get-Service | Sort-Object Name
```

Respon:

    Obtenen el mateix resultat?
    Si
    Quina diferència hi ha entre les dues formes de treballar?
     Una és fa amb una variable i l'altra és fa sense una variable.
    En quin cas s'ha guardat prèviament la informació en una variable?
    En el primer cas

Crea ara:
```powershell
$serveisOrdenats = Get-Service | Sort-Object Name
```
Mostra:
```powershell
$serveisOrdenats
```

Explica què conté aquesta variable.

Aquesta variable conte tots els serveis ordenats pel nom.

---

3. Construir un pipeline pas a pas

Executa primer:
```powershell
Get-Process
```

Ara:
```powershell
Get-Process | Sort-Object CPU
```

Finalment:
```powershell
Get-Process | Sort-Object CPU | Select-Object -First 5
```

No continuïs fins haver observat el resultat de cada ordre.

Completa:


| Pas |	Ordre                 |	Què entra? | 	Què surt? |
|-----|-----------------------|------------|--------------|
| 1   | Get-Process           |------------|--------------|
| 2   | Sort-Object CPU       |------------|--------------|
| 3   | Select-Object -First 5|------------|--------------|	

Explica què passaria si eliminéssim:

Sort-Object CPU

del pipeline.

Comprova-ho executant:
```powershell
Get-Process | Select-Object -First 5
```

Els cinc processos obtinguts són necessàriament els que consumeixen més CPU?

Explica per què.

----

4. Ordenar processos

Emmagatzema en una variable tots els processos que s'estan executant ordenats de major a menor consum de CPU.

Mostra després el contingut de la variable.

A partir de la variable anterior:

 1.   mostra els tres primers processos;
 2.   mostra els cinc primers;
 3.   mostra els deu primers.

No tornis a executar `Get-Process` per fer aquests tres apartats.

----

5. Canviar l'ordre del pipeline

Executa:
```powershell
Get-Process |
    Sort-Object CPU -Descending |
    Select-Object -First 5
```

Ara executa:
```powershell
Get-Process |
    Select-Object -First 5 |
    Sort-Object CPU -Descending
```

Respon:

 1.   Les dues ordres fan el mateix?
 2.   Per què?
 3.   Quants processos arriben a Sort-Object en el primer cas?
 4.   Quants processos arriben a Sort-Object en el segon?

Aquest exercici és important: **l'ordre dels cmdlets dins del pipeline modifica el resultat.**

---

