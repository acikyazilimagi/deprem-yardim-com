## To support the project

[Türkçe](README.md)

Communications:

-   [Discord Channel](https://discord.com/invite/itdepremyardim)

---

To Contribute:

-   [Contributing](CONTRIBUTING_ENG.md)

---

## Technologies and Systems Used In This Project

-   [Laravel 9](https://laravel.com/)
-   [MySQL 10](https://www.mysql.com/)
-   [aws Amazon](https://aws.amazon.com/)
-   [Docker](https://www.docker.com/)

---

## To Begin

#### 1. Install the required environment: You need to install the necessary tools such as Laravel, PHP and database (e.g. MySQL).

#### 2. Clone the project: You need to clone the Laravel project repositories on GitHub.

```bash
git clone https://github.com/acikkaynak/deprem-yardim-com.git
```

#### 3. Install dependencies: Use the following command to install the dependencies required for the installation of the project:

```bash
composer install
```

#### 4. Make configuration settings: You can make the configuration settings required for the Laravel project via the .env file. Define important information such as database, email and API keys here.

#### 5. Generate key: Use the following command to generate the security key for the Laravel project:

```bash
php artisan key:generate
```

#### 6. Configure the database: Use the following command to configure the database for the Laravel project:

```bash
php artisan migrate
```

#### 7. Start the server: Use the following command to start the Laravel project:

```bash
php artisan serve
```

You can open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser and see the result...

# To run with Docker

Update the `.env` file with the following:

```bash
DB_HOST=mysql
DB_CONNECTION=mysql
DB_USERNAME=sail
DB_PASSWORD=password

REDIS_HOST=redis
```

Run the following command:

```bash
./vendor/bin/sail up -d
```

Run the following command to create the database and add sample data:

```bash
./vendor/bin/sail artisan migrate --seed
```

You can open [http://localhost](http://localhost) in your browser and see the result...

---

### API Usage:

The keys needed by the teams entering data are sent to the team leads by us.
