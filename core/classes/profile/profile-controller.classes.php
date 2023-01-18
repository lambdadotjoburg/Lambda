<?php

    // Profile Controller
    // controller class extends to viewer (since viewerclass extends to model calss) class to store input provided by user
    class ProfileController extends ProfileViewer {

        // Properties
        private $users_uid, $email, $name, $surname, $mobile, $id_number, $date_of_birth;

        // Methods
        public function setProfile($users_uid, $email,  $name, $surname, $mobile, $id_number, $date_of_birth) {

            $this->users_uid = $users_uid;
            $this->email = $email;
            $this->name = $name;
            $this->surname = $surname;
            $this->mobile = $mobile;
            $this->id_number = $id_number;
            $this->date_of_birth = $date_of_birth;

            if ($this->emptyInput() == false) {

                header("location: ../profile.php?user=" . $this->users_uid . "?error=profile?input=empty");
                exit();

            }

            if ($this->checkMobile() == false) {

                header("location: ../profile.php?user=" . $this->users_uid . "?error=profile?mobile=format");
                exit();

            }

            if ($this->checkID() == false) {

                header("location: ../profile.php?user=" . $this->users_uid . "?error=profile?idnumber=format");
                exit();

            }

            $this->setUser($this->users_uid, $this->email, $this->name, $this->surname, $this->mobile, $this->id_number, $this->date_of_birth);

        }

        // Signup error handling
        public function emptyInput() {

            $result;

            if (empty($this->users_uid) || empty($this->email) || empty($this->name) || empty($this->surname) || empty($this->mobile) || empty($this->id_number) || empty($this->date_of_birth)) {
                
                $result = false;

            } else {

                $result= true;

            }

            return $result;

        }

        public function checkMobile() {

            $result;

            if (!preg_match("/^[+]?[1-9][0-9]{9,14}$/", $this->mobile)) {
                
                $result = false;

            } else {

                $result= true;

            }

            return $result;

        }
        
        public function checkID() {

            $result;

            if (!preg_match("/^[0-9]{13}$/", $this->id_number)) {
                
                $result = false;

            } else {

                $result= true;

            }

            return $result;

        }

    }

?>