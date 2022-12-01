FROM php:7.2-cli

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

RUN apt update
RUN apt install unzip
