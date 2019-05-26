<?php
    class Account {
        private $errorArray;

        public function __construct()
        {
            $this->errorArray = array();
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);
            if (empty($this->errorArray)) {
                // insert into db
                return true;
            } else {
                return false;
            }
        }

        private function validateUsername($un) {
            if (strlen($un) > 25 || strlen($un) < 5) {
                array_push($this->errorArray, "Your username length must between 5 - 25 characters.");
                return;
            }

            // todo: check if username exists
        }

        private function validateFirstName($fn) {
            if (strlen($fn) > 25 || strlen($fn) < 2) {
                array_push($this->errorArray, "Your first name length must between 2 - 25 characters.");
                return;
            }
        }

        private function validateLastName($ln) {
            if (strlen($ln) > 25 || strlen($ln) < 2) {
                array_push($this->errorArray, "Your last name length must between 2 - 25 characters.");
                return;
            }
        }

        private function validateEmails($em, $em2) {
            if ($em != $em2) {
                array_push($this->errorArray, "Email doesn't match.");
                return;
            }
            if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, "Email is invalid");
                return;
            }

            // todo check email is not being used

        }

        private function validatePasswords($pw, $pw2) {
            if ($pw != $pw2) {
                array_push($this->errorArray, "Password doesn't match.");
                return;
            }
            if (preg_match('/[^A-Za-z0-9]/', $pw)) {
                array_push($this->errorArray, "Your password can only contains numbers and characters.");
            }
            if (strlen($pw) > 30 || strlen($pw) < 5) {
                array_push($this->errorArray, "Your password length must between 5 - 30 characters.");
                return;
            }
        }
    }
?>