

    Nota: Els exercicis/pràctiques t'han de servir per a familiarizar-te amb el llenguatge Powershell. Aprofita per a realitzar diverses proves i veure què passa. Documenta també aquestes proves i resultats.

Treballar amb variables
1. Crear variables

Crea les variables següents:

$nom
$servidor
$ip
$port

![Variable-1](./Captures-Powershell/Vriables-1.png)

Assigna-hi valors.



$nom = "Pere"


Mostra després el contingut de cadascuna de les variables.

![Variable-2](./Captures-Powershell/Variables-AssignarValor.png)

1. Modificar una variable

Crea:

$servidor = "SRV01"

Mostra el seu valor.

Després canvia'l per:

SRV02

Comprova quin valor conserva la variable.

![Variable-3](./Captures-Powershell/Variables-ModificarValor.png)

3. Operacions

Crea dues variables:

$num1 = 20
$num2 = 5

![Operacions-Variable1](./Captures-Powershell/Crear-Varaible-Operacions-1.png)


Crea una tercera variable que guardi:

    la suma;
    la resta;
    la multiplicació;
    la divisió.

Per exemple:

$resultat = $num1 + $num2

![Variables-Resultats](./Captures-Powershell/Variable-Resultats.png)


Mostra cada resultat.

## Resultat Suma:

![Resultat-Suma](./Captures-Powershell/Variable-Suma.png)

## Resultat Resta:

![Resultat-Resta](./Captures-Powershell/Variable-resta.png)

## Resultat Multiplicació:

![Resultat-Multiplicacio](./Captures-Powershell/Variable-Multiplicacio.png)


## Resultat Divisió:

![Resultat-Divisio](./Captures-Powershell/Variable-Divisio.png)


4. Variables dins d'un text

Crea:

$nom = "Anna"
$servidor = "SRV01"

Intenta obtenir aquesta sortida:

L'usuari Anna està treballant amb el servidor SRV01

utilitzant les variables dins del text.

![Ex4](./Captures-Powershell/Ex4-Variables.png)


5. Cometes

Executa:

$servidor = "SRV01"
Després:

Write-Host "Servidor: $servidor"

i:

Write-Host 'Servidor: $servidor'

![Ex-5](./Captures-Powershell/Ex-5-Variables.png)

Respon:

Quina diferència observes? Per què creus que passa?

La diferencia és que  Les cometes dobles " " permeten que PowerShell substitueixi les variables pel seu valor. 

Les cometes simples ' ' tracten el contingut com a text literal i, per tant, $servidor no es substitueix.

6. Guardar el resultat d'una ordre

Executa:

$serveis = Get-Service

Després:

$serveis

![Serveis](./Captures-Powershell/Ex-6-Serveis.png)

Respon:

    Què creus que conté $serveis?
*Conté el resultat de l'ordre `Get-Service`, és a dir la informació dels serveis del sistema.*

    La variable conté un únic valor o diversos elements?
*Conté diversos **elements**, un per cada servei que retorna `Get-Service`.*

*Fes el mateix amb:*
```powershell
$processos = Get-Process

```

![Processos](./Captures-Powershell/Ex-6-Processos.png)


`Què creus que conté $processos?`

*Conté la informació dels processos que estan executant-se en l'equip.*
`Conté un únic valor o diversos elements?`

*Conté diversos elements, un per cada procés.*

7. Aplicació a administració

Crea una variable:

$nomServei = "Spooler"

Utilitza aquesta variable per consultar el servei amb:

Get-Service -Name ...

L'objectiu és obtenir el mateix resultat que:

Get-Service -Name Spooler

però sense escriure Spooler directament en el cmdlet.