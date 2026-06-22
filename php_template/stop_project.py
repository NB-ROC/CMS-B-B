import subprocess

print("running docker compose down")
subprocess.run(["docker", "compose", "down"])
print("done!")