# InfyOm CRUD Laravel 5.5

---

## Pasos previos

Instalar y actualizar las librerías con composer

```bash
composer install 
```

```bash
composer install 
```

Generar la Key de la aplicación y migrar la base de datos

```bash
php artisan key:generate
```

```bash
php artisan migrate:install
```

```bash
php artisan migrate
```

Generar el controlador, modelo,... sobre Articulos

```bash
php artisan infyom:scaffold Articulos --fieldsFile=database/articulos.json
```

Añadir los campos de validación en el modelo

```php
public $fillable = ['nombre', 'cantidad'];
```

Por último, iniciar el framework

```bash
php artisan serve
```

---

## Datos de acceso

Para acceder al CRUD es necesario visitar la URL [http://testing06.megasur.es/home](http://testing06.megasur.es/home)

Los datos del usuario son:

- Email: aa@bb.com

- Contraseña: asdf123
