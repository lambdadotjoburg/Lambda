<?php

    // Viewer class

    // controller class extends to viewer (since viewerclass extends to model calss) class to store input provided by user

    class ProfileViewer extends DbhModel {

        protected function getUser($users_uid, $email, $name, $surname, $mobile, $id_number, $date_of_birth) {

            $stmt = $this->connect()->prepare("SELECT * FROM Users WHERE users_uid = ?;");

            if (!$stmt->execute(array($uid))) {

                $stmt = null;
                header("location: ../profile.php?user=" . $users_uid . "?get=profile?error=select");
                exit();

            }

            if ($stmt->rowCount() == 0) {

                $stmt = null;
                header("location: ../profile.php?user=" . $users_uid . "?get=profile?error=none");
                exit();

            }

        }

        protected function getEverythingAllUsers() {
            
            $stmt = $this->connect()->prepare("SELECT * FROM Users");

            if (!$stmt->execute()) {
                
                $stmt = null;
                header("location: ../profile.php?user=" . $users_uid . "?get=profile?error=data");
                exit();

            }

            return $stmt->fetchAll();

        }

        protected function setUser($users_uid, $email, $name, $surname, $mobile, $id_number, $date_of_birth) {

            // Check if users_email and users_idnumber has already been taken before inserting new data into database

            $get = $this->getEverythingAllUsers();

            $resultEmail = $get[0]['users_email'];
            $resultIdNumber = $get[0]['users_idnumber'];

            // Prevent user from setting email or id to that of another user

            if ($resultEmail === $email || $resultIdNumber === $id_number) {

                $stmt = null;
                header("location: ../profile.php?user=".$users_uid."?set=profile?error=duplicate");
                exit();

            }

            // if all checks are passed, accept user details into database

            $stmt = $this->connect()->prepare("UPDATE Users SET users_email = ?, users_name = ?, users_surname = ?, users_mobile = ?, users_idnumber = ?, users_dob = ? WHERE users_uid = ?;");

            if (!$stmt->execute(array($email, $name, $surname, $mobile, $id_number, $date_of_birth, $users_uid))) {

                $stmt = null;
                header("location: ../profile.php?user=".$users_uid."?set=profile?error=update");
                exit();

            }

        }

    }

?>