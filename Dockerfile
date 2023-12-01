FROM composer:2.6.5

# Copiar los archivos de la aplicación
COPY . /var/www/html

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Instalar dependencias de Composer
RUN composer install

# Comando para iniciar la aplicación
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
