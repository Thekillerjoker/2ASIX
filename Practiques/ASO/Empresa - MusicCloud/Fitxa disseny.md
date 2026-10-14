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

Podria pertànyer als grups:

- Administració
- Campanya_Estiu
----

### Per què no és contradictori que estigui en una OU però pertanyi a diversos grups?

---

No és contradictori perquè una OU serveix per organitzar el compte dins del directori, mentre que els grups serveixen per assignar permisos i accessos.

Per tant, Dídac pot estar ubicat a l'OU Administració i al mateix temps pertànyer a diversos grups segons les seves funcions i projectes.---

---

# 5. Servei de directori

Explica breument què entens per **servei de directori**.

---

Un servei de directori és un sistema que permet organitzar i gestionar usuaris, grups, ordinadors i altres recursos d'una empresa, així com els seus permisos i accessos.

---

Quin problema resol a MusicCloud?

---

A MusicCloud permet gestionar de manera centralitzadaels usuaris i els seus permisos. Això facilita controlar qui pot accedir a cada recurs i evita haver de configurar els permisos individualment per a cada usuari.

---

---

# 6. LDAP

Completa les frases següents.

**LDAP és:**

Un protocol que permet accedir, consultar i gestionar informació d'un servei de directori.

---

**LDAP no és:**

Un servei de directori en si mateix, ni és sinònim d'Active Directory.

---

Indica si les afirmacions són certes o falses.

|Afirmació|C|F|
|---|:-:|:-:|
|LDAP és sinònim d'Active Directory||F|
|LDAP permet accedir i consultar informació d'un directori|C| |
|OpenLDAP és una implementació d'un servei de directori|C||
|Active Directory utilitza LDAP, entre altres tecnologies|C||

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
│──Usuaris
|  |── Direcció
|  |── Administració
|  |── Support_Tècnic
|  |── Producció_Musical
|  |── Informàtica
|  |___Externs
│
│── Grups
|   |── Departaments
|   |   |── Direcció
|   |   |── Adminsitració
|   |   |── Suport_Tècnic
|   |   |── Producció_Musical
|   |   |__Informàtica
|   |── Caps_Departament
|   |── Projectes
|       |── Campanya_Estiu
|       |__Nou_Catàleg
|── Equips
|   |── Ordinadors
|   |── Portàtils
|   |── Impresores
|   |__Mòbils      
|── Servidors
|   |── SAS etc
|── Llicencies
|__Ubicacions
   |── Oficines
   |── Sales
   |__Magatzem   
```

---

# 8. Justificació del disseny

Escull **dues decisions** del teu DIT que consideris importants i justifica-les.

### Decisió 1

*Separar els usuaris en OU segons el seu departament*
---

**Justificació:**

Això permet organitzar millor els comptes dels treballadors i aplicar polítiques diferents a cada departament. Si un treballador canvia de departament, es pot moure a l'OU corresponent
---

---

### Decisió 2

*Separar els grups dels usuaris i crear grups específics per als projectes*
---

**Justificació:**

Això permet donar permisos als treballadors segons les seves funcions i projectes sense haver de canviar-los de departament. Per exemple, Dídac pot continuar a Administració i pertànyer també al grup Campanya_Estiu per accedir als recursos del projecte
---

---

---

# 9. Comprovació final

Respon breument.

### a) Per què no seria una bona idea guardar tots els usuaris, grups, equips i servidors al mateix nivell sense organitzar-los?

*Perquè seria més difícil trobar i gestionar els objectes, aplicar polítiques i mantenir l'ordre del directori*
---

---

### b) Per què no hauríem d'utilitzar les OU per substituir els grups de permisos?

*Perquè les OU serveixen per organitzar els objectes i aplicar polítiques, mentre que els grups serveixen per assignar permisos i controlar l'accés als recursos*
---

---

### c) Si MusicCloud passa de 14 a 500 treballadors, quina característica del disseny que has fet avui facilitarà més l'administració?

*L'organització dels usuaris en OU segons els departaments i l'ús de grups per gestionar els permisos. Això permetrà administrar molts usuaris de manera més ràpida, ordenada i segura*
---

---

---

# Documentació final del sistema

A partir de les decisions preses durant la sessió, deixa definida la proposta que utilitzarem inicialment per a MusicCloud.

## Estructura d'unitats organitzatives

```text
MusicCloud
│
├── Usuaris
│   ├── Direcció
│   ├── Administració
│   ├── Suport_Tècnic
│   ├── Producció_Musical
│   ├── Informàtica
│   └── Externs
│
├── Equips
│   ├── Ordinadors
│   ├── Portàtils
│   └── Impressores
│
├── Servidors
│
└── Comptes_Aplicacions_Serveis
```

## Criteri utilitzat per organitzar els objectes

*He organitzat els objectes en unitats organitzatives segons el seu tipus i funció dins de MusicCloud. Els usuaris s'han separat per departaments, mentre que els equips, els servidors i els comptes d'aplicacions s'han organitzat en apartats diferents per facilitar-ne la gestió*
---

---

## Criteri utilitzat per diferenciar OU i grups

*Les OU serveixen per organitzar els objectes del directori i aplicar polítiques. En canvi, els grups serveixen per agrupar usuaris segons les seves funcions o projectes i assignar-los els permisos necessaris per accedir als recursos.*