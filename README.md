# Run Koala Framework Application inside Docker

## Usage

    docker-compose run --rm build composer install
    docker-compose up
    docker exec -i dockertest_db_1 mysql --password=kwf kwf < dump.sql
    docker-compose run --rm build clear-cache
    docker-compose run --rm build build
    docker-compose run --rm php-cli clear-cache

## Environment Variables

  - `KWF_LINGOHUB_APITOKEN`
