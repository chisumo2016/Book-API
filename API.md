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

## API RESOURCE
    - To generate two api resources
    - Create an article resource
        php artisan make:resource V1/ArticleResource 
        php artisan make:resource V1/AuthorResource  
        php artisan make:resource V1/ArticleCollection -c  
    - Resource extends to JsonResponce
    - Colleccction extends to ResourceCollection
    -To make use of collectionn let open the ArticleController
        retun  new ArticleCollection(Article::all());
    - To send type of data to our client in the ArticleCollection
             'data' => $this->collection,
             with(){}
             withResponse(){}
    - Stucture we send to a front end.
    - In the ArticleRessource we need to defined what we can return to our clients.
            Author can have many articles
            Article belong to User
            Define  type, attributes, relatioships , links 
            add two methods with(){} withResponse(){}

    - Open Author Response Resource, retur certain fields
            Stucture of data we send to our clients
        
## API ROUTES
    - Add the route in api files
    - First before starting the writing the routes  we should understand the RouteService Provider
        We want to do versioning like V1 http: blog.test/api/V1/articles
        Add the versioning on RouteServiceProvider
            Two options of versioning
                1: In RouteServiceProvider
                        Route::middleware('api.v1')
                            ->prefix('api')
                            ->group(base_path('routes/api_v1.php'));

                2: In api route file
    - Get Articles either by ID or Slug , we can implement this ligic into RouteServiceProvider
            Route::bind('article',function ($value){
            return \App\Models\Article::where('id', $value)
                ->orWhere('slug', $value)->firstOrFail();
        });
        















    

