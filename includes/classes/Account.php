<?php
    class Account{
        private $connection;

        public function __construct($con)
        {
            $this->connection = $con;
        }
    }
