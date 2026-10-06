# Fitxa 2 — Organització del servei de directori de MusicCloud

## Objectiu

En aquesta sessió hem decidit com organitzar els diferents objectes de MusicCloud dins d'un servei de directori.

Aquesta fitxa forma part de la **documentació de disseny del sistema**. Les decisions que hi indiquis s'utilitzaran posteriorment durant la implantació.
# 1. Objectes que hem de gestionar

MusicCloud necessita gestionar de manera centralitzada diferents tipus d'objectes.

Indica quins tipus d'objectes consideres que ha de contenir el servei de directori.

|Tipus d'objecte|Exemples a MusicCloud|
|---|---|
|Usuaris|Treballadors|
|Grups|Departaments|
|Equips|Ordinadors,Portatils,Impresores,Movils|
|Servidors|Servidors de l'empresa|
|Comptes d'aplicacions o serveis|Els comptes utilitzats per aplicacions i serveis|

Hi afegiries algun altre tipus d'objecte?

---

Si, afegiria ubicacions, per poder identificar on es troben físicament els equips i altres recursos de l'empresa. ---

# 2. Organització mitjançant unitats organitzatives

Proposa les **unitats organitzatives (OU)** principals que utilitzaries a MusicCloud.

|OU|Què contindrà?|Per què la crees?|
|---|---|---|
|Usuaris|Tots els usuaris del domini|Per organitzar els comptes dels usuaris de MusicCloud. |
|Administració|Els usuaris que son del departament d'adminstració |Per organitzar els usuaris d'Administració i poder aplicar-los polítiques específiques.|
|Direcció|Els usuaris que son del departament de direcció|Per organitzar els usuaris de Direcció i poder aplicar-los polítiques específiques.|
|Suport tecnic|Els usuaris del departament de suport tecnic|Per organitzar els usuaris de Suport tècnic i poder aplicar-los polítiques específiques.|
|Producció musical|Els usuaris del departament de producció musical|Per organitzar els usuaris de Producció musical i poder aplicar-los polítiques específiques.|
|Informatica|Els usuaris del departament d'informatica|Per organitzar els usuaris d'Informàtica i poder aplicar-los polítiques específiques.|
|Externs|Els usuaris externs|Per separar els usuaris externs dels treballadors interns i aplicar-los polítiques específiques.|

## 2.1. Organització dels usuaris

Dibuixa l'estructura que utilitzaries per organitzar els usuaris de MusicCloud.

```text
MusicCloud
│
└──Usuaris
  |  |__Direcció
  |  |__Administració
  |  |    |__grp_Resp_Adm
  |  |__Suport_Tecnic
  |  |    |__grp_Resp_ST
  |  |__Producio_Musical
  |  |   |__grp_Resp_PM
  |  |__Informatica
  |  |   |__grp_Resp_Inf
  |  |__Externs
  |__Equips
  |  |__Impresores
  |  |__Sobretaula
  |  |__Portatils
  |  |__Mobils
  |  |__Servidors
  |__Xarxa
  | |__Routers
  | |__Switchos
  | |__Firewalls
  | |__Incidencies
  |__Software
  | |__Llicencies   
```

---

# 3. OU o grup?

Indica quina opció utilitzaries principalment en cada cas.

|Necessitat|OU|Grup|
|---|:-:|:-:|
|Organitzar els treballadors d'Administració|Si|☐|
|Donar accés a la carpeta d'Administració|☐|Si|
|Organitzar els ordinadors clients|Si|☐|
|Identificar les persones que participen en Campanya Estiu|☐|Si|
|Organitzar els servidors|Si|☐|
|Donar privilegis als administradors del sistema|☐|Si|
|Organitzar els comptes utilitzats per aplicacions|Si|☐|

### Explica amb les teves paraules la diferència principal entre una OU i un grup.

**OU:**

---

Serveix per organitzar els objectes del directori, com ara usuaris, ordinadors o servidors, i poder aplicar-los polítiques.---

**Grup:**

---

Serveix per agrupar usuaris que tenen unes mateixes necessitats, sobretot per donar permisos i accessos als recursos.---

---

# 4. Un mateix usuari: ubicació i pertinença

Considera aquest cas:

**Dídac Gassó**

- treballa a Administració;
    
- participa en el projecte Campanya Estiu.
    

Indica:

**En quina OU ubicaries el seu compte?**

Ubicaria el compte de Dídac Gassó a l'OU Administració, perquè és el seu departament habitual.---

**A quins grups podria pertànyer?**

---

---

### Per què no és contradictori que estigui en una OU però pertanyi a diversos grups?

---

---

---

# 5. Servei de directori

Explica breument què entens per **servei de directori**.

---

---

Quin problema resol a MusicCloud?

---

---

---

# 6. LDAP

Completa les frases següents.

**LDAP és:**

---

**LDAP no és:**

---

Indica si les afirmacions són certes o falses.

|Afirmació|C|F|
|---|:-:|:-:|
|LDAP és sinònim d'Active Directory|☐|☐|
|LDAP permet accedir i consultar informació d'un directori|☐|☐|
|OpenLDAP és una implementació d'un servei de directori|☐|☐|
|Active Directory utilitza LDAP, entre altres tecnologies|☐|☐|

---

# 7. DIT de MusicCloud

Dibuixa la proposta final de **Directory Information Tree (DIT)** de MusicCloud.

Ha de mostrar, com a mínim:

- usuaris;
    
- grups;
    
- equips;
    
- servidors;
    
- comptes d'aplicacions o serveis;
    
- les subdivisions que consideris necessàries.
    

```text
MusicCloud
│
│
│
│
│
```

---

# 8. Justificació del disseny

Escull **dues decisions** del teu DIT que consideris importants i justifica-les.

### Decisió 1

---

**Justificació:**

---

---

### Decisió 2

---

**Justificació:**

---

---

---

# 9. Comprovació final

Respon breument.

### a) Per què no seria una bona idea guardar tots els usuaris, grups, equips i servidors al mateix nivell sense organitzar-los?

---

---

### b) Per què no hauríem d'utilitzar les OU per substituir els grups de permisos?

---

---

### c) Si MusicCloud passa de 14 a 500 treballadors, quina característica del disseny que has fet avui facilitarà més l'administració?

---

---

---

# Documentació final del sistema

A partir de les decisions preses durant la sessió, deixa definida la proposta que utilitzarem inicialment per a MusicCloud.

## Estructura d'unitats organitzatives

```text
MusicCloud
│
│
│
│
```

## Criteri utilitzat per organitzar els objectes

---

---

## Criteri utilitzat per diferenciar OU i grups
