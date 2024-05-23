#!/bin/bash

# Limpiar caché de Laravel
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan event:clear

# Opcionalmente, volver a crear caché de configuración y rutas (producción)
# php artisan config:cache
# php artisan route:cache
# php artisan event:cache

# Limpiar caché del sistema en Ubuntu
sudo sync; echo 3 | sudo tee /proc/sys/vm/drop_caches
sudo apt-get clean
sudo apt-get autoclean
sudo rm -rf /tmp/*

echo "Limpieza de caché completada."


#dale permisos de ejecución y ejecútalo:
#chmod +x limpiar_cache.sh
#./limpiar_cache.sh