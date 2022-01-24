<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Oficina 2.0

Oficina 2.0 é uma aplicação web desenvolvida com o objetivo de auxiliar oficinas mecâniacas a armazenarem e visualizarem seus orçamentos. A aplicação foi desenvolvida na linguagem de programação PHP e utiliza o framework Laravel, além de contar com um banco de dados (mysql) para guardar todas as informações pertinentes aos orçamentos gerados. 

![tela1](https://user-images.githubusercontent.com/92327887/150830698-bff28078-4bb0-4bea-a32c-7f6fb6f8c837.png)




## Como instalar e configurar a aplicação:

- Instale o PHP através do link:

    https://www.php.net/downloads.php#v8.1.2

- Instale o servidor XAMP: 

    https://www.apachefriends.org/pt_br/download.html

- Instale o gerenciador de depenências "Composer":  

    https://getcomposer.org/

- Instale o Laravel:

    Com o composer instalado entre em um terminal do seu computador e digite o comando: composer global require "laravel/installer"

- Clone esse repositório dentro do diretório "htdocs" do XAMP:

    https://github.com/dan1elnog/oficina2.0.git

- Inicialize o Servidor:
    
    Abra  o XAMP e inicialize o Apache e Mysql:
    
    ![image](https://user-images.githubusercontent.com/92327887/150834386-9000c8d1-d1de-4ae3-b5ed-113c56d6a1e8.png)


    Selecione o diretório da aplicação em algum terminal do seu computador, e digite o comando "php artisan serve" 

    Deve aparecer uma saída semelhante a essa: 

![image](https://user-images.githubusercontent.com/92327887/150833262-ae1297de-66f5-48b3-b8c3-c9456785c03e.png)
    
  Entre no navegador de sua preferência e e digite: localhost:8000/budget. A saída deve ser exatamente essa: 
  
 ![image](https://user-images.githubusercontent.com/92327887/150834683-8e7afc62-3d20-4fdc-a73b-ae08db7eb43b.png)


## Navegando na Aplicação:

### Cadastro:
 Clicando em "cadastro" você será direcionado para a tela de cadastro, onde devem ser passadas as informações necessárias para o armazenamento no banco de dados. Vale lembrar que o preenchimento de todos os campos é obrigatório!
 
 ![image](https://user-images.githubusercontent.com/92327887/150835478-a5001bb0-0530-468f-9764-46e317f55d04.png)

## Visualização:

Clicando em "Ver" é possível visualizar os dados de um orçamento específico.

![image](https://user-images.githubusercontent.com/92327887/150835748-64f33ae1-6881-4781-8e71-b32368c7cd27.png)

## Edição:
É possível atualizar informações de um orçamento, basta clicar em editar e preencher os campos com os valores desejados.


## Deleção:
Para deletar um orçamento basta clicar em "deletar" e você será direcionado para uma página de confirmação, clique em voltar para sair da mesma e retornar a página inicial:

![image](https://user-images.githubusercontent.com/92327887/150836453-96d3990d-53ba-40a8-8e37-a8c35184319d.png)


## Informaçôes Extra:

A aplicação utiliza o bootstrap para estilização da página e o arquivo externo:"lucascudo/laravel-pt-br-localization": "^1.1" para traduzir as mensagens de erro.



