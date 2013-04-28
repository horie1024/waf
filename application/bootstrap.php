<?php

require 'core/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerDir(dirname(__FLE__).'/core');
$loader->registerDir(dirname(__FLE__).'/models');
$loader->register();