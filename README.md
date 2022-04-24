## Resumen de lo que hace el sistema o app desarrollada.
Dada entonces la necesidad de la localidad de realizar un sistema para el control de **Jornada de almuerzo ¡gratis!**, esta aplicacion ayuda al control de personas que se le ha entregado o estan en lista de espera a la entrega de su almuerzo, en ella podremos anadir, eliminar, crear y actualizar registros.

## Librerías usadas 
### Tinker : 
ayuda a usar nuestro proyecto Laravel en la linea de comandos y asi mas facil acceder a eventos, objetos...
### Artisan:
Ayuda a trabajar con las vistas de la app
### VueJS:
Con Vue fue creada la parte frontend de la aplicacion

## Pasos requeridos para montar la app en un entorno.
1. Construir el entorno laravel + vue
 ```laravel
composer create-project --prefer-dist laravel/laravel laravel+vue "	9.8.1"
``` 
2. instalar node_modules para inicializar el módulo de nodo
```
npm install
```
 3.Instalar nuestro servidor "Live server"
    ```
    https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer
    ```
    
  4.Iniciar nuestro servidor para el backend
        ```
        php artisan serve
        ```
        

 5.migramos nuestra base de datos con el siguiente comando a nuestro gestor de base de datos, en este caso: xampp + mysql
    ```
    php artisan migrate
    ```
    
   6.Iniciar nuestro servidor para el backend
    ```
    php artisan serve
    ```
      
## Estructura del proyecto

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```
apirest_almuerzo
├─ .editorconfig
├─ .gitattributes
├─ .gitignore
├─ .styleci.yml
├─ app
│  ├─ Console
│  │  └─ Kernel.php
│  ├─ Exceptions
│  │  └─ Handler.php
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Controller.php
│  │  │  └─ residentesController.php
│  │  ├─ Kernel.php
│  │  └─ Middleware
│  │     ├─ Authenticate.php
│  │     ├─ EncryptCookies.php
│  │     ├─ PreventRequestsDuringMaintenance.php
│  │     ├─ RedirectIfAuthenticated.php
│  │     ├─ TrimStrings.php
│  │     ├─ TrustHosts.php
│  │     ├─ TrustProxies.php
│  │     └─ VerifyCsrfToken.php
│  ├─ Models
│  │  ├─ residentes.php
│  │  └─ User.php
│  └─ Providers
│     ├─ AppServiceProvider.php
│     ├─ AuthServiceProvider.php
│     ├─ BroadcastServiceProvider.php
│     ├─ EventServiceProvider.php
│     └─ RouteServiceProvider.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  └─ cache
│     ├─ .gitignore
│     ├─ packages.php
│     └─ services.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ broadcasting.php
│  ├─ cache.php
│  ├─ cors.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ hashing.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ sanctum.php
│  ├─ services.php
│  ├─ session.php
│  └─ view.php
├─ database
│  ├─ .gitignore
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 2014_10_12_000000_create_users_table.php
│  │  ├─ 2014_10_12_100000_create_password_resets_table.php
│  │  ├─ 2019_08_19_000000_create_failed_jobs_table.php
│  │  ├─ 2019_12_14_000001_create_personal_access_tokens_table.php
│  │  └─ 2022_04_22_005301_create_residentes_table.php
│  └─ seeders
│     └─ DatabaseSeeder.php
├─ lang
│  ├─ en
│  │  ├─ auth.php
│  │  ├─ pagination.php
│  │  ├─ passwords.php
│  │  └─ validation.php
│  └─ en.json
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ favicon.ico
│  ├─ index.php
│  └─ robots.txt
├─ README.md
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  └─ views
│     └─ welcome.blade.php
├─ routes
│  ├─ api.php
│  ├─ channels.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ .gitignore
│  │  └─ public
│  │     └─ .gitignore
│  ├─ framework
│  │  ├─ .gitignore
│  │  ├─ cache
│  │  │  ├─ .gitignore
│  │  │  └─ data
│  │  │     ├─ .gitignore
│  │  │     ├─ c0
│  │  │     │  └─ 71
│  │  │     │     └─ c071422490d526a8aada046adf3a9c9fa0593468
│  │  │     └─ ec
│  │  │        └─ c4
│  │  │           └─ ecc49f49f4da6b940dcde13f0571e79c299871e6
│  │  ├─ sessions
│  │  │  ├─ .gitignore
│  │  │  ├─ B6UBLNGIz2AeJHHFzgYzNWBC7KmdN5Jchg4TRfFF
│  │  │  ├─ BV0GXJJe3YCKaXsTD8YV0bcHWCagOX8HmTBjyTmq
│  │  │  └─ fMpvO4AZWxFiSoHz7qEF344PZLldpT8GbOhxbT4U
│  │  ├─ testing
│  │  │  └─ .gitignore
│  │  └─ views
│  │     ├─ .gitignore
│  │     ├─ 0182fe6517e15dc03ab2ce277fc0b7ad5a7493ca.php
│  │     ├─ 6ef3ea7ca5cc78ef8cc36f1caff88c20f35eda6a.php
│  │     └─ b2b7ee1610f2a0030d5f588a883b3f1b294ffa22.php
│  └─ logs
│     ├─ .gitignore
│     └─ laravel.log
├─ tests
│  ├─ CreatesApplication.php
│  ├─ Feature
│  │  └─ ExampleTest.php
│  ├─ TestCase.php
│  └─ Unit
│     └─ ExampleTest.php
└─ webpack.mix.js

```

## URLs de acciones y como implementarlo de forma detallada.
-**URL: http://localhost:8000/api/residentes/**

-**PAGINACION: http://localhost:8000/api/residentes/'?page='**

-**GET para obtener residentes: http://localhost:8000/api/residentes/'ID'**

-**GET para obtener resultados en la busqueda: http://localhost:8000/api/residentes/'?search='**

-**PUT para actualizar residentes: http://localhost:8000/api/residentes/'ID'**

-**DELETE para eliminar residentes: http://localhost:8000/api/residentes/'ID'**


