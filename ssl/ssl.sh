#!/bin/bash

openssl req -newkey rsa:2048 -new -nodes -x509 -days 365 -keyout /etc/ssl/private/apache-selfsigned.key -out /etc/ssl/certs/apache-selfsigned.crt -subj "/C=PL/ST=Pomerania/L=Gdansk/O=PG/OU=./CN=." > /dev/null 2>&1

rm -rf /etc/apache2/sites-available/000-default.conf

cp /ssl/000-default.conf /etc/apache2/sites-available/000-default.conf

a2enmod ssl > /dev/null 2>&1

if [[ $(apache2ctl configtest 2>&1) == "Syntax OK" ]]
then
    service apache2 reload > /dev/null 2>&1
else
    exit 1
fi