<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');



$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/kontoHinzufuegen'] = array('controller' => 'KontoHinzufController', 'uniqueName' => 'kontoHinzufuegen');

$route['/billForm'] = array('controller' => 'BillFormController', 'uniqueName' => 'billForm');



$route['/registrieren'] = array('controller' => 'RegistrierenController', 'uniqueName' => 'logout');


