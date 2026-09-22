# Fitxa 1 — Anàlisi inicial de MusicCloud

## Objectiu

MusicCloud necessita reorganitzar la seva infraestructura informàtica. Abans d'instal·lar o configurar cap servei, cal entendre:

- qui treballa a l'empresa;
    
- quines funcions té cada persona;
    
- quins recursos existeixen;
    
- qui necessita accedir a cada recurs;
    
- com podem gestionar aquests accessos de manera eficient.
    

---

# 1. Conèixer MusicCloud

Consulta la informació disponible sobre els departaments, treballadors i perfils d'usuari de MusicCloud.

Completa la taula següent.

| Persona | Departament | Funció / responsabilitat | Necessita privilegis especials? Per què? |
| ------- | ----------- | ------------------------ | ---------------------------------------- |
|Aina Ciurans|Direcció|Usuari estàndard| No, per que no te la necessitat de fer canvis en el sistema|
|Rut Tronil|Direcció|Usuari estàndard|No. per que no te la necessitat de fer canvis en el sistema|
|Dídac Gassó|Administració|Usuari estàndard|No, perque no te la necessitat de fer cap canvi en el sistema|
|Laia Macias|Administració|Responsable de departament| No, per que no te la necessitat de fer cap canvi en el sistema|
|Estel Birosta|Suport tècnic|Usuari estàndard|Si, auria de tenir alguns permisos especials per que ha de poder donar suport tècnic|
|Aina Zuriguel|Suport tècninc|Usuari estàndard| Si, auria de tenir alguns permisos especials per que ha de poder donar suport tècnic|
|Lluïsa Richart|Suport tècnic|Responsable de departamentd| Si, auria de tenir alguns permisos especials per que ha de poder donar suport tècnic|
|Roser Alberch|Producció musical|Usuari estàndard|No, per que no te la necessitat de fer cap canvi en el sistema|
|Guillem Adella|Producció musical|Usuari estàndard|No, per que no te la necessitat de fer cap canvi en el sistema|
|Meritxell Reglat|Producció musical|Responsable de departament|No, per que no te la necessitat de fer cap canvi en el sistema|
|Alícia Monclús|Produccció musical|Usuari estàndard|No, per que no te la necessitat de fer cap canvi en el sistema|
|Carles Molins|Producció musical|Usuari estàndard|No, per que no te la necessitat de fer cap canvi en el sistema|
|Eulàlia Galcera|Producció musical|Usuari estàndard|No, per que no te la necessitat de fer cap canvi en el sistema|
|Talia Costas|Informàtica|Administrador del sistema|Si, auria de tenir els permisos d'administrador|
|Alex Soriano|Informàtica|Administrador del sistema|Si, auria de tenir els permisos d'adminsitrado|

### 1.1. Reflexió

Quines diferències observes entre un **treballador**, un **departament** i una **funció o responsabilitat**?

El treballador és la persona que realitza les tasques dins de l'empresa, un departament és una àrea de l'empresa que agurpa treballadors que realitzen activitats relacionades, i una funció o responsabilitat són les tasques i obligacions que té assignades un treballador o un departament.

---

---

Hi ha persones que, pel seu càrrec o funció, necessiten accessos diferents dels altres membres del seu departament?

✔ Sí  
☐ No

Posa'n algun exemple:

Si els usuaris que son el cap de departament al tenir la responsabilitat de cordinar el departament necesita poder accedir als recursos del seu departament i també tenir acces de lectura a la carpeta de comunicats i acces a carpetes amb carpetes compartides amb direcció.

---

---

# 2. Recursos de l'empresa

Analitza l'estructura d'informació de MusicCloud.

Classifica alguns dels recursos següents segons la seva finalitat.

