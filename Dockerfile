FROM docker:stable

LABEL maintaner Fernando de Assis <fernando@email>

RUN apk add --no-cache bash
RUN apk add --no-cache git
