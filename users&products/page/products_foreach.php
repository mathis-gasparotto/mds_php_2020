<?php 
require_once "../data/products.php";

foreach ($products as $product) {
    foreach ($product as $prop => $value) {
        if(!is_array($value)) {
            echo $prop . " - " . $value . "<br />";
        }
    }
}