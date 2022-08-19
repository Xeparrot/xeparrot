---
title: XeParrot Shopper API

language_tabs:
  - curl

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
  

# Liveware

This project includes Laravel Livewire as a dependency because it makes use of my Laravel Livewire Tables plugin for the datatables functionality.

You can find all Livewire components in the `App\Http\Livewire` directory.

<aside class="success">
Note: I used Livewire for the 2FA code box because if the page refreshed, the QR code would change thus invalidating the whole process. I also thought it would be cleaner than Vue since it's such small functionality.
</aside>

# Configuration

All of the configurable items of the boilerplate can be found in the config/engine.php file. Each item should have a relevant doc block.

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

All language files for this version of the boilerplate are in JSON format except default Laravel files and package languages if published.


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

