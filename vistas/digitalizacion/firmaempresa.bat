@@echo off
echo Iniciando firmas...
echo Firmando %1... 
"C:\Program Files (x86)\Java\jdk1.8.0_73\bin\jarsigner" -keystore judicial.jks -storepass gordi123 scanner.jar 1