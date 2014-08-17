@echo off

cls

title Compilador de coffeeScript
:: Creamos una unidad temporal
:: pushd "%~dp0"
:: set node = c:\apps\node


cls
:: Iniciamos el trabajo
C:\apps\node\coffee -o ./js -mcw ./coffee