<?php
/*
  Construindo segurança em aplicações [Básico]  - Controlando dados de entrada e saída
  Date: 23/09/2014
  Author: Ana Correia
  Mail: anacorreia.dev@gmail.com
*/

/*Function Filter validate - Números inteiros*/
$value = 111;
$var   = filter_var($value, FILTER_VALIDATE_INT);

/*Function Filter validate - Email*/
$value = "mail@gmail.com";
$var   = filter_var($value, FILTER_VALIDATE_EMAIL);

/*Function Filter validate - Número inteiro com array min e max*/
$value = 15;
$var   = filter_var($value, FILTER_VALIDATE_INT, ['option'=>'min_range'=> 10, 'max_range'=>20]);

/*
Outros Filtros de validação que podem ser implementados
FILTER_VALIDATE_IP
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_REGEXP
FILTER_VALIDATE_URL
...
*/

/* Function Filter de higienização para string*/
$value = "Olá <b>Mundo</b>";
$var   = filter_var($value, FILTER_SANITIZE_STRING);

/*
Outros Filtros de higienização que podem ser implementados
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_NUMBER_FLOAT
...
*/

/*Filtro Input*/
$qr = filter_input(INPUT_GET, 'string', FILTER_SANITIZE_SPECIAL_CHARS);

/*
INPUT_GET
INPUT_POST
INPUT_COOKIE
INPUT_ENV
INPUT_SERVER
...
 */

/*
Módulo básico para iniciantes de segurança PHP. Você também pode utilizar Bibliotecas já desenvolvidas:
Repósitorio: https://github.com/Respect/Validation 
Composer efetuar install
*/

