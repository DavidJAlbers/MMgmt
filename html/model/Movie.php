<?php

class Movie {

    public $id = 0;

    public $title = '';

    public $producer = '';

    public $price = 0.00;

    function __construct($id, $title, $producer, $price) {
        $this->id = $id;
        $this->title = $title;
        $this->producer = $producer;
        $this->price = $price;
    }

}