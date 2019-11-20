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

## Configuration

The defaults are set in config/cors.php. Copy this file to your own config directory to modify the values. You can publish the config using this command:
```
php artisan vendor:publish --provider="Barryvdh\Cors\ServiceProvider"
```

?