<?php

use Imones\Database;
use Imones\Company;
use Imones\Validation;

if(isset($_POST['send'])) {
    $connection = Database::connect();
    $companies = new Company($connection);
    $validation = Validation::newCompany($_POST);
    if($validation != 'Klaidu nerasta') {
        foreach ($validation as $klaida) {
            echo $klaida . '<br>';
        }
    } else {
        $companies->createCompany($_POST);
    }
} else {
    require 'view/pages/newCompany.view.php';
}