# Lumen PHP Framework Example App

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Este repositorio contém a aplicação base do Lumen para exemplo de como utilizar o [`FastpayClient`](https://github.com/Lennon95/FastpayClient/).
Basta simplesmente adicionar a dependência via Composer (recomenda-se o uso pelo Docker):
```
docker run --rm --interactive --tty \                                                                          [130]
--volume $PWD:/app \
composer require lennon95/fastpay-client
```
E utilizar tal como feito no [arquivo das rotas básicas](routes/web.php)

