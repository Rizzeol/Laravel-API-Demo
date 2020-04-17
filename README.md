##Instructions to Use the API

#### Installation 
###### Local Installation
 Clone the repo    
```
    git clone
```
If you don't have XAMPP installed in your local environment. Please install XAMPP from  [here](https://www.apachefriends.org/index.html).


 Install Composer package manager
```
    composer install
```
Create database

Please install XAMPP from  [here](https://www.apachefriends.org/index.html). After that please create a database.
Open `.env` file,

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```
Run database migration
```
php artisan migrate:fresh
```
Seed database with Demo data
```
php artisan db:seed --class StudentTextSeeder
```
Now you have fake data stored in database.

Serve the api
```
php artisan serve
```
#### API endpoints and calling procedure
1. Student text post API
    ```
    http://127.0.0.1:8000/api/studenttext?user=username&text=text_message
    ```
2. Student text get API
    ```
    http://127.0.0.1:8000/api/studenttext
    ```
