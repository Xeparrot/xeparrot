## Introduction Adup.io Gateways

Adup.io Payment Gateways is a  which was created to your payment gateway. A gateway is like a MVC Structured, it has some views, controllers or models.

###Folder Structure

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
          
### Creating a Gateway 

Creating a gateway is simple and straightforward. Run the following command to create a gateway.

    php artisan adupgateway:make <gateway-name>
    
Replace `<gateway-name>` by your desired name.

It is also possible to create multiple modules in one command.

    php artisan adupgateway:make Stripe Payhere

By default when you create a new gateway, the command will add some resources like a controller, seed class, service provider, etc. automatically. If you don't want these, you can add `--plain` flag, to generate a plain gateway.



    php artisan adupgateway:make Stripe --plain
    # or
    php artisan adupgateway:make Stripe -p


### Custom namespaces
When you create a new gateway it also registers new custom namespace for Lang, View and Config. For example, if you create a new gateway named blog, it will also register new namespace/hint blog for that gateway. Then, you can use that namespace for calling Lang, View or Config. Following are some examples of its usage:
