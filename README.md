# shop_cart_api
Shop cart - Laravel API

## Requisitos
- Instalación de php y composer.
- Instalación de Laravel.
- Conexión a base de datos SQL.

## Instalación y ejecución
1. Descargue el proyecto:  
`git clone https://github.com/cczambrano12/shop_cart_api shop_cart_api`  

2. Ubíquese dentro de la carpeta del proyecto:  
`cd shop_cart_api`  

3. Instale las dependencias del proyecto:  
`composer install`  

4. Configure la conexión a la base de datos en el archivo **.env** utilizando los datos correspondientes a su configuración. En por defecto el proyecto está configurado para una base de datos en MySQL de nombre *carrito_tul* con conexión por *localhost:3308*, con usuario *root* y contraseña vacía  
    `DB_CONNECTION=mysql`  
    `DB_HOST=127.0.0.1`  
    `DB_PORT=3308`  
    `DB_DATABASE=carrito_tul`  
    `DB_USERNAME=root`  
    `DB_PASSWORD=`  

5. Ejecute las migraciones del proyecto para crear las tablas predefinidas:  
`php artisan migrate`  

6. Ejecute el seeder de la lista de productos para crear registros pre existentes en la tabla de productos:  
`php artisan db:seed --class="ProductsSeeder"`

7. Ejecute el servidor de desarrollo. Por defecto Laravel ejecuta el servidor de desarrollo en *localhost:8000*.    
`php artisan serve`


