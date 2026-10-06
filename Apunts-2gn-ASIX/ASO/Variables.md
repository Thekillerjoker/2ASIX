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
PS C:\WINDOWS\system32>Get-Process                                                                                                                                                                 Handles  NPM(K)    PM(K)      WS(K)     CPU(s)     Id   SI ProcessName
-------  -----     -----      ----      -----      ---  -- -----------
 72       6        3604       4392      0,03      3608   1  cmd                                                               
 144      10       6516      12860      0,06      2072   0 conhost                                                           
 152      11       6800      14372      0,09      2540   2 conhost                                                           
 152      11       6788      18508      1,58      3616   1 conhost                                                           
 357      17       1868       5996      0,48       416   0 csrss                                                             
 223      11       1804       5900      1,92       492   1 csrss

                                                                                             
PS C:\Users\Administrador> Get-Process | SORT CPU
Handles  NPM(K)    PM(K)      WS(K)     CPU(s)     Id   SI  ProcessName
-------  ------    ----       ----      -----      --   --  ----------
0          0       60          8                    0   0   Idle                                                              
157        9     1580       7228        0,00      1436  0   svchost                                                           
143       9     1468       6636         0,00      1144  0   svchost                                                           
129       8     1296       5920         0,02      1424  0   svchost

PS C:\Users\Administrador> $processos = Get-Process                                                                     
PS C:\Users\Administrador> Get-Process | Sort-object CPU

Handles  NPM(K)    PM(K)      WS(K)     CPU(s)     Id  SI ProcessName                                                  
------   -----     ----       ----      -----      --  -- -----------
 0       0       60          8                      0   0 Idle                                                              
 154       9     1524       7216       0,00       1436  0 svchost                                                           
 143       9     1412       6620       0,00       1144  0 svchost                                                            
 58       5      744       3520       0,02        1552  0 wlms
 
PS C:\Users\Administrador> $processos | Sort-object CPU
Handles  NPM(K)    PM(K)      WS(K)     CPU(s)     Id  SI ProcessName                                                   -------  ------    -----      -----     ------     --  -- -----------                                                       117       8     1448       6292               364   0 svchost                                                             0       0       60          8                 0   0 Idle                                                              264      13     4460      11800              3600   0 WmiPrvSE                                                          154       9     1524       7216       0,00   1436   0 svchost                                                           143       9     1468       6636       0,00   1144   0 svchost                                                           127       8     1384       5936       0,02   1424   0 svchost                                                           106       7     1124       5488       0,02   1952   0 svchost                                                            58       5      744       3520       0,02   1552   0 wlms                                                              151       8     2112       7308       0,03   2956   0 MpCmdRun                                                           72       5     2576       4384       0,03   3608   1 cmd                                                               112       7     1200       5736       0,03   1800   0 svchost                                                           108       7     1196       5372       0,03    748   0 svchost                                                            33       6     1200       3636       0,03    844   2 fontdrvhost                                                       156       9     1644       8196       0,05   1640   0 svchost                                                           141       9     1648       6692       0,05   1984   0 svchost                                                           195      13     1916       8028       0,06   1692   0 svchost                                                           165      10     1940       7936       0,06   1044   0 svchost                                                           166      12     1712       7180       0,06   1772   0 svchost                                                           215      11     2304       9352       0,06   3412   2 winlogon                                                          164       9     1856       9164       0,08   3484   1 servercoreshell                                                   160      11     1464       7016       0,08    512   0 wininit                                                           177       9     1576       7008       0,08   1648   0 svchost                                                           165      11     1724       8068       0,08   1160   0 svchost                                                           144      10     6516      12860       0,09   2072   0 conhost                                                           271      14     2620       8188       0,11   1764   0 svchost                                                           357      16     2560      10168       0,11   2372   0 svchost                                                            33       6     1112       3260       0,11    808   0 fontdrvhost                                                       324      12     2396      10828       0,11   3956   1 rdpclip                                                           214      12     1696       7452       0,11   2024   0 svchost                                                           152       9     1572       7712       0,13   3240   0 svchost                                                           213      39     3284      10404       0,14   3032   0 NisSrv                                                            251      11     2632       9948       0,14   3060   0 MpCmdRun                                                          215      13     2300      10900       0,14   3356   1 taskhostw                                                         178      10     1740       7724       0,16   1516   0 svchost                                                           359      14     3680      11196       0,17   1924   0 svchost                                                           218      12     2600      10684       0,17   1392   0 svchost                                                           201      10     2168       8508       0,17   1356   0 svchost                                                           118      16     3020       7184       0,17   1256   0 svchost                                                           196      10     1980       9632       0,19    276   0 svchost                                                           166       9     1628       7220       0,19   1884   0 svchost                                                           179       9     1716       7564       0,19    796   0 svchost                                                           192      13     1852       6100       0,20   3536   2 csrss                                                             362      13     2500       9904       0,22   2500   0 svchost                                                           289      16     3064      14708       0,22    820   2 LogonUI                                                           155      11     6772      14364       0,23   2540   2 conhost                                                           223      10     2044       7600       0,27   1312   0 svchost                                                            33       6     1224       3628       0,27    800   1 fontdrvhost                                                       129       8     3104       9820       0,30   1964   0 svchost                                                           257      12     2336      11532       0,30    564   1 winlogon                                                          292      11     2572       8928       0,34    776   0 svchost                                                           339      13     2648       9624       0,39    936   0 svchost                                                           255      14     3320       8860       0,39   1320   0 svchost                                                           339      17     3908      13480       0,50   1212   0 svchost                                                       

