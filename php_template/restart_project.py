import subprocess
import sys

print("stopping project")
subprocess.run(
    [sys.executable, "stop_project.py"]
)
print("done")

print("starting project")
subprocess.run(
    [sys.executable, "start_project.py"]
)
print("done")
