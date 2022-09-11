---
title: XeParrot Shopper API

language_tabs:

toc_footers:
  - <a href='https://xeparrot.io'>Developed by Sanjaya Senevirathne</a>

includes:
  - errors

search: true

code_clipboard: false

meta:
  - name: description
    content: Documentation for the Xeparrot V0.0.1
---

# API Reference

## Introduction

Welcome to the Xeparrot Developer Documentation V0.0.1. You can use this API to access XeParrot endpoints, which can get information of various shoppers, products, webauthn, auth, payment details and addresses in the database.

We have language bindings in curl You can view code examples in the dark area to the right, and you can switch the programming language of the examples with the tabs in the top right.

# Install

## Download 

Download the files above and place on your server.

## Environment Files

This package ships with a .env.example file in the root of the project.

You must rename this file to just .env

<aside class="success">
Note: Make sure you have hidden files shown on your system.
</aside>

## Composer

XeParrot project dependencies are managed through the PHP Composer tool. The first step is to install the depencencies by navigating into your project in terminal and typing this command

`composer install`

## NPM or YARN

In order to install the Javascript packages for frontend development, you will need the Node Package Manager, and optionally the Yarn Package Manager by Facebook (Recommended)

If you only have NPM installed you have to run this command from the root of the project:

`npm install`

If you have Yarn installed, run this instead from the root of the project:

`yarn`

## Create Database

You must create your database on your server and on your .env file update the following lines:

```text

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

```
Change these lines to reflect your new database settings.


## Artisan Commands

### Generate Key

The first thing we are going to do is set the key that Laravel will use when doing encryption.

```text

php artisan key:generate

```

### Migrate Database

You should see a green message stating your key was successfully generated. As well as you should see the APP_KEY variable in your .env file reflected.

It's time to see if your database credentials are correct.

We are going to run the built in migrations to create the database tables:

```text

php artisan migrate

```

### Seeds Dummy Data

You should see a message for each table migrated, if you don't and see errors, than your credentials are most likely not correct.

We are now going to set the administrator account information. To do this you need to navigate to this file and change the name/email/password of the Administrator account.

You can delete the other dummy users, but do not delete the administrator account or you will not be able to access the backend.

Now seed the database with:

```text

php artisan db:seed

```


You should get a message for each file seeded, you should see the information in your database tables.

## NPM Run '*'

Now that you have the database tables and default rows, you need to build the styles and scripts.

### Run NPM on your Application

These files are generated using Laravel Mix, which is a wrapper around many tools, and works off the webpack.mix.js in the root of the project.

You can build with:


```text

npm run <command>

```


The available commands are listed at the top of the package.json file under the 'scripts' key.

You will see a lot of information flash on the screen and then be provided with a table at the end explaining what was compiled and where the files live.

At this point you are done, you should be able to hit the project in your local browser and see the project, as well as be able to log in with the administrator and view the backend

## PHP Unit

After your project is installed, make sure you run the test suite to make sure all of the parts are working correctly. From the root of your project run:

```text

php artisan phpunit

```


You will see a dot(.) appear for each of the hundreds of tests, and then be provided with the amount of passing tests at the end. There should be no failures with a fresh install.

## Storage Link

After your project is installed you must run this command to link your public storage folder for user avatar uploads:


```text

php artisan storage:link

```

# Structure

## Domain Structure

The structure of each domain is up to you, but is good practice to just follow the default Laravel app folder structure.

For example, the Auth domain has code relevant to the `authentication/authorization` portion of the application, and is broken
down into all the relevant folders: `Events/Http/Listeners/Models/etc`. These are just namespaced files placed here instead
 of normally like `App/Http/Auth` it's `App/Domains/Auth/Http`.


## Events

Note: All current events in this project are processed with a like-named listener class that is registered in EventServiceProvider and stored in that domains Listeners directory.

Most events are used to log information using spaties activity-log package.

Some events have extra functionality:

