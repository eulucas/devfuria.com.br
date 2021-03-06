<?php


#
# on/off debug: Forçar mostrar erros
#
ini_set('display_errors', 'on');
ini_set('track_errors', 'on');
ini_set('html_errors', 'on');
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);


#
# dependências
#
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . "/our-autoload.php";


#
# timezone padrão
#
date_default_timezone_set("America/Sao_Paulo");


#
# Session
#
session_start();

#
# site
#
$site = new \oop\Site();
$site->title  = "devfuria";
$site->author = "Flávio Micheletti";

#
# slim
#

$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails'    => true,
]];

$slim = new \Slim\App($config);

$container = $slim->getContainer();



#
# path
#
$site->path = new oop\Path;
$site->path->base     = dirname(__DIR__);
$site->path->app      = $site->path->base . "/app";
$site->path->logs     = $site->path->app . "/logs";
$site->path->includes = $site->path->app . "/templates/includes";
$site->path->layouts  = $site->path->app . "/templates/layouts";
$site->path->api      = dirname($site->path->base) . "/devfuria.subs/api";
$site->path->pagseg   = dirname($site->path->base) . "/devfuria.subs/pagseguro";
// var_dump($site->path); die();

// if(file_exists($site->path->api)) {
//     die('ok');
// }

#
# url
#
$site->url = new oop\Url();

# substitue `base_url()`
$site->url->base        = $container->get('request')->getUri()->getBasePath();
$site->url->mailinglist = "/app/mailing-list/";
// var_dump($site->url); die();




// #
// # usado principalmente para criar um namespace para os logs
// #
// if (isset($_SERVER["SERVER_ADDR"])) {
//     // pega o ip como nome da Site
//     $site->name = $_SERVER["SERVER_ADDR"];
// } else {
//     // nos testes cai aqui
//     $site->name = 'sem-nome';
// }
// //var_dump($site->name); die();



#
# ligar
#
$site->enable_analytics = false;
$site->enable_disqus    = false;


#
# email que receberão notificações
#
$site->emails = ["sitedevfuria@gmail.com"];




// Register component on container
$container['view'] = function ($container) {

    #
    # local dos templates, debug ativado
    #
    $view = new \Slim\Views\Twig($path_to_templates = "app/templates", ['debug' => true]);

    #
    # base_url()
    #
    $site = $GLOBALS['site'];
    $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $site->url->base));

    #
    # home_url
    #
    $view->getEnvironment()->addGlobal("home_url",  $site->url->get_home());
    // var_dump($site->url->get_home()); die();

    #
    # session
    #
    $view->getEnvironment()->addGlobal("session",  $_SESSION);

    #
    # habilitar debug com dump()
    #
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

