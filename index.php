<?php
$title = "Главная";
require_once 'header.php';

// Маршруты
// [маршрут => функция которая будет вызвана]
$routes = [
    // срабатывает при вызове корня или /index.php

    // срабатывает при вызове /about или /index.php/about
   //'/news/' => 'about',
    // динамические страницы
    '/\/admin/m' => 'admin',
    '/lk_admin/m' => 'lk_admin',
    '/\/exit/m' => 'leave',
    '/\/edit/m' => 'edit',
    '//' => 'main'
];

// возвращает путь запроса
// вырезает index.php из пути
function getRequestPath() {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    return '/' . ltrim(str_replace('index.php', '', $path), '/');
}

// наш роутер, в который передаются маршруты и запрашиваемый путь
// возвращает функцию если маршшрут совпал с путем
// иначе возвращает функцию notFound
function getMethod(array $routes, $path) {
    // перебор всех маршрутов
    foreach ($routes as $route => $method) {
        // если маршрут сопадает с путем, возвращаем функцию
        if( preg_match($route, $path, $match)>0)
       // if ($path === $route) {
            return $method;

    }

    return 'notFound';
}
function admin(){
    return "login.php";
}

function edit($path){
    return "edit.php";
}
// функция для корня
function main($path) {
    return 'main.php';
}

// функция для страницы "/about"
function lk_admin($path) {
    return 'lik.php';
}

function leave($path) {
    return 'exit.php';
}
// чуть более сложный пример
// функция отобразит страницу только если
// в запросе приходит id и этот id равен
// 33 или 54
// [/page?id=33]
function news($path) {
  if(  preg_match('/news\/[а-яА-ЯёЁa-zA-Z0-9]+/', $path, $matches)>0)
  {
  $_GET['post']=str_replace('/news/','',$path);
      return "news.php";
  }
  else return "main.php";
}



// метод, который отдает заголовок и содержание для маршрутов,
// которые не существуют
function notFound($path) {
    header("HTTP/1.0 404 Not Found");

    return 'page404.php';
}


// Роутер
// получаем путь запроса
$path = getRequestPath();
// получаем функцию обработчик
$method = getMethod($routes, $path);
// отдаем данные клиенту
//echo $_SERVER["DOCUMENT_ROOT"].'/'. $method($path);
require_once $_SERVER["DOCUMENT_ROOT"].'/'. $method($path);
