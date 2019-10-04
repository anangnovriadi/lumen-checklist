# Lumen Checklist
This is a simple project Lumen App (API) which works with Laravel Passport (OAuth 2.0).

### Instalation
Clone this repository. Run the following commands :

```sh
$ cd lumen-checklist
$ cp .env.example .env
$ php artisan key:generate
```

Create your database and enter the details in your `.env` file. Now run the following commands :

```sh
$ php artisan migrate --seed
$ php artisan passport:install
```

### License

MIT License.