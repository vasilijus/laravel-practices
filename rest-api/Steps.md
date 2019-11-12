# API

## Create Project

## Build Database

## Create Controller
```
php artisan make:controller ItemsController --resource
```

## Make Model ( with migration )
```
php artisan make:model Item -m
```

## Edit App\Providers
```
use Illuminate\Support\Facades\Schema;

public function boot()
{
    //
    Schema::defaultStringLength(191);
}
```

### Errors

Class 'Illuminate\Support\facades\schema' not found
/rest-api/app/Providers/AppServiceProvider.php:27

Edit in previous Step!


## Run Migration and populate tables 

```
php artisan migrate
```

## Test data -> Add new Item
```
php artisan tinker
>>> $item = new App\Item;
>>> $item->body = 'qweasd';
>>> $item->text = 'Item 1';
>>> $item->save();

>>> App\Item::all()

=> Illuminate\Database\Eloquent\Collection {#3015
     all: [
       App\Item {#3014
         id: 1,
         text: "Item 1",
         body: "qweasd",
         created_at: "2019-11-11 23:45:53",
         updated_at: "2019-11-11 23:45:53",
       },
     ],
   }
```

### Add Items Route
```
Route::resource('api/items', 'ItemsController');
```

### Setup Items Controller
```
    public function index()
    {
        //
        $items = \App\Item::all();
        return response()->json($items);
    }
```


## Test in POSTMAN
GET http://localhost:8000/api/items

### POST request

Will get Error:500

Post request require CSRF token
We can disable them (only for api)
> VerifyCsrfToken.php
```
    protected $except = [
        //
        'api/*'
    ];
```

Now we can return any data...


### PUT request ( Update )
when posting...
require _method: PUT