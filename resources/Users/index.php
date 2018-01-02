<?php

require_once('../../app/controllers/UserController.php');

//initialize Class to Object
$user = new UserController();

//get add data
echo $user->index();

//get one data by id
echo $user->read(1);

//add Data
$data = array(
    'first_name' => 'Danis',
    'last_name' => 'Yogaswara',
    'username' => 'danis24',
    'email' => 'suckhack24@gmail.com'
);
echo $user->add($data);

//update data
$data1 = array(
    'first_name' => 'Danis',
    'last_name' => 'Yogaswara',
    'username' => 'danis24',
    'email' => 'suckhack24@gmail.com'
);
echo $user->update($data1);

//delete Data
echo $user->delete(1);
