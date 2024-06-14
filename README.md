# User CRUD (Laravel & InertiaJs with Vue)

## Overview

I built this project for learning purpose, i grabbed some basics on how to use inertiajs with laravel.
This project contains user management CRUD.

## Prerequisites

Software needed on your system before running this project:

-   php 8.2.0
-   composer 2.5.0
-   node v18.0.0

## Installation

Follow these steps to set up a development environment:

1. **Clone the repository**

    ```bash
    git clone https://github.com/JaiveerChavda/build-modern-laravel-app-using-inertiajs.git
    ```

2. **Install dependencies**

    ```bash
    composer install
    ```

3. **Duplicate the .env.example file and rename it to .env**

    ```bash
    cp .env.example .env
    ```

4. **Generate the application key**

    ```bash
    php artisan key:generate
    ```

5. **Run migration and seed**

    ```bash
    php artisan migrate --seed
    ```

6. **Install client side Dependencies**

    ```bash
    npm install
    ```

7. **Run Development Server**

    ```bash
    npm run dev
    ```

    You're done with the installation part.

## Running the project

start the laravel server:

```bash
php artisan serve
```

now open your preferred browser and enter the url on which you laravel server is running
In this case it's [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Authentication Credentials

Only authenticated users are allowed, so here are the credentials (with admin previlages):

email : admin@example.com

password : password
