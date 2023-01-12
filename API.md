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
    Implement the logic to all traits 
    Create a relationship to user model
    Use traits in the article model
             use HasAuthor;
            use ModelHelpers;

### CREATE FACTORIES AND SEEDERS
    - Create factory for Article
         php artisan make:factory ArticleFactory  
    - Create seeder for Articles
        php artisan make:seed ArticlesTableSeeder  
    - Create seeder for Users
         php artisan make:seed UsersTableSeeder
    - Wtite all logics in both factory
    - Wtite all logics in both seeders table
    - Call all seeder in DatabaseSeeder
    - Seed into databasee
        php artisan migrate:fresh --seed    

## CREATE CONTROLLER 
    - Create a controllers
        php artisan make:controller API/V1/ArticleController -m Article --api 
    - ArticleController Methods
            Index
            Store
            Show
            Update
            Delete
    - Create AuthorController
        php artisan make:controller API/V1/AuthorController 
        















    

