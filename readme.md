## Run in Local Machine

After cloning run

```
composer install

php artisan key:generate

php artisan migrate:fresh --seed

php artisan serve
```

## API Endpoints

```
GET http://localhost:8000/api/persons/
GET http://localhost:8000/api/persons/{id}
POST http://localhost:8000/api/persons/
PUT http://localhost:8000/api/persons/{id}
DELETE http://localhost:8000/api/persons/{id}
```
