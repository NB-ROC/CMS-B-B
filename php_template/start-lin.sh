#!/bin/bash
git fetch
npm install
npm audit fix
docker compose up -d
cd ./install_tool/
./sql-lin.sh