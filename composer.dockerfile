FROM composer:2

ENV COMPOSERGROUP=users
ENV COMPOSERUSER=Kaneki

RUN adduser -g ${COMPOSERGROUP} -s /bin/sh -D ${COMPOSERUSER}