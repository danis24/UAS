<?php

require_once('../../app/controllers/UserController.php');

//initialize Class to Object
$user = new UserController();
echo $user->index();
