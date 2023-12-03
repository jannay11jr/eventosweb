FROM php:8.2

# Instalar extensiones y bibliotecas necesarias
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libpng-dev \
    nodejs npm \
    && rm -rf /var/lib/apt/lists/*


# Instalar extensiones PHP necesarias
RUN docker-php-ext-install bcmath gd zip pdo_mysql

# Copiar los archivos de la aplicación
COPY . /var/www/html

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Instalar dependencias de Composer y compilar estilos
#RUN npm install && npm run build

# Ejecutar migraciones y seeders
#CMD ["php", "artisan", "migrate:fresh", "--seed"]

# Ejecutar migraciones y seeders
CMD ["bash", "-c", "php artisan migrate:fresh --seed && php artisan serve --host=0.0.0.0 --port=8000 "]
