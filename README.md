# Run Koala Framework Application inside Docker

## Usage

    docker-compose run --rm build composer install
    docker-compose run --rm build build
    docker exec -i dockertest_db_1 mysql --password=kwf kwf < dump.sql
    docker-compose run php-cli clear-cache
    docker-compose up

## Environment Variables

  - `KWF_LINGOHUB_APITOKEN`
