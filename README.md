# Run Koala Framework Application inside Docker

## Usage

    docker-compose run --rm -e KWF_LINGOHUB_APITOKEN=$KWF_LINGOHUB_APITOKEN build composer install
    docker-compose run --rm -e KWF_LINGOHUB_APITOKEN=$KWF_LINGOHUB_APITOKEN build build
    docker exec -i dockertest_db_1 mysql --password=kwf kwf < dump.sql
    docker-compose run php-cli clear-cache
    docker-compose up
