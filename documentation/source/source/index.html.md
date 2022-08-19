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



## Engine Cores

## XEM - Xe Manager

Xe File manager convertable drang and drop file manager dialog
