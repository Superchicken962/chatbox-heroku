@echo off
for /F "tokens=2" %%i in ('date /t') do set mydate=%%i
set mytime=%time%
set /p msg= 
echo [{"author":"SYSTEM MESSAGE","text":"%msg%","timestamp":"%mydate%","size":0}] >"chat.json"
exit