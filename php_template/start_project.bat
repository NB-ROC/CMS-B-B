@echo off
npm install
npm audit fix
docker compose up -d
cd .\install_tool\
sql-win.bat
pause