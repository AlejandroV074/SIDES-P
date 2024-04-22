#!/bin/bash

# Definir la ruta del repositorio y los logs
# Por defecto la ruta para los archivos en un servidor apache en linux es:
#       /var/www/html
REPO_PATH="/ruta/local/al/repo"
LOGS_PATH="$REPO_PATH/logs"

# Validamos que exista la carpeta logs
if ! cd "$LOGS_PATH" >/dev/null 2>&1; then
    mkdir "$LOGS_PATH" || exit
fi

# Origen remoto configurado, por defecto se usara origin
REMOTE_ORIGIN="origin"

# Si el origen remoto no existe se agrega
if ! git remote get-url "$REMOTE_ORIGIN" >/dev/null 2>&1; then
    git remote add "$REMOTE_ORIGIN" "https://github.com/AlejandroV074/SIDES-P.git"
fi

# Cambiar al directorio del repositorio
cd "$REPO_PATH" || exit

# Registramos la fecha de la actualizacion
date >> "$LOGS_PATH/update_repo.log"

# Cambiamos a la rama main, en caso de que no exista se crea
if git rev-parse --verify main >/dev/null 2>&1; then
    git checkout main >/dev/null
else
    git checkout -b main >/dev/null
fi

# Actualizar el repositorio
git pull "$REMOTE_ORIGIN" main >> "$LOGS_PATH/update_repo.log" 2>&1
echo >> "$LOGS_PATH/update_repo.log"
