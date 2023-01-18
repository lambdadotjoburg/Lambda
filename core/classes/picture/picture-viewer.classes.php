<?php

    // Viewer class

    // gets data from database by extending to model class and returns to user

    class PictureViewer extends DbhModel {

        protected function setPicture($users_uid, $fileNameNew, $fileTmpName) {

            // Check if user already has a picture and delete it from directory

            $stmt = $this->connect()->prepare("SELECT * FROM Users WHERE users_uid = ?");

            if (!$stmt->execute(array($users_uid))) {
                
                $stmt = null;
                header("location: ../profile.php?user=" . $users_uid . "?upload=picture?error=select");
                exit();

            }

            $result = $stmt->fetchAll();

            $currentDirectory = $result[0]['users_picture'];

            unlink($currentDirectory);

            // Set new profile picture

            $newDirectory = "../assets/upload/pictures/profile/".$fileNameNew;

            $stmt = $this->connect()->prepare("UPDATE Users SET users_picture = ? WHERE users_uid = ?;");

            if (!$stmt->execute(array($newDirectory, $users_uid))) {
                
                $stmt = null;
                header("location: ../profile.php?user=" . $users_uid . "?upload=picture?error=update");
                exit();

            }

            // $this->removePicture($users_uid);

            move_uploaded_file($fileTmpName, $newDirectory);

        }

    }

?>