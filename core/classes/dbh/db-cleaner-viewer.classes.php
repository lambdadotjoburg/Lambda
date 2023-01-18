<?php

    // This class will be instatiated through a script which will run on a cronjob during least active website times to remove users who have not activated their account after a long period of time

    class DBCleanerViewer extends DbhModel {

        public function DBCleaner($currentDate) {            

            $stmt = $this->connect()->prepare("DELETE FROM users WHERE AccAct = ? AND pwdResetExpires >= ? ;");

            if (!$stmt->execute(array(0, $currentDate))) {
                
                $stmt = null;
                header("location: ../index.php?clean=failed?error=delete");
                exit();

            }

            if ($stmt->rowCount() == 0) {

                $stmt = null;
                header("location: ../index.php?clean=failed?error=count");
                exit();

            }

            $stmt = null;
            header("location: ../index.php?clean=complete?");
            exit();

        }

    }

?>