# Demo Project for PHP unit testing

## Build

Composer: `php composer.phar install`

## Test

Simpletest: `php test/alltests.php`

## Package

Docker: `docker build .`

## Running locally

Docker: `docker run -p 80:80 <id>`

## Addressing service locally

Browser: 

 * `http://localhost/index.php/hallo/{name}`
 * `http://localhost/index.php/welcome/{name}`
 * `http://localhost/index.php/sql/{name}`

### Deliberately non-working function

Browser: 

 * `http://localhost/index.php/goodbye/{name}`
