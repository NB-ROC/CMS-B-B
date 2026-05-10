call python3 -m venv venv
pause
call .\venv\Scripts\activate
call pip install -r requirements.txt
pause
call python3 .\initDB.py