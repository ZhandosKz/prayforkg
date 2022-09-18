FROM nginx:latest

RUN apt-get update
RUN apt-get install -y iputils-ping

COPY ./conf.d /etc/nginx/conf.d
COPY ./utils/init.sh /usr/local/bin

RUN chmod u+x /usr/local/bin/init.sh

CMD init.sh; nginx -g 'daemon off;'
