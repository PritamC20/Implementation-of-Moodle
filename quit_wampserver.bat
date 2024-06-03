echo off
net stop wampapache64
net stop wampmysqld64
net stop wampmariadb64
wampmanager.exe -quit -id={wampserver64}
