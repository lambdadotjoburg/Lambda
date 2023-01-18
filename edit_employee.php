<?php

    session_start();

    if (isset($_SESSION['useruid'])) {

        // Check if user is granted administrative privildges, in which case the manage employees link will be available to them

    }

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Add/Edit Employee </title>

    </head>

    <body>

        <?php
        
            // All job applications lead to this page where the relevant form is presented to the applicant

        ?>

        <h1>Add/Edit Employee</h1>


        <form method="post" action="includes/add_employee.inc.php" enctype="multipart/form-data">

            <hr>

            <!-- Identity ----------------->
            
            <br>
            
            <b>Full Name:</b>
            
            <br>
            <br>

            <input type="text" id="first_name" name="first_name" placeholder="First Name" required />
            <input type="text" id="middle_name" name="middle_name" placeholder="Middle Name" required />
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" required />

            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;

            <label for="birth_date"> Birth Date: </label>

            &nbsp;
            &nbsp;

            <input type="date" id="birth_date" name="birth_date" required />

            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;

            <label for="picture"> Picture: </label>
            &nbsp;
            &nbsp;
            <!-- <img src='assets/images/team/default/defaultImage.png' alt='profile image' class="profile-img"> -->
            <input type="file" id="picture" name="picture" class="picture" required />
            
            <br>
            <br>

            <hr>
            <br>

            <!-- Address --------------------->
            <b>Current Address:</b>
            
            <br>
            <br>
            
            <input type="number" id="house_number" name="house_number" min="1" placeholder="House Number" required/>
            <input type="text" id="street_name" name="street_name" placeholder="Street Name" required/>
            
            <br>
            <br>

            <input type="text" id="suburb" name="suburb" placeholder="Suburb" required/>
            <input type="text" id="province" name="province" placeholder="Province" required/>
                
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

            <input type="email" id="personal_email" name="personal_email" placeholder="Personal Email" required />

            <br>
            <br>

            <input type="number" id="id_number" name="id_number" placeholder="ID Number" required />

            <br>
            <br>
            
            <hr>
            
            <br>

            <!-- Education ---------------->
            <b>Education:</b>

            <br>
            <br>

            <input type="text" id="highest_qualification" name="highest_qualification" placeholder="Highest Qualification" required />
            
            <br>
            <br>

            <input type="text" id="institution" name="institution" placeholder="Institution" required />

            <br>
            <br>

            <input type="date" id="year_completed" name="year_completed" placeholder="Year Completed" required />

            <br>
            <br>
            
            <hr>
            
            <br>

            <!-- Work Information ---------------->
            <b>Work Information:</b>

            <br>
            <br>

            <input type="email" id="work_email" name="work_email" placeholder="Work Email" required />

            <br>
            <br>
            
            <label for="start_time">Start Time:</label> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <label for="end_time">End Time:</label>
            
            <br>
            <br>
            
            <input type="time" id="start_time" name="start_time" style="width: 118px;" required /> &nbsp; - &nbsp; <input type="time" id="end_time" name="end_time" style="width: 118px;" required /> 

            <br>
            <br>

            <label for="start_date">Start Date:</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <label for="end_date">End Date:</label> &nbsp; &nbsp; 
            
            <br>
            <br>

            <input type="date" id="start_date" name="start_date" required /> &nbsp; - &nbsp; <input type="date" id="end_date" name="end_date" required />

            <br>
            <br>

            <hr>

            <br>

            <!-- Banking Details ---------------->
            <b>Banking Details:</b>

            <br>
            <br>

            <input type="number" id="taxation_number" name="taxation_number" placeholder="Taxation Number" required />

            <br>
            <br>

            <input type="text" id="bank_name" name="bank_name" placeholder="Bank Name" required />

            <br>
            <br>

            <input type="text" id="account_holder" name="account_holder" placeholder="Account Holder" required />
            
            <br>
            <br>

            <input type="number" id="account_number" name="account_number" placeholder="Account Number" required />

            <br>
            <br>

            <input type="text" id="account_type" name="account_type" placeholder="Account Type" required />

            <br>
            <br>

            <input type="number" id="branch_code" name="branch_code" placeholder="Branch Code" required />

            <br>
            <br>

            <hr>

            <br>

            <!-- submit -->
            <button type="submit"> Save </button> &nbsp; &nbsp; <a type="submit" style="border: 0.5px solid black; border-radius: 3px; text-decoration: none; padding: 2px; border-color: #000000; font-size: 14px;"> Delete </a>

            <br>
            <br>

        </form>
        
    </body>

</html>