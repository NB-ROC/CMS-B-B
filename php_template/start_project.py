from pathlib import Path
import subprocess
import sys
import shutil

BASE_DIR = Path(__file__).parent
NODE_FOLDER = BASE_DIR / "node_modules"
VENV_DIR = BASE_DIR / "src" / "venv"
VENV_PYTHON = VENV_DIR / "Scripts" / "python.exe"

print("checking for node")
if not NODE_FOLDER.exists():
    print("node not found, running npm install")
    subprocess.run(
        [f"{shutil.which("npm")}", "install"]
    )
else:
    print("node found!")

print("running npm audit fix")
subprocess.run([f"{shutil.which("npm")}", "audit", "fix"])
print("done!")

print("running docker compose up")
subprocess.run(["docker", "compose", "up", "-d"])
print("done!")

print("checking for venv")
if not VENV_DIR.exists():
    print("venv not found installing venv")
    subprocess.run([sys.executable, "-m", "venv", str(VENV_DIR)])
else:
    print("venv found")

print("installing requirements to venv")
subprocess.run([VENV_PYTHON, "-m", "pip", "install", "-r", "src/requirements.txt"])
print("done!")

print("running migrations")
subprocess.run([VENV_PYTHON, BASE_DIR / "src" / "orchestrator.py", "migration"])
print("done!")