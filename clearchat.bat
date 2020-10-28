@echo off
for /F "tokens=2" %%i in ('date /t') do set mydate=%%i
set mytime=%time%
echo [{"author":"SYSTEM MESSAGE","text":"Welcome to The Chat. Please Do Not Spam Messages.","timestamp":"%mydate%","size":0}] >"chat.json"
exit