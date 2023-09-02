# Manual de Docker

Este manual irá orientar você através dos passos para gerar uma imagem docker, atribuir uma tag e publicar a imagem no Docker Hub.

## Pré-requisitos

- Docker instalado em sua máquina
- Conta no Docker Hub
- Estar logado na sua conta do Docker Hub via terminal usando o comando `docker login`.

## Passo-a-Passo

### 1. Gerar a Imagem Docker

Use o seguinte comando para construir sua imagem Docker. Isso deve ser executado no diretório que contém seu Dockerfile.

```bash
sudo docker build -t my-php .
```
Isso criará uma imagem chamada 'my-php' a partir do Dockerfile presente no diretório atual.

Para executar sua imagem Docker recém-criada, use o seguinte comando:

```bash
sudo docker run -p 80:80 my-php 

# Iterativo
sudo docker run -p 8080:80 -it my-php

# Desatachado
sudo docker run -p 8080:80 -d my-php

# Listar as imagens em execução (containers).
sudo docker ps 

#Listar as imagens tambem paradas, mas que já foram containerizadas. 
sudo docker ps -a 


```

O comando acima indica ao Docker para mapear a porta 80 do seu container para a porta 80 do seu host.

### 2. Adicionar uma Tag à Imagem Docker

Para atribuir uma tag à sua imagem Docker, utilize o comando `docker tag`. Substitua `<seu-username-dockerhub>` pelo seu nome de usuário no Docker Hub e `<tagname>` pela tag que você deseja usar.

```bash
sudo docker tag my-php:latest <seu-username-dockerhub>/my-php:<tagname>
# Rodamos esta em aula: 
sudo docker tag my-php:latest xadrak/my-php 

```
Isso marcará a imagem 'my-php' com a tag especificada.

### 3. Publicar a Imagem no Docker Hub

Uma vez que sua imagem está marcada, você pode publicá-la no Docker Hub usando o comando `docker push`.

```bash
sudo docker push <seu-username-dockerhub>/my-php:<tagname>
# Rodamos esta em aula
sudo docker push xadrak/my-php:latest 
```
Este comando irá publicar a imagem 'my-php' com a tag especificada no Docker Hub.

Espero que este manual seja útil para você!

Lembre-se, sempre substitua `<seu-username-dockerhub>` e `<tagname>` pelos seus valores reais ao seguir este manual.
