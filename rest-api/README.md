# API Resource Routes

When declaring resource routes that will be consumed by APIs, you will commonly want to exclude routes that present HTML templates such as create and edit. For convenience, you may use the apiResource method to automatically exclude these two routes:

Route::apiResource('photos', 'PhotoController');

You may register many API resource controllers at once by passing an array to the apiResources method:

Route::apiResources([
    'photos' => 'PhotoController',
    'posts' => 'PostController'
]);

To quickly generate an API resource controller that does not include the create or edit methods, use the --api switch when executing the make:controller command:

php artisan make:controller API/PhotoController --api

## Naming Resource Routes

By default, all resource controller actions have a route name; however, you can override these names by passing a names array with your options:

Route::resource('photos', 'PhotoController')->names([
    'create' => 'photos.build'
]);

## Naming Resource Route Parameters

By default, Route::resource will create the route parameters for your resource routes based on the "singularized" version of the resource name. You can easily override this on a per resource basis by using the parameters method. The array passed into the parameters method should be an associative array of resource names and parameter names:

Route::resource('users', 'AdminUserController')->parameters([
    'users' => 'admin_user'
]);

The example above generates the following URIs for the resource's show route:

/users/{admin_user}