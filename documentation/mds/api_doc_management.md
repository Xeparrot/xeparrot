# AdUp.io API Document Update

### 1) Open repo folder then open 
    
        adupio-v3-shopper-api -> documentation -> source

### 2) Install Ruby 

   We recommaned version is ruby 2.6
   you can download [(use this link)](https://rubyinstaller.org/)
   
### 3) Setup Local 

    cd slate
    bundle install
    bundle exec middleman server
   
   if running ok, you will get a success message:
   
    == The Middleman is loading
    == View your site at "http://MFSs-MacBook-Pro.local:4567", "http://127.0.0.1:4567"
    == Inspect your site configuration at "http://MFSs-MacBook-Pro.local:4567/__middleman", "http://127.0.0.1:4567/__middleman"

   
if you got an error, you can check which module should have to install with the right version by open Gemfile.


    ruby '>=2.3.1'
    source 'https://rubygems.org'
    # Middleman
    gem 'middleman', '~>4.2.1'
    gem 'middleman-syntax', '~> 3.0.0'
    gem 'middleman-autoprefixer', '~> 2.7.0'
    gem "middleman-sprockets", "~> 4.1.0"
    gem 'rouge', '~> 2.0.5'
    gem 'redcarpet', '~> 3.4.0'
    gem 'nokogiri', '~> 1.6.8.1'

if you got an error about bundler version, check version for bundler using bundler -v . For example, i got an error because of bundler version is too high 1.2 and should downgrade by install version 1.1

    sudo gem install bundler -v '~>1.1'

when you run bundle exec middleman server and got an error about module nokogiri, you can install manually and change Gemfile based on your installed version

    sudo gem install nokogiri -- --use-system-libraries

after installing you should change Gemfile, because its not the same version


### 3) Deployment
    
Run this Shell script function

        adupio-v3-shopper-api -> documentation -> source -> deploy.sh

