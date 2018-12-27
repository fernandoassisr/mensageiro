FROM nginx:1.12.2

ENV TZ=America/Sao_Paulo
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

COPY nginx.conf /etc/nginx/nginx.conf

COPY virtual_server/location /etc/nginx/conf.d/location
COPY virtual_server/fastcgi.conf /etc/nginx/conf.d/fastcgi.conf
COPY virtual_server /etc/nginx/conf.d

EXPOSE 80