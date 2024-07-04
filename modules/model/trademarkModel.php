<?php
    class trademark extends db {
        public $result;
        public function __construct() {
            $SQL = "SELECT * From trademark";
            $this->result = parent::querySQL($SQL);
        }
    }