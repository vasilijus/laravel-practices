# Setup







## CORS 
Check rest-api README.md , for info
Install:
```
composer require barryvdh/laravel-cors
```

You also need to add Cors\ServiceProvider to your config/app.php providers array:
```
Barryvdh\Cors\ServiceProvider::class,
```