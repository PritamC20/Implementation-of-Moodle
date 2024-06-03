@echo off
ping -n 1 -w 500 127.255.255.255 > nul
wampmanager.exe -quit -id={wampserver64}
ping -n 1 -w 4000 127.255.255.255 > nul
wampmanager.exe
exit
