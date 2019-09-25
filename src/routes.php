<?php
/**
 * Created by PhpStorm.
 * User: dario
 * Date: 25/09/19
 * Time: 11:14
 */
use \PlugRoute\PlugRoute;
use \PlugRoute\RouteContainer;
use \PlugRoute\Http\RequestCreator;

$route = new PlugRoute(new RouteContainer(), RequestCreator::create());

$route->get('/', 'Src\Controllers\LaborGuideCrawlerController@index');

$route->on();