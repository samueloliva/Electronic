FROM php:7.4-cli
COPY ./src /usr/src/electronicapp
WORKDIR /usr/src/electronicapp
CMD ["php", "./Scenario.php"]