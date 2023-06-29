
## Installation

- Create database using phpMyAdmin, Workbench ecc.
- Run to create new .env :
    ```sh
    cp .env.example .env
    ```
- Setup in .env your database host, port, username and password
- Install composer and npm:
    ```sh
    composer install
    ```
    ```sh
    npm install
    ```
- Create table using migrations:
    ```sh
    php artisan migrate
    ```
- Populate table using seeder collecting data from config/comics.php:
    ```sh
    php artisan db:seed --class=ComicSeeder
    ```
