# 1. Usamos la imagen oficial de Nginx (versión alpine que es muy ligera)
FROM nginx:alpine

# 2. Copiamos todos los archivos de tu carpeta actual al servidor Nginx dentro del contenedor
COPY . /usr/share/nginx/html

# (Opcional) Nginx ya expone el puerto 80 por defecto, así que no hace falta poner nada más.