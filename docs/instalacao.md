## Instalação

Siga os passos abaixo para a instalção correta. O modelo atualmente permite tanto a instalação de forma nativa no 
host, ou seja, sem usar qualquer containers ou virtualizadores EX:(Docker e Vagrant), como também permite a instalação 
usando o Docker ([mais informações sobre os Pré-requisitos](prerequisitos.md)).
Vamos tentar simplificar os dois metodos de instalação.

#### Usando o nosso queridinho Docker:
```
# clone o repositorio
$ git clone <link> <filepath>

# Entre no repositório criado e execute o comando para subir o container:
$ cd <filepath>
$ docker-compose up (Com este comando é possivel visualizar a instalação do composer e os TESTES.)

ou em modo background
 
$ docker-compose up -d 
# Caso haja alguma falha de portas nessa etapa, certifique de alterar as mesmas no arquivo docker-compose.yml

# Verifique se esta tudo ok http://localhost:8001/ Se tudo estiver ok, deverá aparecer a tela com as informações.
- http://localhost:8001/

#Rode os testes unitários
$ docker exec -it webserver-dario bash -c '/app/vendor/bin/phpunit /app/tests/'
```

#### Instalação no proprio host:

````
# clone o repositorio
$ git clone <link> <filepath>

# Entre no repositório criado:
$ cd <filepath>

# Instale as dependencias
$ composer install

# Usando o servidor do proprio PHP.
- php -S localhost:<port>
- Se preferir use o servidor nginx/apache

# Rode os testes unitários na raiz do projeto
$ vendor/bin/phpunit tests/
````
