FROM php:7.4-cli
COPY . /usr/src/electronicapp
WORKDIR /usr/src/electronicapp
CMD ["php", "./Scenario.php"]