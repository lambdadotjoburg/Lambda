<?php

    session_start();

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Application </title>

    </head>
    
    <style>
    
    thead {
        text-align: left;
    }
    
    th {
        padding-bottom: 15px;
    }
    
    td {
        padding: 0 80px 15px 0;
    }
    
    </style>

    <body>
        
        <?php
        
            if (isset($_SESSION['useruid'])) {
    
                $_SESSION['useruid'];
                
                // Get application information
                // In case candidate has not competed
                
                ?>
                
                    <h1>Application</h1>
    
                    <hr>
            
                    <form method="post" action="./includes/apply.inc.php" enctype="multipart/form-data">
            
                        <!-- Name area ----------------->
                        <br>
                        
                        <b>Full Name:</b>
                        
                        <br>
                        <br>
            
                        <input type="text" id="first_name" name="first_name" placeholder="First Name" required />            
                        <input type="text" id="middle_name" name="middle_name" placeholder="Middle Name" required />
                        <input type="text" id="last_name" name="last_name" placeholder="Last Name" required />
            
                        &nbsp;
                        &nbsp;
                        
                        <!-- Birth-date area --------------->
                        <label for="birth_date"> Birth Date </label>
            
                        &nbsp;
                        &nbsp;
            
                        <input type="date" id="birth_date" name="birth_date" required />
                        
                        <br>
                        <br>
            
                        <hr>
                        <br>
            
                        <!-- Address --------------------->
                        <b>Current Address:</b>
                        
                        <br>
                        <br>
                        
                        <input type="number" id="house_number" name="house_number" min="1" placeholder="House Number" required />
                        <input type="text" id="street_name" name="street_name" placeholder="Street Name" required />
                        
                        <br>
                        <br>
            
                        <input type="text" id="suburb" name="suburb" placeholder="Suburb" required />
                        <input type="text" id="province" name="province" placeholder="Province" required />
                            
                        <br>
                        <br>
            
                        <input type="text" id="city" name="city" placeholder="City" required />
                        <input type="number" id="zip_code" name="zip_code" placeholder="Zip Code" required />
            
                        <br>
                        <br>
                        
                        <hr>
                        
                        <br>
            
                        <!-- Personal Details ---------------->
                        <b>Personal Information:</b>
            
                        <br>
                        <br>
            
                        <input type="tel" id="cell_number" name="cell_number" placeholder="Mobile" required />
                        
                        <br>
                        <br>
            
                        <input type="email" id="email" name="email" placeholder="Email" required />
            
                        <br>
                        <br>
            
                        <input type="number" id="id" name="id" placeholder="ID Number" required />
            
                        <br>
                        <br>
                        
                        <hr>
                        
                        <br>
            
                        <!-- Education -------------->
                        <b>Secondary Education:</b>
                        
                        <br>
                        <br>
            
                        <input type="text" id="high_school_name" name="high_school_name" placeholder="High School Name" required />
                        
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        
                        <input type="text" id="province" name="province" placeholder="Province" required />
                        
                        <br>
                        <br>
            
                        <label for="year_matriculated"> Year matriculated </label>
            
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
            
                        <input type="date" id="year_matriculated" name="year_matriculated" required />
                        
                        <br>
                        <br>
                        
                        <table>

                            <thead>
                              <tr>
                                <th>Subject</th>
                                <th>Percentage</th>
                              </tr>
                            </thead>
                          
                          <tr>
                            <td><input name="subject_1" type="text" placeholder="Subject 1" required/></td>
                            <td><input name="percentage_1" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                          <tr>
                            <td><input name="subject_2" type="text" placeholder="Subject 2" required/></td>
                            <td><input name="percentage_2" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                          <tr>
                            <td><input name="subject_3" type="text" placeholder="Subject 3" required/></td>
                            <td><input name="percentage_3" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                          <tr>
                            <td><input name="subject_4" type="text" placeholder="Subject 4" required/></td>
                            <td><input name="percentage_4" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                          <tr>
                            <td><input name="subject_5" type="text" placeholder="Subject 5" required/></td>
                            <td><input name="percentage_5" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                          <tr>
                            <td><input name="subject_6" type="text" placeholder="Subject 6" required/></td>
                            <td><input name="percentage_6" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                          <tr>
                            <td><input name="subject_7" type="text" placeholder="Subject 7" required/></td>
                            <td><input name="percentage_7" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                          <tr>
                            <td><input name="subject_8" type="text" placeholder="Subject 8"/></td>
                            <td><input name="percentage_8" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                          <tr>
                            <td><input name="subject_9" type="text" placeholder="Subject 9"/></td>
                            <td><input name="percentage_9" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                          <tr>
                            <td><input name="subject_10" type="text" placeholder="Subject 10"/></td>
                            <td><input name="percentage_10" type="number" style="width: 50px;" min="0" max="100"/></td>
                          </tr>
                          
                        </table>
            
                        <hr>
            
                        <br>
                        
                        <!-- Course -------------->
                        <b>Course</b>
                        
                        <br>
                        <br>
            
                        <label for="choice_first">First Choice</label>
                        
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        
                        <select name="choice_first" id="choice_first">
                            <option value="">- Select -</option>
                            <option value="bsc_mathematics">B.Sc. Mathematics</option>
                            <option value="bsc_physics">B.Sc. Physics</option>
                            <option value="bsc_chemistry">B.Sc. Chemistry</option>
                            <option value="bsc_information_technology">B.Sc. Information Technology</option>
                        </select>
                        
                        <br>
                        <br>
                        
                        <label for="choice_second">Second Choice</label>
                        
                        &nbsp;
                        &nbsp;
                        
                        <select name="choice_second" id="choice_second">
                            <option value="">- Select -</option>
                            <option value="bsc_mathematics">B.Sc. Mathematics</option>
                            <option value="bsc_physics">B.Sc. Physics</option>
                            <option value="bsc_chemistry">B.Sc. Chemistry</option>
                            <option value="bsc_information_technology">B.Sc. Information Technology</option>
                        </select>
                        
                        <br>
                        <br>
            
                        <hr>
                        
                        <br>
                        
                        <!-- Documents -------------->
                        <b>Documents</b>
                        
                        <br>
                        <br>
                        
                        <label for="matric_results">Matric Results</label>
                        
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        
                        <input name="matric_results" type="file" />
                        
                        <br>
                        <br>
                        
                        <label for="certified_d">Certified ID</label>
                        
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        
                        <input name="certified_id" type="file" />
                        
                        <br>
                        <br>
            
                        <hr>
            
                        <br>
            
                        <!-- submit -->
                        <input type="submit">
            
                        <br>
                        <br>
            
                    </form>
                
                <?php
    
            } else {
        
                echo "You must sign up with an account first";
        
            }
        
        ?>

       
        
    </body>

</html>