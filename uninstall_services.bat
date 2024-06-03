net stop wampapache64
sc delete wampapache64
net stop wampmysqld64
sc delete wampmysqld64
net stop wampmariadb64
sc delete wampmariadb64
wampmanager.exe -quit -id={wampserver64}
