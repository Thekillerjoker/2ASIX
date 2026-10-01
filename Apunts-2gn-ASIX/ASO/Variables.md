```powershell
$server="web-server"#Posar nom
$server #llenxarla
$port=800
$enabled=$true #habilitarla
$enabled=$false #deshabilitarla
$total= 10 +5

$server="WebServer"#Rnombrarla
write-Host "$services - 1"#O escriu tots seguits
Get-services #Tots els sevies del ordinador
$services="" #Es que no te valor
$services= $null # Es que no hi ha
# Quan sigui un objecte li poso $null
# Quan sigui un string li puc posar ""
**Arrays**

$Servidors = "ADSRV", "websrv", "MAILSRV"
$servidors
"ADSRV"
"websrv"
"MAILSRV"
$servidors[0]
ADSRV
$servidors[1]
WEBSRV
$servidors[2]
MAILSRV
$servidors[3]
No dona res igual que ha pithe

$servidors[-1]
MAILSRV
$servidors[$servidors.Count-1]
MAILSRV
$servidors.Count-1
-1
$servidors.Count
3
$servidors.Length
3
Copyright (C) Microsoft Corporation. All rights reserved.                                                                                                                                                                                       PS C:\WINDOWS\system32> $ports=@(443, 22)                                                                               PS C:\WINDOWS\system32> $ports=443, 22                                                                                  PS C:\WINDOWS\system32> $ports=@(443)                                                                                   PS C:\WINDOWS\system32> $ports=443                                                                                      PS C:\WINDOWS\system32> $ports=@(443)                                                                                   PS C:\WINDOWS\system32> $port=443                                                                                       PS C:\WINDOWS\system32> $port[1]=22                                                                                     No se puede indizar en un objeto del tipo System.Int32.                                                                 En línea: 1 Carácter: 1                                                                                                 + $port[1]=22                                                                                                           + ~~~~~~~~~~~                                                                                                               + CategoryInfo          : InvalidOperation: (:) [], RuntimeException                                                    + FullyQualifiedErrorId : CannotIndex                                                                                                                                                                                                       PS C:\WINDOWS\system32> $ports=@(443)                                                                                   PS C:\WINDOWS\system32> $port[1]=22                                                                                     No se puede indizar en un objeto del tipo System.Int32.                                                                 En línea: 1 Carácter: 1                                                                                                 + $port[1]=22                                                                                                           + ~~~~~~~~~~~                                                                                                               + CategoryInfo          : InvalidOperation: (:) [], RuntimeException                                                    + FullyQualifiedErrorId : CannotIndex                                                                                                                                                                                                       PS C:\WINDOWS\system32>      
PS C:\WINDOWS\system32> $port=443                                                                                       
PS C:\WINDOWS\system32> $port+=22                                                                                       
PS C:\WINDOWS\system32>$port                                                                                           465                                                                                             
PS C:\WINDOWS\system32>  
PS C:\WINDOWS\system32> $ports=@(443)                                                                                   
PS C:\WINDOWS\system32> $ports+=22                                                                                      
PS C:\WINDOWS\system32> $ports                                                                                          443                                                                                                                     22                                                                                                                      
PS C:\WINDOWS\system32> $ports[1]= 8080                                                                                 
PS C:\WINDOWS\system32> $ports                                                                                          443                                                                                                                     8080                                                                                                                    
PS C:\WINDOWS\system32> $equips=@("webserver, 443")                                                                     
PS C:\WINDOWS\system32> $equips                                                                                        
 webserver, 443                                                                                                          
PS C:\WINDOWS\system32>  
PS C:\WINDOWS\system32> foreach ($port in $ports) {                                                                    
    >> write-host $port                                                                                                     >> }                                                                                                                    443                                                                                                                     8080                                                                                                                    
PS C:\WINDOWS\system32> foreach ($port in $ports){                                                                      
    >> write-host "$port Activat"                                                                                           >> }                                                                                                                    
    443 Activat                                                                                                             
    8080 Activat                                                                                                            
PS C:\WINDOWS\system32>
PS C:\WINDOWS\system32> $ports=@{ssh="443"}                                                                             
PS C:\WINDOWS\system32> $ports['ssh']                                                                                   443                                                                                                                     
PS C:\WINDOWS\system32>
PS C:\WINDOWS\system32> $ports['http']=80                                                                               
PS C:\WINDOWS\system32> $openPorts['ssh']=22                                                                            
No se puede indizar en una matriz nula.                                                                                 
En línea: 1 Carácter: 1                                                                                                
 + $openPorts['ssh']=22                                                                                                  
 + ~~~~~~~~~~~~~~~~~~~~                                                                                                      
 + CategoryInfo          : InvalidOperation: (:) [], RuntimeException                                                    
 + FullyQualifiedErrorId : NullArray                                                                                                                                                                                                         
PS C:\WINDOWS\system32> $ports=@{ssh="443";nom="serverweb"}                                                             
PS C:\WINDOWS\system32> $servidors[2]                                                                                   
No se puede indizar en una matriz nula.                                                                                 
En línea: 1 Carácter: 1                                                                                                 
+ $servidors[2]                                                                                                         
+ ~~~~~~~~~~~~~                                                                                                             
+ CategoryInfo          : InvalidOperation: (:) [], RuntimeException                                                    
+ FullyQualifiedErrorId : NullArray                                                                                                                                                                                                         
PS C:\WINDOWS\system32> $ports['ssh']                                                                                   443                                                                                                                     
PS C:\WINDOWS\system32>                                                                                                                                      `
```
