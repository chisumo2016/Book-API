### BUILDING AN REST API WITH LARAVEL

## INSTALL LARAVEL BREEZE
    - Install Laravel Breeze
        composer require laravel/breeze --dev
        php artisan breeze:install api

### CREATE MODELS AND MIGRATION
    Laravel Sanctun installed by default.
    Create an Article Model and Migration
        php artisan make:model Article -m  
    User can have many articles
        1: Many
    Articles belongs to a User relationshop
    Setup the article Model
        Two options
        1:  
            protected  $table = 'articles';
        2:
            const  TABLE = 'articles';
            protected  $table = SELF::TABLE;
    Mass assigment on Article Model

### RELATIONS TRAITS
    - Gonna set the relationship btn user and article
    - Create a folder called Traits
            Traits/HasAuthour.php
            Traits/ModelHelpers.php :If an aouthor has written an articles
    

