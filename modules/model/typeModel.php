<?php
    class type extends db {
        public $result;
        public function __construct() {
            $SQL = "SELECT * From type";
            $this->result = parent::querySQL($SQL);
        }
    }