PS C:\Users\Administrador> Get-Process | Sort-object CPU | select-object -LAst 5

Handles  NPM(K)    PM(K)      WS(K)     CPU(s)     Id  SI ProcessName
-------  -----     ----       ----      -----      --  -- -----------

985      75        20868      37732     10,70    2876  0   svchost                                                          
1395      0          40        128      11,41      4   0   System                                                           
1069      36      114772     135284     15,42   3672   1   powershell                                                        
151      11         6788      18324     17,39   3616   1   conhost                                                           
773      29       97968       98412     20,97   988    0   svchost

PS C:\Users\Administrador> Get-Process | measure-object
Count    : 76                                                                                                           
Average  :                                                                                                              
Sum      :                                                                                                              
Maximum  :                                                                                                              
Minimum  :                                                                                                              
Property :


PS C:\Users\Administrador> $CPU = Get-Process | Select-object | measure-object                                          
PS C:\Users\Administrador>$CPU
Count    : 76                                                                                                           
Average  :                                                                                                              
Sum      :                                                                                                              
Maximum  :                                                                                                              
Minimum  :                                                                                                              
Property :

PS C:\Users\Administrador> $numeros = 3, 7, 12, 15                                                                      

PS C:\Users\Administrador> $numeros | Measure-Object

Count    : 4                                                                                                            
Average  :                                                                                                              
Sum      :                                                                                                              
Maximum  :                                                                                                              
Minimum  :                                                                                                              
Property :


PS C:\Users\Administrador> $numeros=@(1, 5, 7, 2)

PS C:\Users\Administrador> $numeros | Measure-Object -average
Count    : 4                                                                                                            
Average  : 3,75                                                                                                         
Sum      :                                                                                                              
Maximum  :                                                                                                              
Minimum  :                                                                                                              
Property :


 PS C:\Users\Administrador> $P2 = sort-object CPU                                                                        

 PS C:\Users\Administrador> Get-Process | Measure-Object
Count    : 72                                                                                                           
Average  :                                                                                                              
Sum      :                                                                                                              
Maximum  :                                                                                                              
Minimum  :                                                                                                              
Property :


 PS C:\Users\Administrador> $P1 = Get-Process | Measure-Object

PS C:\Users\Administrador> $P1 | Sort-Object CPU | Select-Object -LAst 5
Count    : 71                                                                                                           
Average  :                                                                                                              
Sum      :                                                                                                              
Maximum  :                                                                                                              
Minimum  :                                                                                                              
Property :

PS C:\Users\Administrador>                                                                                                                                      

                            `
```
