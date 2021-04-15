<?php

namespace Imones;

class Validation {
    static public function newCompany($formData) {
        $klaidos = [];

        if(empty($formData['name'])) {
            $klaidos['name'] = "Uzpildykite pavadinima";
        }
        else if(strlen($formData['name']) < 3) {
            $klaidos['name'] = "Pavadinimas negali buti trumpesnis nei 3 charakteriai";
        }
        if(empty($formData['code'])) {
            $klaidos['code'] = "Uzpildykite imones koda";
        }
        if(empty($formData['pvm_code'])) {
            $klaidos['pvm_code'] = "Uzpildykite pvm koda";
        }
        if(empty($formData['address'])) {
            $klaidos['address'] = "Uzpildykite adresa";
        }
        if(empty($formData['phone'])) {
            $klaidos['phone'] = "Uzpildykite tel. nr";
        } else {
            $sanitized_phone = filter_var($formData['phone'], FILTER_SANITIZE_NUMBER_INT);
            if(strlen($sanitized_phone) < 9 || strlen($sanitized_phone) > 12) {
                $klaidos['phone'] = "Telefonas turi buti tinkamas";
            }
        }
        if(empty($formData['email'])) {
            $klaidos['email'] = "Prasome uzpildyti el. pasta";
        }
        if(empty($formData['email'])) {
            $klaidos['email'] = "Uzpildykite el. pasta";
        }
        else if(!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)){
            $klaidos['email'] = "El. pastas turi buti tinkamas";
        }

        if(empty($formData['activity'])) {
            $klaidos['activity'] = "Uzpildykite veiklos tipa";
        }
        if(empty($formData['owner'])) {
            $klaidos['owner'] = "Uzpildykite savininka";
        }

        if(!empty($klaidos)) {
            return $klaidos;
        }

        return 'Klaidu nerasta';
    }
}