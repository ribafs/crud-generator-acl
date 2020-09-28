# Gerador de CRUDs para Laravel com suporte a ACL

## Instalar e configurar um aplicativo

## Instalar gerador
composer require ribafs/crud-generator-acl

## Publicar
    php artisan vendor:publish --provider="Ribafs\CrudGeneratorAcl\CrudGeneratorServiceProvider"

## Criar os CRUDs

Usar o nome do CRUD no plural e após a criação renomear o controller para o singular (seguindo a convenção do laravel)

### Na pasta raiz
```bash
php artisan crud-acl:generate Users --fields='name#string; email#string; password#string;' --view-path='' --controller-namespace=App\\Http\\Controllers --route-group='' --form-helper=html

php artisan crud-acl:generate Roles --fields='name#string; slug#string;' --view-path='' --controller-namespace=App\\Http\\Controllers --route-group='' --form-helper=html

php artisan crud-acl:generate Permissions --fields='name#string; slug#string;' --view-path='' --controller-namespace=App\\Http\\Controllers --route-group='' --form-helper=html

php artisan crud-acl:generate Clients --fields='name#string; email#string;' --view-path='' --controller-namespace=App\\Http\\Controllers --route-group='' --form-helper=html

php artisan crud-acl:generate Products --fields='name#string; price#decimal;' --view-path='' --controller-namespace=App\\Http\\Controllers --route-group='' --form-helper=html
```

### Na pasta admin
```bash
php artisan crud-acl:generate Clients --fields='name#string; email#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html
```
