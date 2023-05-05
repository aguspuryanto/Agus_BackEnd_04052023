## Agus_BackEnd_04052023
<p>Dibuat untuk Programmer Test</p>

## Setup

Buka `.env` dan ubah sesuai kebutuhan. Misalnya

CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080/'

database.default.database = ci4_test

database.default.username = root

database.default.password = asdf

## Run Server
```bash
$php spark migrate
$php spark db:seed
$php spark serve
```

Kemudian buka browser anda (Tab baru) lalu ketikkan -> localhost:8080

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
