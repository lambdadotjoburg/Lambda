<?php

    if (isset($_GET['role'])) {

        $jobtitle = $_GET['role'];

    } else {

        header('location: vacancies.php');
        exit();

    }

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Job Application </title>

    </head>

    <body>

        <?php
        
            // All job applications lead to this page where the relevant form is presented to the applicant

        ?>

        <h1>Job Application</h1>

        <hr>

        <form method="post" action="./includes/job_application.inc.php" enctype="multipart/form-data">

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
            <b>Education:</b>
            
            <br>
            <br>

            <input type="text" id="qualification_1" name="qualification_1" placeholder="Qualification" required />
            <input type="text" id="institution_1" name="institution_1" placeholder="Institution" required />
            <input type="text" id="major_1" name="major_1" placeholder="Major" required />
            
            &nbsp;
            &nbsp;

            <label for="year_completed_1"> Year Completed </label>

            &nbsp;
            &nbsp;

            <input type="date" id="year_completed_1" name="year_completed_1" required />

            <br>
            <br>

            <input type="text" id="qualification_2" name="qualification_2" placeholder="Qualification" />
            <input type="text" id="institution_2" name="institution_2" placeholder="Institution" />
            <input type="text" id="major_2" name="major_2" placeholder="Major" />
            
            &nbsp;
            &nbsp;

            <label for="year_completed_2"> Year Completed </label>

            &nbsp;
            &nbsp;

            <input type="date" id="year_completed_2" name="year_completed_2" />

            <br>
            <br>

            <input type="text" id="qualification_3" name="qualification_3" placeholder="Qualification" />
            <input type="text" id="institution_3" name="institution_3" placeholder="Institution" />
            <input type="text" id="major_3" name="major_3" placeholder="Major" />
            
            &nbsp;
            &nbsp;

            <label for="year_completed_3"> Year Completed </label>

            &nbsp;
            &nbsp;

            <input type="date" id="year_completed_3" name="year_completed_3" />

            <br>
            <br>

            <hr>

            <br>
            
            <!-- Work Experience ---------------->
            <b>Work Experience:</b>
            
            <br>
            <br>

            <input type="text" id="employer_1" name="employer_1" placeholder="Employer" required />
            <input type="text" id="reference_1" name="reference_1" placeholder="Reference" required />
            <input type="tel" id="contact_1" name="contact_1" placeholder="Mobile" required />
            
            &nbsp;
            &nbsp;

            <label for="resignation_date_1"> Resignation Date </label>

            &nbsp;
            &nbsp;

            <input type="date" id="resignation_date_1" name="resignation_date_1" required />

            <br>
            <br>

            <input type="text" id="employer_2" name="employer_2" placeholder="Employer" />
            <input type="text" id="reference_2" name="reference_2" placeholder="Reference" />
            <input type="tel" id="contact_2" name="contact_2" placeholder="Mobile" />
            
            &nbsp;
            &nbsp;

            <label for="resignation_date_2"> Resignation Date </label>

            &nbsp;
            &nbsp;

            <input type="date" id="resignation_date_2" name="resignation_date_2" />
            
            <br>
            <br>

            <input type="text" id="employer_3" name="employer_3" placeholder="Employer" />
            <input type="text" id="reference_3" name="reference_3" placeholder="Reference" />
            <input type="tel" id="contact_3" name="contact_3" placeholder="Mobile" />
            
            &nbsp;
            &nbsp;

            <label for="resignation_date_3"> Resignation Date </label>

            &nbsp;
            &nbsp;

            <input type="date" id="resignation_date_3" name="resignation_date_3" />

            <br>
            <br>

            <hr>
            
            <br>

            <!-- Motivation ---------------->
            <b>Motivation:</b>
            
            <br>
            <br>

            <textarea id="motivation" name="motivation" placeholder="Motivation" style="width: 500px; height: 200px; max-width: 500px; max-height: 200px;" required></textarea>
            
            <br>
            <br>
            <br>

            <label for="cv"> Curriculum Vitae </label>

            &nbsp;
            &nbsp;
            &nbsp;            

            <input type="file" id="cv" name="cv" required />

            <br>
            <br>

            <label for="cover_letter"> Cover Letter </label>

            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;

            <input type="file" id="cover_letter" name="cover_letter" required />

            <br>
            <br>

            <hr>
            
            <br>

            <!-- Motivation ---------------->
            <b>Consent:</b>
            
            <br>
            <br>

            <label for="criminal_record">Do you have a criminal record?</label>

            &nbsp;
            &nbsp;
            &nbsp;

            <select name="criminal_record" id="criminal_record" required>

                <option value="" selected> - Select - </option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
                
            </select>

            <br>
            <br>

            <label for="consent">Consent for background checks:</label>

            &nbsp;
            &nbsp;

            <input id="consent" type="checkbox" required />

            <br>
            <br>
            <br>

            <!-- submit -->
            <input type="submit">

            <br>
            <br>

        </form>
        
    </body>

</html>