* UserLoggedIn: - Sets the users last_login_at and last_login_ip columns.
* PasswordReset: - This one is dispatched from the Laravel core, but is caught to set the password_changed_at column of the current user to now().


## Middleware

There are many included middleware that are not Laravel default:

* `App\Domains\Auth\Http\Middleware\AdminCheck` - Passes if the current user is an administrator.

* `App\Domains\Auth\Http\Middleware\PasswordExpires` - If the users password is expired based on the configs, it sends them to the change password page.

* `App\Domains\Auth\Http\Middleware\SuperAdminCheck` - Checks to see if the current user is an administrator and has all roles and permissions.

* `App\Domains\Auth\Http\Middleware\ToBeLoggedOut` - Checks to see if the current users to_be_logged_out boolean is set to true and logs them out if so.

* `App\Domains\Auth\Http\Middleware\TwoFactorAuthenticationStatus` - Checks to see if 2FA is needed for the current route.

* `App\Domains\Auth\Http\Middleware\UserCheck` - Passes if the current user is of type user.

* `App\Domains\Auth\Http\Middleware\UserTypeCheck` - Checks to see if the current user is of the type passed in.

* `App\Http\Middleware\LocaleMiddleware` - Switches the current locale.


## Requests

This method is opinionated, so refactor how you see fit.

