FROM php:apache

# Paketquellen aktualisieren und Git installieren
RUN apt-get update && apt-get upgrade -y && apt-get autoremove -y && apt-get install git -y

# Composer installieren
RUN curl -s https://getcomposer.org/installer | php