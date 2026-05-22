call npm install
pause
cls
call npm audit fix
pause
cls
call docker compose up -d
pause
cls
cd .\src
call python -m venv venv
call Set-ExecutionPolicy -Scope Process -ExecutionPolicy RemoteSigned
call venv\Scripts\activate
call pip install -r requirements.txt
call python .\orchestrator.py migration