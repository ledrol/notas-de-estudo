#!/bin/bash

echo "Atualizando o servidor..."
apt-get update
apt-get upgrade -y

echo "Instalando o apache..."
apt-get install apache2 -y

echo "Instalando o unzip..."
apt-get install unzip -y

cd /tmp

echo "Baixando o link..."
wget https://github.com/denilsonbonatti/linux-site-dio/archive/refs/heads/main.zip

echo "Descompactando o arquivo..."
unzip main.zip
cd linux-site-dio-main

echo "Copiando a aplicação no diretório padrão do apache..."
cp -R * /var/www/html/