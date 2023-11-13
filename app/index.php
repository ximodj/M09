<?php

use framework\App;

$tasks = App::get('database')->selectAll('tasks');

$greeting ="Hello world";

require '../resources/views/index.blade.php';


