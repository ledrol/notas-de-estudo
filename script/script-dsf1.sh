#!/bin/bash

echo "Criando diretórios:"
mkdir /publico
mkdir /adm
mkdir /ven
mkdir /sec

echo "Criando grupos:"
groupadd GRP_ADM
groupadd GRP_VEN
groupadd GRP_SEC

echo "criando e adicionando os usuários a seus grupos..."
useradd carlos -c "Usuário carlos" -s /bin/bash -m -p $(openssl passwd -crypt senha) -G GRP_ADM
useradd maria -c "Usuário maria" -s /bin/bash -m -p $(openssl passwd -crypt senha) -G GRP_ADM
useradd joao -c "Usuário joao" -s /bin/bash -m -p $(openssl passwd -crypt senha) -G GRP_ADM

useradd debora -c "Usuário debora" -s /bin/bash -m -p $(openssl passwd -crypt senha) -G GRP_VEN
useradd sebastiana -c "Usuário sebastiana" -s /bin/bash -m -p $(openssl passwd -crypt senha) -G GRP_VEN
useradd roberto -c "Usuário roberto" -s /bin/bash -m -p $(openssl passwd -crypt senha) -G GRP_VEN

useradd josefina -c "Usuário josefina" -s /bin/bash -m -p $(openssl passwd -crypt senha) -G GRP_SEC
useradd amanda -c "Usuário amanda" -s /bin/bash -m -p $(openssl passwd -crypt senha) -G GRP_SEC
useradd rogerio -c "Usuário rogerio" -s /bin/bash -m -p $(openssl passwd -crypt senha) -G GRP_SEC

echo "Criando permissões:"

chown root:GRP_ADM /adm
chown root:GRP_VEN /ven
chown root:GRP_SEC /sec

chmod 777 /publico
chmod 770 /adm
chmod 770 /ven
chmod 770 /sec

echo "Finalizado"
