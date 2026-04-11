from pathlib import Path
from dotenv import load_dotenv
from mysql.connector import connect
from rich.console import Console

import os

BASE_DIR = Path(__file__).parent.parent

load_dotenv(BASE_DIR / ".env")

console = Console(color_system="truecolor")

def get_name(input:str) -> str :
    array = input.split(" ")
    for a in array:
        if "mydb." in a:
            return a.split(".")[1].split("(")[0]

with console.status("Getting ready to build database...", spinner="dots12"):
    databaseconn = connect(
        host="localhost",
        user="root",
        password=os.getenv("DB_ROOT_PASSWORD")
    )

    databaseconn.autocommit = True

    cursor = databaseconn.cursor()
    console.print("[#ced404]Creating blank slate[/#ced404]\n")
    console.print("\t[#ced404] Dropping database[/#ced404]")
    cursor.execute("DROP DATABASE IF EXISTS mydb;")
    console.print("\t[#ced404] Recreating database[/#ced404]")
    cursor.execute("CREATE DATABASE IF NOT EXISTS mydb;")

    with open("./sql.sql", mode="r") as handle:
        stmt = handle.read()
    
    console.print("\n[#08d404]:heavy_check_mark: ready to build database\n[/#08d404]")

    stmtlist = stmt.strip().split(";")

with console.status("Building database", spinner="dots12"):
    for state in stmtlist:
        if state != None and state != '':
            cursor.execute(state)
            console.print(f"\t[#08d404]Created {get_name(state)}![/#08d404]", overflow="ellipsis")

ROLES = [
    "admin",
    "user",
    "host"
]

with console.status("Inserting defaults", spinner="dots12"):
    console.print("\n[#08d404]Finishing touches[/#08d404]")
    for roled in ROLES:
        cursor.execute(f"INSERT INTO mydb.Roles (role) VALUES ('{roled}');")
        console.print(f"\t[#08d404]Inserted {roled} ino Roles[/#08d404]", overflow="ellipsis")

console.print("\n[#08d404]:heavy_check_mark: Done ![/#08d404]")