---
title: AdUp.io Shopper PSP

language_tabs:
  - curl

toc_footers:
  - <a href='https://adup.io'>Developed by Sanjaya Senevirathne</a>

includes:
  - errors

search: true

code_clipboard: true

meta:
  - name: description
    content: Documentation for the Adup.io Shopper API V3
---

# PSP Module Reference

## Introduction

Adup.io Shopper API PSP Module is a feature which created to manage your Adup Shopper Payment using PSP Modules. PSP Module is like a package, it has some views, controllers or models. This package is supported and tested in Laravel 9.


# Create PSP Gateway Module

Creating a PSP Gateway for Adup.io Shopper API is simple and straightforward. Run the following command to create a psp module.

    `php artisan adupgateway:make <gateway-name>`


Replace `<gateway-name>` by your desired gateway name.

It is also possible to create multiple psp modules in one command.

    `php artisan adupgateway:make Stripe Payhere Buckeroo`
    
By default when you create a new psp module, the command will add some resources like a controller, seed class, service provider, etc. automatically. If you don't want these, you can add --plain flag, to generate a plain module.

    `php artisan adupgateway:make Stripe --plain
     # or
     php artisan adupgateway:make Stripe -p`
     
# Structure

![alt text](https://v3-shopper-api.adup.io/module_struct.png)



## Naming convention
Because we are autoloading the modules using psr-4, we strongly recommend using StudlyCase convention.

## Folder structure

```json
app/
bootstrap/
vendor/
psp/
  ├── PSPModuleNAme/
      ├── Assets/
      ├── Config/
      ├── Console/
      ├── Database/
          ├── Migrations/
          ├── Seeders/
      ├── Entities/
          ├── PSPEngine/
      ├── Http/
          ├── Controllers/
          ├── Middleware/
          ├── Requests/
          ├── routes.php
      ├── Providers/
          ├── PSPServiceProvider.php
      ├── Resources/
          ├── lang/
          ├── views/
      ├── Repositories/
      ├── Tests/
      ├── composer.json
      ├── module.json
      ├── start.php
```

# Custom Name Spaces

When you create a new psp it also registers new custom namespace for Lang, View and Config. For example, if you create a new psp module named stripe, it will also register new namespace/hint stripe for that module. Then, you can use that namespace for calling Lang, View or Config. Following are some examples of its usage:

## Language
Calling Lang:

    `Lang::get('stripe::group.name');
     
     @trans('stripe::group.name');`

## Views
Calling View:

    `view('stripe::index')
     
     view('stripe::partials.sidebar')`
     
## Configs

Calling Config:
    
    `view('stripe::index')
      
    view('stripe::partials.sidebar')`
    
# Adup PSP Module Commands

<aside class="notice">
    Note all the following commands use "Stripe" as example module name, and example class/file names
</aside>

## adupgateway:make
Generate a new psp module.

`php artisan adupgateway:make Stripe`


## adupgateway:make

Generate multiple psp module at once.

`php artisan adupgateway:make Stripe User Auth`

## adupgateway:use

Use a given adupgateway. This allows you to not specify the adupgateway name on other commands requiring the adupgateway name as an argument.

`php artisan adupgateway:use Stripe`
`adupgateway:unuse`

This unsets the specified adupgateway that was set with the adupgateway:use command.

`php artisan adupgateway:unuse`


## adupgateway:list

List all available adupgateways.

`php artisan adupgateway:list`

## adupgateway:migrate

Migrate the given adupgateway, or without a adupgateway an argument, migrate all adupgateways.

`php artisan adupgateway:migrate Stripe`

Rollback the given adupgateway, or without an argument, rollback all adupgateways.

## adupgateway:migrate-rollback

`php artisan adupgateway:migrate-rollback Stripe`

## adupgateway:migrate-refresh
Refresh the migration for the given adupgateway, or without a specified adupgateway refresh all adupgateways migrations.

`php artisan adupgateway:migrate-refresh Stripe`
`adupgateway:migrate-reset Stripe`

Reset the migration for the given adupgateway, or without a specified adupgateway reset all adupgateways migrations.
`php artisan adupgateway:migrate-reset Stripe`

## adupgateway:seed
Seed the given adupgateway, or without an argument, seed all adupgateways

`php artisan adupgateway:seed Stripe`

## adupgateway:publish-migration

Publish the migration files for the given adupgateway, or without an argument publish all adupgateways migrations.

php artisan adupgateway:publish-migration Stripe

## adupgateway:publish-config
Publish the given adupgateway configuration files, or without an argument publish all adupgateways configuration files.

`php artisan adupgateway:publish-config Stripe`

## adupgateway:publish-translation
Publish the translation files for the given adupgateway, or without a specified adupgateway publish all adupgateways migrations.

`php artisan adupgateway:publish-translation Stripe`

 ## adupgateway:enable
Enable the given adupgateway.

`php artisan adupgateway:enable Stripe`

## adupgateway:disable
Disable the given adupgateway.

`php artisan adupgateway:disable Stripe`

## adupgateway:update
Update the given adupgateway.

`php artisan adupgateway:update Stripe`

# Generator commands

## adupgateway:make-command
Generate the given console command for the specified adupgateway.

`php artisan adupgateway:make-command CreatePostCommand Stripe`

## adupgateway:make-migration
Generate a migration for specified adupgateway.

`php artisan adupgateway:make-migration create_posts_table Stripe`

## adupgateway:make-seed
Generate the given seed name for the specified adupgateway.

`php artisan adupgateway:make-seed seed_fake_Stripe_posts Stripe`

## adupgateway:make-controller
Generate a controller for the specified adupgateway.

`php artisan adupgateway:make-controller PostsController Stripe`

## adupgateway:make-model
Generate the given model for the specified adupgateway.

`php artisan adupgateway:make-model Post Stripe`

### Optional options:

`--fillable=field1,field2:` set the fillable fields on the generated model

`--migration, -m:` create the migration file for the given model

## adupgateway:make-provider

Generate the given service provider name for the specified adupgateway.

`php artisan adupgateway:make-provider StripeServiceProvider Stripe`

## adupgateway:make-middleware
Generate the given middleware name for the specified adupgateway.

`php artisan adupgateway:make-middleware CanReadPostsMiddleware Stripe`

## adupgateway:make-mail
Generate the given mail class for the specified adupgateway.

`php artisan adupgateway:make-mail SendWeeklyPostsEmail Stripe`

## adupgateway:make-notification
Generate the given notification class name for the specified adupgateway.

`php artisan adupgateway:make-notification NotifyAdminOfNewComment Stripe`

## adupgateway:make-listener
Generate the given listener for the specified adupgateway. Optionally you can specify which event class it should listen to. It also accepts a --queued flag allowed queued event listeners.

`php artisan adupgateway:make-listener NotifyUsersOfANewPost Stripe`
`php artisan adupgateway:make-listener NotifyUsersOfANewPost Stripe --event=PostWasCreated`
`php artisan adupgateway:make-listener NotifyUsersOfANewPost Stripe --event=PostWasCreated --queued`

## adupgateway:make-request
Generate the given request for the specified adupgateway.

`php artisan adupgateway:make-request CreatePostRequest Stripe`

## adupgateway:make-event
Generate the given event for the specified adupgateway.

`php artisan adupgateway:make-event StripePostWasUpdated Stripe`

## adupgateway:make-job
Generate the given job for the specified adupgateway.

`php artisan adupgateway:make-job JobName Stripe`

`php artisan adupgateway:make-job JobName Stripe --sync # A synchronous job class`

## adupgateway:route-provider
Generate the given route service provider for the specified adupgateway.

`php artisan adupgateway:route-provider Stripe`

## adupgateway:make-factory
Generate the given database factory for the specified adupgateway.

`php artisan adupgateway:make-factory FactoryName Stripe`

## adupgateway:make-policy
Generate the given policy class for the specified adupgateway.

The Policies is not generated by default when creating a new adupgateway. Change the value of paths.generator.policies in adupgateways.php to your desired location.

`php artisan adupgateway:make-policy PolicyName Stripe`

## adupgateway:make-rule
Generate the given validation rule class for the specified adupgateway.

The Rules folder is not generated by default when creating a new adupgateway. Change the value of paths.generator.rules in adupgateways.php to your desired location.

`php artisan adupgateway:make-rule ValidationRule Stripe`
`adupgateway:make-resource`

Generate the given resource class for the specified adupgateway. It can have an optional --collection argument to generate a resource collection.

The Transformers folder is not generated by default when creating a new adupgateway. Change the value of paths.generator.resource in adupgateways.php to your desired location.

`php artisan adupgateway:make-resource PostResource Stripe`
`php artisan adupgateway:make-resource PostResource Stripe --collection`

## adupgateway:make-test
Generate the given test class for the specified adupgateway.

`php artisan adupgateway:make-test EloquentPostRepositoryTest Stripe`


# Facade Methods

Get all psp modules.

`Module::all();`

Get all cached modules.

`Module::getCached()`

Get ordered modules. The modules will be ordered by the priority key in module.json file.

`Module::getOrdered();`

Get scanned modules.

`Module::scan();`

Find a specific module.

`Module::find('name');`


Find a module, if there is one, return the Module instance, otherwise throw Nwidart\Modules\Exeptions\ModuleNotFoundException.

`Module::findOrFail('module-name');`

Get scanned paths.

`Module::getScanPaths();`

Get all modules as a collection instance.

`Module::toCollection();`

Get modules by the status. 1 for active and 0 for inactive.

`Module::getByStatus(1);`

Check the specified module. If it exists, will return true, otherwise false.

`Module::has('blog');`

Get all enabled modules.

`Module::enabled();`

Get all disabled modules.

`Module::disabled();`

Get count of all modules.

`Module::count();`

Get module path.

`Module::getPath();`

Register the modules.

`Module::register();`

Boot all available modules.

`Module::boot();`

Get all enabled modules as collection instance.

`Module::collections();`

Get module path from the specified module.

`Module::getModulePath('name');`

Get assets path from the specified module.

`Module::assetPath('name');`

Get config value from this package.

`Module::config('composer.vendor');`

Get used storage path.

`Module::getUsedStoragePath();`

Get used module for cli session.

`Module::getUsedNow();`

`Module::getUsed();`

Set used module for cli session.

`Module::setUsed('name');`

Get modules's assets path.

`Module::getAssetsPath();`

Get asset url from specific module.

`Module::asset('blog:img/logo.img');`

Install the specified module by given module name.

`Module::install('nwidart/hello');`

Update dependencies for the specified module.

`Module::update('hello');`
Add a macro to the module repository.