| Recurs                                                   | Qui creus que l'hauria d'utilitzar? | Per a què? |
| -------------------------------------------------------- | ----------------------------------- | ---------- |
| `/empresa/comu/intercanvi`                               |Tots els usuaris amb  permisos L/E | Ja que es una carpeta on tots els usuaris han de poder compartir i llegir documents en comu|
| `/empresa/comu/comunicats`                               |Direcció amb L/E i la resta amb L|Direcció amb L/E ja que com son els que donen els comunicats per tant necessiten poder escriure, i la resta d'usuaris nomes han de poder llegir els comunicats|
| `/empresa/departaments/administracio/compartida`         |Administració L/E i Direcció L| Administració L/E ja que és la carpeta on hi ha compartida les coses comunes del departament de administració, i Direcció auria de tenir permis de lectura ja que hi ha la posibilitat de que vulgui llegir pero no necessita escriure ni modificar|
| `/empresa/departaments/administracio/gestio_departament` |Cap de departament Administració L/E i Direcció L| Només ha de tenir accés el cap de departament ja que es la carpeta on és guarda les coses de la gestió del departament |
| `/empresa/projectes/campanya_estiu`                      |Només han de tenir acces els usuaris que treballen en aquesta campanyauq|Ja que encara no sabem quin es el projecte i a qui afecta|
| `/empresa/administracio_sistema/backups`                 |Informatica|Ja que els unics que faran o restuaran els backups son els informatics|

---

# 3. Qui ha de poder fer què?

Per a cada situació, indica quin nivell d'accés consideres adequat.

Utilitza:

- **NA** → sense accés
    
- **L** → lectura
    
- **L/E** → lectura i escriptura
    
- **ADM** → administració
    

No busquis encara una solució tècnica. Pensa només en les necessitats de l'empresa.

| Situació                                                             | Accés proposat | Justificació |
| -------------------------------------------------------------------- | -------------- | ------------ |
| Dídac accedeix a la carpeta compartida d'Administració               |L/E| Ja que és un usuari del departament d'administració i per tant ha de poder compartir documents comuns amb els usuaris d'administració i també poder llegir els documents dels altres|
| Laia accedeix a la gestió del departament d'Administració            |L/E| És el cap de departament d'administració per tant ha de poder llegir i escriure|
| Pere, treballador extern, accedeix als comunicats interns            |NA| Perque en la carpeta de comunicats hi ha informació sensible de l'empresa i si algu necessita donarli un comunicat li pot enviar un correu o parlar en persona|
| Talia accedeix als backups del sistema                               |ADM| És informatica per tant els unics que han de poder accedir als backups es informatica|
| Un membre de Producció musical accedeix a la carpeta d'Administració |NA| No ha de poder accedir a les carpetes d'altes departaments|
| Un participant de `campanya_estiu` accedeix als fitxers del projecte |L/E|  És un usuari de la campanya d'estiu per tant necessita poder escriure i llegir documents|

---

# 4. Primer problema: com assignem els permisos?

Imagina que MusicCloud té només quatre treballadors:

- Anna
    
- Biel
    
- Carla
    
- David
    

Tots quatre treballen al mateix departament i necessiten accedir a la mateixa carpeta.

Una possible solució seria configurar:

```text
Anna  → lectura/escriptura
Biel  → lectura/escriptura
Carla → lectura/escriptura
David → lectura/escriptura
```

### 4.1.

Què passaria si l'empresa tingués **100 treballadors** amb el mateix tipus d'accés?

Que no estaria organitzat i podrien borrar acidentalment coses d'un altre usuari---

---

### 4.2.

Què passaria cada vegada que s'incorporés una persona nova?

Que tendriem que donar els permisos carpeta per carpeta.---

---

### 4.3.

Què passaria quan una persona canviés de departament?

Res  ja que si tenen el matiexos permisos---

---

### 4.4.

Proposa una manera de gestionar aquestes persones conjuntament.

No cal que coneguis encara el nom tècnic de la solució.

---

---

Fer un grup per cada departament i gestionar els permisos a nivell de grup, i un altre grup per els caps de departament  i posar els permisos especials pel cap de departament en el grup de cap de departament.---

---

# 5. Canvis a MusicCloud

Ara es produeixen aquests tres canvis:

### Cas A

Dídac deixa Administració i passa a Producció musical.

