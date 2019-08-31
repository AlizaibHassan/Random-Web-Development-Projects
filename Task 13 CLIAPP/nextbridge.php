#! /user/bin/env php

<?php
 
use Acme\NewCommand;
use Symfony\Component\Console\Application;


require 'vendor/autoload.php';


$app = new Application('Laracast DEMO','1.0');

$app->add(new NewCommand(new GuzzleHttp\Client));

$app->run();