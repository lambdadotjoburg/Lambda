<?php

    class PictureController extends PictureViewer {

        public $users_uid;

        public $file;

        public function ProcessPicture($file, $users_uid) {

            $this->file = $file;
            $this->users_uid = $users_uid;

            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileTmpName = $file['tmp_name'];
            $fileError = $file['error'];
            $fileSize = $file['size'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png', 'gif', 'svg');

            if (in_array($fileActualExt, $allowed)) {

                // Error Handling

                if ($fileError === 0) {

                    // Continue Processing Picture

                    if ($fileSize < 500000000) {

                        // Continue Processing Picture

                        $fileNameNew = uniqid('', true).".".$fileActualExt;

                        $this->setPicture($this->users_uid, $fileNameNew, $fileTmpName);

                    } else {

                        echo "<script> location.href='../profile.php?user=" . $users_uid . "?error=size'; </script>";
                        exit();

                    }

                } else {

                    echo "<script> location.href='../profile.php?user=" . $users_uid . "?error=file'; </script>";
                    exit();

                }                

            } else {

                echo "<script> location.href='../profile.php?user=" . $users_uid . "?error=extension'; </script>";
                exit();

            }

        }

    }

?>