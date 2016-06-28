# Run Koala Framework Application inside Docker

## Usage

    docker-compose run --rm build composer install
    docker-compose up
    docker exec -i dockertest_db_1 mysql --password=kwf kwf < dump.sql
    docker-compose run --rm build clear-cache
    docker-compose run --rm build build
    docker-compose run --rm php-cli clear-cache

## config.local.ini

    [production]
    database.web.host = db
    database.web.dbname = kwf
    database.web.user = kwf
    database.web.password = kwf
    server.memcache.host = memcached
    server.redirectToDomain = false
    server.domain = localhost:8080
    kwc.domains.at.domain = localhost:8080
    uploads = ./uploads
    debug.error.log = false

## Environment Variables

  - `KWF_LINGOHUB_APITOKEN`
