Insatll laravel
=================
>>composer create-project --prefer-dist laravel/laravel project4
>>composer create-project --prefer-dist laravel/laravel="5.8.3" project4
=======================================================================
Run laravel
============
==in project folder
>>php artisan serve
=======================================================================
Setup database .env file
============================
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=project4
DB_USERNAME=project4
DB_PASSWORD=project4
=======================================================================
Make migration
===============
>>php artisan migrate
======================================================================= 
Create Migration Files database/migrations folder
==================================================
>>php artisan make:migration create_posts_table --create=posts
>>php artisan make:migration create_comments_table --create=comments
>>php artisan make:migration create_contacts_table --create=contacts
==========================================================================
Create Model Files  app folder
================================
>>php artisan make:model Post
>>php artisan make:model Comment
>>php artisan make:model Contact
==========================================================================
 Setup authentication
========================
laravel 5.8.x
===============
>> php artisan make:auth
==========================
laravel 7.x
===============
>>composer require laravel/ui
>>php artisan ui vue --auth
== install node.js(npm included) and run
>> npm install
>> npm run dev
=========================================================================== 
Create Controller Files app/Http/Controller Folder
====================================================
>>php artisan make:controller PostController  or
>>php artisan make:controller PostController --resource  or
>>php artisan make:controller PostController --resource --model=Post
========================================================================