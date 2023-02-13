#Baixa servidor nginx configurado com php
FROM wyveo/nginx-php-fpm:latest

#copiar arquivos laravel para dentro do server nginx
COPY . /usr/share/nginx/html

#Muda o arquivo de configuração do nginx para funcionar com a porta 80 e o index do laravel
COPY nginx.conf /etc/nginx/conf.d/default.conf

#Não é necessario, serve para fazer com que a pasta raiz do ssh seja a pasta de arquivos laravel
WORKDIR /usr/share/nginx/html 

#Redireciona quem acessa a porta html para a pasta public do laravel
RUN ln -s public html

#Adiciona a habilidade de usar comandos linux
RUN apt update

#Instala o nano para poder editar arquivos dentro do container
RUN apt install nano -y

#Expondo porta padrão nginx
EXPOSE 80