```powershell
notepad .\Helloword.ps1
# A vegadas es pondran comentaris pero no posar coses tontes.
Write-Host "Hello, World!"
# Incrementem la cpu un 10%
<# per posar comentaris de varis linies
#>

$CPU=$CPU*1.1

PS C:\Users\Administrador\Documents\Scripts> .\Helloworld.ps1                                                           
Hello, World!
PS C:\Users\Administrador\Documents\Scripts> 

PS C:\Users\Administrador\Documents\Scripts> notepad prova1.ps1  
Get-service | where-object { ($_.status -eq "Running" -and $_.startType -eq "Manual")}

#2
$total = (Get-service | where-object { ($_.status -eq "Running" -and $_.startType -eq "Manual")}).count

#3
$services=Get-Service
$runing=$services | where-object { ($_.status -eq "Running")} | select-object name
 
$runing
$total


PS C:\Users\Administrador\Documents\Scripts> .\prova1.ps1  
                                                                                                                                                                    Status          Name               DisplayName
-------         -----              -----------

Running  CertPropSvc        Propagación de certificados
Running  DoSvc              Optimización de distribución
Running  lmhosts            Aplicación auxiliar de NetBIOS sobr...                                                      
Running  netprofm           Servicio de lista de redes                                                                  
Running  PlugPlay           Plug and Play                                                                               
Running  PolicyAgent        Agente de directiva IPsec                                                                  
Running  ScDeviceEnum       Servicio de enumeración de disposit...                                                      
Running  SessionEnv         Configuración de Escritorio remoto                                                          
Running  TermService        Servicios de Escritorio remoto                                                              
Running  TimeBrokerSvc      Agente de eventos de tiempo                                                                 
Running  UmRdpService       Redirector de puerto en modo usuari...                                                      
Running  WdNisSvc           Servicio de inspección de red de An...                                                      
Running  WinHttpAutoProx... Servicio de detección automática de...                                                      
Running  wuauserv           Windows Update
Name : BFE                                                                                                                                                 
Name : CertPropSvc
Name :CoreMessagingRegistrar

 14                                      
 PS C:\Users\Administrador\Documents\Scripts>     

```