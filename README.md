## Getting Started

### Dependencies

- Composer
- PHP >= 8.1
- MySQL
- Node.js & npm

Clone the repository

    git clone https://github.com/njmani007/SIMPLE-CRUD.git

Switch to the repo folder

    cd SIMPLE-CRUD

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Configure database in .env

    DB_CONNECTION=mysql
    DB_DATABASE=simple_crud
    DB_USERNAME=root
    DB_PASSWORD=

Generate hyper link from storage folder to public folder

    php artisan storage:link

Install node dependencies

    npm install
    npm run build

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh

Start the local development server

    compoer run dev

You can now access the server at http://localhost:8000