Form requests are used where validation or authorization is needed for a request (and a policy isn't the best choice for the given request) and is injected into the controllers action signature.

Form requests are not used in Laravel's default auth scaffolding controllers where a validate() method is supplied such as login and register.

<aside class="success">
Note: Any exceptions thrown by form requests are instances of Laravel's AuthorizationException and are caught in the Exception handler which formats the response.
</aside>

## Models

Models are organized by domain, and furthermore I use traits to organize each model:

 * `Attribute/MODELAttribute` - Holds all the attribute modifiers for the given model.
 * `Method/MODELMethod` - Holds all the methods for the given model. (There are some methods in the User model that must be in the root, please don't make PRs to move them)
 * `Relationship/MODELRelationship` - Holds all the relationships for the given model.
 * `Scope/MODELScope` - Holds all the scopes for the given model.
 
Model properties such as $dates, $casts, $appends, and $with are used where necessary.


## Observers

There is one observer included with the project, that is registered in the ObserverServiceProvider:

 * UserObserver: - This observer hooks the users created and updated events and logs new password histories if the config allows for it.

## Rules

There is one rule included with the project, that is used in any request dealing with password changes:

 * UnusedPassword: - Checks to see if the password the user is changing to has not been used for the last X times as defined in the config.

## Services

Services are classes to attempt to extract database logic out of the controllers.

There is a BaseService class you can extend, who's constructor accepts a model and inherits some useful functionality such as get(), count(), find(), etc.

Example:

Instead of duplicating this line everywhere:

```php
$user = User::findOrFail($id);

```

You can use: 

```php
$user = resolve(UserService::class)->findOrFail($id);

```

It's longer, but it's extracted out to one place in the codebase instead of duplicating logic everywhere. This is just an example, and a one liner usually isn't a big deal, but extracting out multi-line logic that doesn't belong in a model or elsewhere is good to have in a service dedicated to one model.

## Exceptions

Admittedly, the exception classes could be more descriptive, and that is a goal for the next version.

But for now, there are two non-laravel exceptions that can be used:

* GeneralException: - I use this when I want to throw an exception and stop the execution of code, usually in a catch block or if an save/update fails. This exception does not report to the log files, instead it redirects back with the message (and old input) in an alert-danger bootstrap alert which is rendered from the messages blade partial using the flash_danger key.

* ReportableException: - Same functionality as GeneralException except the exceptions get caught by the logger.
  The Exception Handler class also catches a few Laravel/Package exceptions to perform other functionality.

## Helpers

Though some people say it's not a good design pattern to have helper classes, I found this method easier to organize than just including a helpers.php file in composers file section.

The `App\Helpers` directory comes with one folder:

* Global: - The Global folder is a special helpers directory, any file in this folder is autoloaded and the functions become available globally just like a regular helpers file loaded with composer. The HelperServiceProvider does the loading.
  Any helper class placed outside of the Global folder is just a normal namespaced class that you can resolve normally.
  

## Liveware

This project includes Laravel Livewire as a dependency because it makes use of my Laravel Livewire Tables plugin for the datatables functionality.

You can find all Livewire components in the `App\Http\Livewire` directory.

<aside class="success">
Note: I used Livewire for the 2FA code box because if the page refreshed, the QR code would change thus invalidating the whole process. I also thought it would be cleaner than Vue since it's such small functionality.
</aside>

## Configuration

All of the configurable items of the xeparrot can be found in the config/engine.php file. Each item should have a relevant doc block.

There may be other configuration files published by default from some packages such as activitylog, permission, geoip, etc.


# Resource Structure

This project follows standard Laravel resource folder structure.

## Javascript

The javascript files are as follows:

 * `backend/app.js` - Compiles the backend javascript
 
 * `frontend/app.js` - Compiles the frontend javascript
 
 * `bootstrap.js` - Bootstrap functionality for the frontend
 
 * `plugins.js` - Random javascript/jQuery functionality used globally

## Language

All language files for this version of the xeparrot are in JSON format except default Laravel files and package languages if published.


## SCSS
   
The SCSS files are as follows:
   
 * `backend/app.scss` - Compiles the backend CSS
 * `frontend/_global.scss` - Frontend global SCSS
 * `frontend/_variables.scss` - Frontend Bootstrap overrides
 * `frontend/app.scss` - Compiles the frontend CSS
 * `_global.scss` - Global styles included in frontend and backend

## View

The views are structured much like the rest of the application, frontend/backend/etc. They usually follow the namespace structure.

There's only one folder to note, and that is components which are blade components used throughout the blade files. At the time of this writing they are all anonymous components, or they don't have an associated class and just work off of the props passed into them.


# XeModule

## Quick Example

Generate your first xemodule using `php artisan xemodule:make Blog` . The following structure will be generated.

```text
app/
bootstrap/
vendor/
Modules/
  ├── Blog/
      ├── Assets/
      ├── Config/
      ├── Console/
      ├── Database/
          ├── Migrations/
          ├── Seeders/
      ├── Entities/
      ├── Http/
          ├── Controllers/
          ├── Middleware/
          ├── Requests/
      ├── Providers/
          ├── BlogServiceProvider.php
          ├── RouteServiceProvider.php
      ├── Resources/
          ├── assets/
              ├── js/
                ├── app.js
              ├── sass/
                ├── app.scss
          ├── lang/
          ├── views/
      ├── Routes/
          ├── api.php
          ├── web.php
      ├── Repositories/
      ├── Tests/
      ├── composer.json
      ├── module.json
      ├── package.json
      ├── webpack.mix.js
```

## Create Module

Creating a xemodule is simple and straightforward. Run the following command to create a xemodule.

```text

php artisan xemodule:make <xemodule-name>

```


Replace <xemodule-name> by your desired name.

It is also possible to create multiple xemodules in one command.

```text
php artisan xemodule:make Blog User Auth

```

By default when you create a new xemodule, the command will add some resources like a controller, seed class, service provider, etc. automatically. If you don't want these, you can add --plain flag, to generate a plain xemodule.


```text
php artisan xemodule:make Blog --plain
# or
php artisan xemodule:make Blog -p
```

## Naming convention

Because we are autoloading the xemodules using psr-4, we strongly recommend using StudlyCase convention.

## Folder Structure

```text
app/
bootstrap/
vendor/
Modules/
  ├── Blog/
      ├── Assets/
      ├── Config/
      ├── Console/
      ├── Database/
          ├── Migrations/
          ├── Seeders/
      ├── Entities/
      ├── Http/
          ├── Controllers/
          ├── Middleware/
          ├── Requests/
          ├── routes.php
      ├── Providers/
          ├── BlogServiceProvider.php
      ├── Resources/
          ├── lang/
          ├── views/
      ├── Repositories/
      ├── Tests/
      ├── composer.json
      ├── module.json
      ├── start.php
```


## Custom Name Spaces

When you create a new xemodule it also registers new custom namespace for Lang, View and Config. For example, if you create a new xemodule named blog, it will also register new namespace/hint blog for that xemodule. Then, you can use that namespace for calling Lang, View or Config. Following are some examples of its usage:

Calling Lang:

```php
Lang::get('blog::group.name');

@trans('blog::group.name');
```

Calling View:

```php
view('blog::index')

view('blog::partials.sidebar')

```

Calling Config:

```php

Config::get('blog.name')

```

## Default namespace

What the default namespace will be when generating xemodules.

Key: `namespace`

Default: `Modules`


## Overwrite the generated files

Overwrite the default generated stubs to be used when generating xemodules. This can be useful to customise the output of different files.

Key: `stubs`

## Overwrite the paths

Overwrite the default paths used throughout the package.

Key: `paths`

## Scan additional folders for xemodules

This is disabled by default. Once enabled, the package will look for xemodules in the specified array of paths.

Key: `scan`

## Composer file template

Customise the generated `composer.json` file.

Key: `composer`


## Caching

If you have many xemodules it's a good idea to cache this information (like the multiple xemodule.json files for example).

Key: `cache`


## Registering custom namespace

Decide which custom namespaces need to be registered by the package. If one is set to false, the package won't handle its registration.

Key: `register`


## Helpers

### Module path function

Get the path to the given xemodule.

```php
$path = module_path('Blog');
```

## Compiling Assets


### Installation & Setup

When you create a new xemodule it also create assets for CSS/JS and the webpack.mix.js configuration file.

```text
php artisan xemodule:make Blog
```

Change directory to the xemodule:

```text
cd Modules/Blog
```

The default package.json file includes everything you need to get started. You may install the dependencies it references by running:

```text
npm install
```

## Running Mix

Mix is a configuration layer on top of Webpack, so to run your Mix tasks you only need to execute one of the NPM scripts that is included with the default laravel-xemodules package.json file

```text
// Run all Mix tasks...
npm run dev

// Run all Mix tasks and minify output...
npm run production
```

After generating the versioned file, you won't know the exact file name. So, you should use Laravel's global mix function within your views to load the appropriately hashed asset. The mix function will automatically determine the current name of the hashed file:

```text
// Modules/Blog/Resources/views/layouts/master.blade.php

<link rel="stylesheet" href="{{ mix('css/blog.css') }}">

<script src="{{ mix('js/blog.js') }}"></script>
```

For more info on Laravel Mix view the documentation here: https://laravel.com/docs/mix

<aside class="success">
Note: to prevent the main Laravel Mix configuration from overwriting the `public/mix-manifest.json` file:
</aside>

Install `laravel-mix-merge-manifest`


```text
npm install laravel-mix-merge-manifest --save-dev
```

Modify `webpack.mix.js` main file


```javascript
let mix = require('laravel-mix');


/* Allow multiple Laravel Mix applications*/
require('laravel-mix-merge-manifest');
mix.mergeManifest();
/*----------------------------------------*/

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
```

## Artisan commands

<aside class="success">
You can use the following commands with the --help suffix to find its arguments and options.
</aside>

Note all the following commands use "Blog" as example xemodule name, and example class/file names


### Utility commands

### xemodule:make

Generate a new xemodule.

```text
php artisan xemodule:make Blog
```

### xemodule:make

Generate multiple xemodules at once.

```text
php artisan xemodule:make Blog User Auth
```

### xemodule:use

Use a given xemodule. This allows you to not specify the xemodule name on other commands requiring the xemodule name as an argument.


```text
php artisan xemodule:use
```


### xemodule:unuse

This unsets the specified xemodule that was set with the xemodule:use command.

```text
php artisan xemodule:unuse
```

### xemodule:list
List all available xemodules.

```text
php artisan xemodule:list
```

### xemodule:migrate

Migrate the given xemodule, or without a xemodule an argument, migrate all xemodules.

```text
php artisan xemodule:migrate Blog
```

### xemodule:migrate-rollback

Rollback the given xemodule, or without an argument, rollback all xemodules.

```text
php artisan xemodule:migrate-rollback Blog
```

### xemodule:migrate-refresh
Refresh the migration for the given xemodule, or without a specified xemodule refresh all xemodules migrations.


### xemodule:migrate-reset Blog
Reset the migration for the given xemodule, or without a specified xemodule reset all xemodules migrations.

```text
php artisan xemodule:migrate-reset Blog
```

### xemodule:seed
Seed the given xemodule, or without an argument, seed all xemodules

```text
php artisan xemodule:seed Blog
```

### xemodule:publish-migration

Publish the migration files for the given xemodule, or without an argument publish all xemodules migrations.

```text
php artisan xemodule:publish-migration Blog
```

### xemodule:publish-config
Publish the given xemodule configuration files, or without an argument publish all xemodules configuration files.

```text
php artisan xemodule:publish-config Blog
```

### xemodule:publish-translation
Publish the translation files for the given xemodule, or without a specified xemodule publish all xemodules migrations.

```text
php artisan xemodule:publish-translation Blog
```

### xemodule:enable

Enable the given xemodule.

```text
php artisan xemodule:enable Blog
```

### xemodule:disable

Disable the given xemodule.

```text
php artisan xemodule:disable Blog
```

### xemodule:update
Update the given xemodule.

```text
php artisan xemodule:update Blog
```

## Generator commands

### xemodule:make-command
Generate the given console command for the specified xemodule.

```text
php artisan xemodule:make-command CreatePostCommand Blog
```

### xemodule:make-migration
Generate a migration for specified xemodule.

```text
php artisan xemodule:make-migration create_posts_table Blog
```

### xemodule:make-seed

Generate the given seed name for the specified xemodule.

```text
php artisan xemodule:make-seed seed_fake_blog_posts Blog
```


### xemodule:make-controller

Generate a controller for the specified xemodule.

```text
php artisan xemodule:make-controller PostsController Blog
```

### xemodule:make-model
Generate the given model for the specified xemodule.

```text
php artisan xemodule:make-model Post Blog
```

Optional options:
    * `--fillable=field1,field2:` set the fillable fields on the generated model
    *  `--migration, -m:` create the migration file for the given model


### xemodule:make-provider

Generate the given service provider name for the specified xemodule.

```text
php artisan xemodule:make-provider BlogServiceProvider Blog
```

### xemodule:make-middleware
Generate the given middleware name for the specified xemodule.

```text
php artisan xemodule:make-middleware CanReadPostsMiddleware Blog
```

### xemodule:make-mail
Generate the given mail class for the specified xemodule.

```text
php artisan xemodule:make-mail SendWeeklyPostsEmail Blog
```


### xemodule:make-mail
Generate the given mail class for the specified xemodule.

```text
php artisan xemodule:make-mail SendWeeklyPostsEmail Blog
```

### xemodule:make-notification
Generate the given notification class name for the specified xemodule.

```text
php artisan xemodule:make-notification NotifyAdminOfNewComment Blog
```

### xemodule:make-listener
Generate the given listener for the specified xemodule. Optionally you can specify which event class it should listen to. It also accepts a --queued flag allowed queued event listeners.

```text
php artisan xemodule:make-listener NotifyUsersOfANewPost Blog
php artisan xemodule:make-listener NotifyUsersOfANewPost Blog --event=PostWasCreated
php artisan xemodule:make-listener NotifyUsersOfANewPost Blog --event=PostWasCreated --queued
```

### xemodule:make-request
Generate the given request for the specified xemodule.

```text
php artisan xemodule:make-request CreatePostRequest Blog
```

### xemodule:make-event

Generate the given event for the specified xemodule.

```text
php artisan xemodule:make-event BlogPostWasUpdated Blog
```

### xemodule:make-job

Generate the given job for the specified xemodule.

```text
php artisan xemodule:make-job JobName Blog

php artisan xemodule:make-job JobName Blog --sync # A synchronous job class
```

### xemodule:route-provider
Generate the given route service provider for the specified xemodule.

```text
php artisan xemodule:route-provider Blog
```

### xemodule:make-factory
Generate the given database factory for the specified xemodule.

```text
php artisan xemodule:make-factory FactoryName Blog
```

### xemodule:make-policy

Generate the given policy class for the specified xemodule.

The Policies is not generated by default when creating a new xemodule. Change the value of paths.generator.policies in xemodules.php to your desired location.

```text
php artisan xemodule:make-policy PolicyName Blog
```

### xemodule:make-rule

Generate the given validation rule class for the specified xemodule.

The Rules folder is not generated by default when creating a new xemodule. Change the value of paths.generator.rules in xemodules.php to your desired location.


```text
php artisan xemodule:make-rule ValidationRule Blog
```

### xemodule:make-resource

Generate the given resource class for the specified xemodule. It can have an optional --collection argument to generate a resource collection.

The Transformers folder is not generated by default when creating a new xemodule. Change the value of paths.generator.resource in xemodules.php to your desired location.

```text
php artisan xemodule:make-resource PostResource Blog
php artisan xemodule:make-resource PostResource Blog --collection
```

### xemodule:make-test
Generate the given test class for the specified xemodule.

```text
php artisan xemodule:make-test EloquentPostRepositoryTest Blog
```

## Facade methods

### Get all modules.

```php
Module::all();
```

### Get all cached modules.

```php
Module::getCached()
```

### Get Ordered

Get ordered modules. The modules will be ordered by the priority key in module.json file.

```php
Module::getOrdered();
```

### Get Scanned

Get scanned modules.

```php
Module::scan();
```

### Find Modules

Find a specific module.

```php
Module::find('name');
// OR
Module::get('name');
```

### Find a Module

Find a module, if there is one, return the Module instance, otherwise throw Nwidart\Modules\Exeptions\ModuleNotFoundException.

```php
Module::findOrFail('module-name');
```

### Scanned Paths

Get scanned paths.

```php
Module::getScanPaths();
```

### Collection Modules

Get all modules as a collection instance.

```php
Module::toCollection();
```

### Module Status

Get modules by the status. 1 for active and 0 for inactive.


```php
Module::getByStatus(1);
```

### Check Specific Module

Check the specified module. If it exists, will return true, otherwise false.

```php
Module::has('blog');
```

### Get All Enabled Modules

Get all enabled modules.

```php
Module::allEnabled();
```

### Get All Disabled Modules

Get all disabled modules.

```php
Module::allDisabled();
```


### Get Count of all Modules

Get count of all modules.

```php
Module::count();
```

### Module Path

Get module path.

```php
Module::getPath();
```

### Register Modules
Register the modules.

```php
Module::register();

```

## Module Methods


### Get an entity from a specific module.

```php
$module = Module::find('blog');
```

### Get module name.

```php
$module->getName();
```

### Get module name in lowercase.

```php
$module->getLowerName();
```

### Get module name in studlycase.

```php
$module->getStudlyName();
```

### Get module path.

```php
$module->getPath();
```

### Get extra path.

```php
$module->getExtraPath('Assets');
```

### Disable the specified module.
 
```php
$module->disable();
```

### Enable the specified module.

```php
$module->enable();
```

### Delete the specified module.

```php
$module->delete();
```

### Get Requires

Get an array of module requirements. Note: these should be aliases of the module.


```php
$module->getRequires();
```

## Module Resources

Your module will most likely contain what laravel calls resources, those contain configuration, views, translation files, etc. In order for you module to correctly load and if wanted publish them you need to let laravel know about them as in any regular package.

<aside class="success">
Those resources are loaded in the service provider generated with a module (using module:make), unless the plain flag is used, in which case you will need to handle this logic yourself.
</aside>

<aside class="success">
Don't forget to change the paths, in the following code snippets a "Blog" module is assumed.
</aside>

## Configuration

```php
$this->publishes([
    __DIR__.'/../Config/config.php' => config_path('blog.php'),
], 'config');
$this->mergeConfigFrom(
    __DIR__.'/../Config/config.php', 'blog'
);
```

## Module Views

```php
$viewPath = base_path('resources/views/modules/blog');

$sourcePath = __DIR__.'/../Resources/views';

$this->publishes([
    $sourcePath => $viewPath
]);

$this->loadViewsFrom(array_merge(array_map(function ($path) {
    return $path . '/modules/blog';
}, \Config::get('view.paths')), [$sourcePath]), 'blog');
```

The main part here is the loadViewsFrom method call. If you don't want your views to be published to the laravel views folder, you can remove the call to the $this->publishes() call.


## Language files

```php
 $langPath = base_path('resources/lang/modules/blog');

if (is_dir($langPath)) {
    $this->loadTranslationsFrom($langPath, 'blog');
} else {
    $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'blog');
}
```

### Factories
If you want to use laravel factories you will have to add the following in your service provider:

```php
$this->app->singleton(Factory::class, function () {
    return Factory::construct(__DIR__ . '/Database/factories');
});
```


## Module Console Commands
Your module may contain console commands. You can generate these commands manually, or with the following helper:

```text
php artisan module:make-command CreatePostCommand Blog
```

This will create a CreatePostCommand inside the Blog module. By default this will be Modules/Blog/Console/CreatePostCommand.

Please refer to the laravel documentation on artisan commands to learn all about them.


## Registering the command

You can register the command with the laravel method called commands that is available inside a service provider class.

```php
$this->commands([
    \Modules\Blog\Console\CreatePostCommand::class,
]);
```

You can now access your command via php artisan in the console.


## Registering Module Events

Your module may contain events and event listeners. You can create these classes manually, or with the following helpers:

```text
php artisan module:make-event BlogPostWasUpdated Blog
php artisan module:make-listener NotifyAdminOfNewPost Blog
```

Once those are create you need to register them in laravel. This can be done in 2 ways:

 * Manually calling $this->app['events']->listen(BlogPostWasUpdated::class, NotifyAdminOfNewPost::class); in your module service provider
 * Or by creating a event service provider for your module which will contain all its events, similar to the EventServiceProvider under the app/ namespace.
 
## Creating an EventServiceProvider 

Once you have multiple events, you might find it easier to have all events and their listeners in a dedicated service provider. This is what the EventServiceProvider is for.

Create a new class called for instance EventServiceProvider in the Modules/Blog/Providers folder (Blog being an example name).

This class needs to look like this:

```php
<?php

namespace Modules\Blog\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [];
}
```


# Menu Management

## Quick Example

```php
// Menu.php
Menu::create('navbar', function($menu) {
    $menu->url('/', 'Home', 1);
    $menu->route('/', 'About', ['user' => '1'], 2);
    $menu->dropdown('Settings', function ($sub) {
        $sub->header('ACCOUNT');
        $sub->url('/settings/design', 'Design');
        $sub->divider();
        $sub->url('logout', 'Logout');
    }, 3);
});

// main.blade.php
{!! Menu::get('navbar') !!}
```

## Creating Menu

You can define your menus in your desired file / class, as long as it is autoload by composer.

To create a menu, simply call the create method from Menu facade. The first parameter is the menu name and the second parameter is callback for defining menu items.


```php
Menu::create('navbar', function($menu) {
    // define your menu items here
});
```

## Menu Item

As explained before, we can defining menu item in the callback by accessing $menu variable, which the variable is instance of Nwidart\Menus\MenuBuilder class.

To defining a plain URL, you can use ->url() method.

```php
Menu::create('navbar', function($menu) {
    // URL, Title, Attributes
    $menu->url('home', 'Home', ['target' => 'blank']);
});
```

If you have named route, you define the menu item by calling ->route() method.

```php
Menu::create('navbar', function($menu) {
	$menu->route(
        'users.show', // route name
        'View Profile', // title
        ['id' => 1], // route parameters
        ['target' => 'blank'] // attributes
    );
});
```

You can also defining the menu item via array by calling ->add() method.

```php
Menu::create('navbar', function($menu) {
    $menu->add([
        'url' => 'about',
        'title' => 'About',
        'attributes' => [
            'target' => '_blank'
        ]
    ]);

    $menu->add([
        'route' => ['profile', ['user' => 'nwidart']],
        'title' => 'Visit My Profile',
        'attributes' => [
            'target' => '_blank'
        ]
    ]);
});
```

## Menu Dropdown

To create a dropdown menu, you can call to ->dropdown() method and passing the first parameter by title of dropdown and the second parameter by closure callback that retrieve $sub variable. The $sub variable is the the instance of Nwidart\Menus\MenuItem class.

```php
Menu::create('navbar', function($menu) {
    $menu->url('/', 'Home');
    $menu->dropdown('Settings', function ($sub) {
        $sub->url('settings/account', 'Account');
        $sub->url('settings/password', 'Password');
        $sub->url('settings/design', 'Design');
    });
});
```

## Menu Dropdown Multi Level

You can also create a dropdown inside dropdown by using ->dropdown() method. This will allow to to create a multilevel menu items.

```php
Menu::create('navbar', function($menu) {
    $menu->url('/', 'Home');
    $menu->dropdown('Account', function ($sub) {
        $sub->url('profile', 'Visit My Profile');
        $sub->dropdown('Settings', function ($sub) {
            $sub->url('settings/account', 'Account');
            $sub->url('settings/password', 'Password');
            $sub->url('settings/design', 'Design');
        });
        $sub->url('logout', 'Logout');
    });
});
```

# Admin Pages

## Define Controllers

Xeparrot allows to create backend level admin pages, so first thing you should add this service on your created controller
 
```php
use App\Services\SettingPageGeneratorBackend;
```

Now you can define forms controllers components
 
 ```php
  $adminPage = new SettingPageGeneratorBackend('title','views','post_url');
 ```

Parameter | Type | Description
--------- | ------- | -----------
title | string | Title of setting pages.
views | string | Return view page name.
post_url | string | form post route



## Add form controllers

Follow this example, you can define form components

```php
 $adminPage->addController(
            'name',
            'is_required,
            'label',
            'description',
            'category',
            'type',
            'value');
```

Parameter | Type | Description
--------- | ------- | -----------
name | string | component name.
is_required | bool | Return view page name.
label | string | form post route
description | text | description 
category | string | category name
type | string | controller components types
value | string | field values
data | array | external data list


## Form component types


Type | Description
--------- | -------
text |  text components
select | drop down component
textarea | text area field
file | file uploader field


## Example Form

Following this example

```php

$settingPageGenerator = new SettingPageGeneratorBackend('FileManager','values','https://hellocom.com');



        $settingPageGenerator->addController(
            'project_name',
                true,
                'Project Name',
                'Please enter your project name',
                'Projects',
                'text',
                'hello');


        $settingPageGenerator->addController(
            'project_example',
            true,
            'Project Example',
            'This is best example label',
            'Hello',
            'select',
                'values2',[
            [
                'name' => 'Sanjaya Senevirathne',
                'value' => 'values'

            ],
            [
                'name' => 'Kumara Bandara',
                'value' => 'values2'
            ]
        ]);

        $settingPageGenerator->addController(
            'project_name',
            false,
            'Project Name',
            'Please enter your project name',
            'Projects',
            'textarea',
            'hello');


        $settingPageGenerator->addController(
            'project_name',
            true,
            'Project Name',
            'Please enter your project name',
            'Projects',
            'file',
            'hello');

        $settingPageGenerator->renderControllers();
        $category = $settingPageGenerator->getContent();

        return view($settingPageGenerator->renderPage(),[
            'formData' => $category,
            'formURL' => ''
        ]);

```
