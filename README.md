
# API RICK AND MORTY


This repo is functionality complete — PRs and issues welcome!

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.0/installation#installation)


Clone the repository

    git clone https://github.com/ricardoaburto/app-rick-and-morty.git

Switch to the repo folder

    cd app-rick-and-morty

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate
    
Update .env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan db:seed
    php artisan serve


***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh
    
## Endpoint
```
List Route
```
php artisan route:list


```
 GET http://127.0.0.1:8000/api/personajes
 ```
 STATUS 200
 ```
    Return
    "data": [
        {
            "nombre": "Krombopulos Michael",
            "especie": "Gromflomite",
            "genero": "Male",
            "created_at": "2022-03-11 02:24:51",
            "updated_at": "2022-03-11 02:24:51",
            "episodios": [
                {
                    "url": "https://www.youtube.com/watch?v=mB267cU64bo"
                }
            ]
        }];
        
 ```
   POST http://127.0.0.1:8000/api/personajes
 ```
   STATUS 201
 ```
    Body
        raw
            {
        "nombre": "morty smith",
        "genero": "Female",
        "especie": "Human",
        "episodios":[
            {"url":"https://www.youtube.com/watch?v=jsVcX9-cYZw&list=PL-8hlyCft4pj-T7Z8DNP5VpT_kkg9CZfs&index=5"},
            {"url":"https://www.youtube.com/watch?v=jsVcX9-cYZw&list=PL-8hlyCft4pj-T7Z8DNP5VpT_kkg9CZfs&index=5"}
            ]
        }
        
 ```
  PUT http://127.0.0.1:8000/api/personajes/1
 ```
  STATUS 200
  ```
    Body
        raw 
            {
            "nombre": "Jerry Smith",
            "genero": "Human"
            }
            
  ```
  GET http://127.0.0.1:8000/api/personajes/search/Female
  ```
  STATUS 200
  ```
   EXAMPLE search Genre or Name
  
        [
            {
                "id": 1,
                "nombre": "morty smith",
                "genero": "Female",
                "especie": "Human",
                "created_at": "2022-03-11T02:33:20.000000Z",
                "updated_at": "2022-03-11T02:33:20.000000Z"
            },
            {
                "id": 2,
                "nombre": "Jerry Smith",
                "genero": "Female",
                "especie": "Human",
                "created_at": "2022-03-11T02:33:39.000000Z",
                "updated_at": "2022-03-11T02:33:39.000000Z"
            }
         }
  ```
  DELETE http://127.0.0.1:8000/api/personajes/1
  ```
    STATUS 204
  ```      
        
        