Quins accessos hauria de perdre?

Auria de perdre accés a les carpetes departaments/administracio/compartida, departaments/administracio/documentacio_interna---

Quins accessos hauria d'obtenir?

Auria d'obtenir accés ha les carpetes departaments/produccio_musical/compartida , departaments/produccio_musical/artistes i departaments/producco_musical/cataleg---

---

### Cas B

S'incorpora una nova treballadora al departament d'Administració.

Quins accessos caldria configurar?

---

---

---

### Cas C

Pere Espinalt deixa de col·laborar amb MusicCloud.

Què hauríem de fer amb els seus accessos?

---

---

---

# 6. Busquem una solució millor

Suposa ara que podem crear conjunts de persones que comparteixen unes mateixes necessitats d'accés.

Per exemple:

```text
Administració
    ├── Dídac
    ├── Laia
    └── Roser
```

I podem donar permisos directament al conjunt:

```text
Administració → carpeta_administracio → L/E
```

### 6.1.

Quin avantatge té aquesta solució respecte a donar permisos persona per persona?

---

---

### 6.2.

Si Dídac passa d'Administració a Producció musical, què caldria modificar?

---

---

### 6.3.

Com anomenaries aquests conjunts de persones?

---

---

# 7. Primera proposta per a MusicCloud

A partir de l'organització de l'empresa, proposa els primers conjunts de persones que crearies.

**No cal trobar encara la solució definitiva.**

| Nom proposat | Qui hi pertanyeria? | Per què existeix aquest conjunt? |
| ------------ | ------------------- | -------------------------------- |
|              |                     |                                  |
|              |                     |                                  |
|              |                     |                                  |
|              |                     |                                  |
|              |                     |                                  |

---

# 8. Cas que complica el model

Laia treballa al departament d'Administració, però també és la responsable del departament.

És suficient que pertanyi només al conjunt `Administració`?

☐ Sí  
☐ No

Per què?

---

---

Quina possible solució proposes?

---

---

---

# 9. Un altre cas

Diverses persones de departaments diferents participen temporalment en el projecte:

```text
Campanya Estiu
```

Creus que hauríem de canviar-les de departament?

☐ Sí  
☐ No

Si no, com podríem donar-los accés als recursos del projecte?

---

---

---

# 10. Conclusions

Completa les frases amb les teves paraules.

### Usuari

Un usuari representa:

---

### Recurs

Un recurs és:

---

### Permís

Un permís determina:

---

### Grup

Un grup serveix per:

---

---

# 11. Regla de mínim privilegi

Analitza aquesta afirmació:

> Un usuari només hauria de tenir els permisos estrictament necessaris per realitzar la seva feina.

Explica amb les teves paraules què significa.

---

---

Posa un exemple relacionat amb MusicCloud.

---

---

---

# 12. Pregunta final

Imagina que demà MusicCloud passa de 14 treballadors a 500.

Quina de les dues estratègies consideres més adequada?

☐ Assignar permisos individualment a cada usuari.

☐ Organitzar els usuaris segons les seves necessitats i assignar permisos a aquests conjunts.

Justifica la resposta.

---

---

---

Jo **no faria obligatori que acabessin tota la fitxa abans d'explicar res**. La utilitzaria de manera sincronitzada amb la classe:

**0–40 min:** apartats 1–3 → analitzen MusicCloud i els accessos.  
**40–65 min:** apartats 4–5 → apareix el problema de gestionar permisos individualment.  
**65–85 min:** explicació curta de **usuari, grup, recurs, permís i mínim privilegi**.  
**85–110 min:** apartats 6–9 → apliquen immediatament el concepte de grup.  
**110–120 min:** apartats 10–12 → revisió i tancament.

Hi ha una decisió pedagògica important: a l'apartat 4 **no utilitzo la paraula “grup” fins que l'alumnat ha intentat resoldre el problema**. Això encaixa molt millor amb el cicle que vols seguir: primer tenen el problema, després apareix la necessitat i només aleshores introdueixes el concepte teòric.