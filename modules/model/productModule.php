<?php
    class product extends db {
        public $result;
        public function __construct() {
            $SQL = "SELECT * From product";
            $this->result = parent::querySQL($SQL);
        }
    }