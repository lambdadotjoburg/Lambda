<?php

    session_start();

    if (isset($_SESSION['useruid'])) {

        $_SESSION['useruid'];

    }

?>

<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='./assets/css/style.vacancies.css'>
        
        <title>Vacancies</title>

    </head>

    <body>

    <div class="heading">
            <h1>Vacancies</h1>
        </div>

        <div class="menu">

            <?php

                // php code to fetch database information for each job and display here using a loop

            ?>
        
            <div class="tie">

                <button type="button" class="collapsible"> <span> Mathematics Curriculum Developer </span> <span class="plus"> + </span></button>

                <div class="content">

                    <p>Title: Mathematics Curriculum Developer</p>
                    <p>Description: We are looking for a creative mathematics curriculum developer to join our team</p>
                    <p>Requirements: M.Sc. Mathematics</p>
                    <p>Salary: R 50 000/month</p>
                    <p>Benefits: Pension Fund, Medical Aid</p>
                    <a href="job_application.php?role=mathematics_curriculum_developer">Apply</a>
                    
                    <br>
                    <br>
                    
                    <?php

                        // This code should only be visible to website administrator
                        
                        ?>

                            <form method="post" action="includes/remove_vacancy.inc.php">

                                <button href="includes/remove_vacancy.inc.php?role=mathematics_curriculum_developer">Remove</button>
                                <input type="hidden" name="name_of_role_taken_from_database">

                            </form>

                        <?php

                    ?>

                </div>

            </div>
            
            <div class="tie">

                <button type="button" class="collapsible"> <span> Marketing Specialist </span> <span class="plus"> + </span> </button>

                <div class="content">

                    <p>Title: Marketing Specialist</p>
                    <p>Description: We are looking for a creative marketing specialist to join our team</p>
                    <p>Requirements: B.Com</p>
                    <p>Salary: R 35 000/month</p>
                    <p>Benefits: Pension Fund, Medical Aid</p>
                    <a href="job_application.php?role=marketing_specialist">Apply</a>

                    <br>
                    <br>
                    
                    <?php

                        // This code should only be visible to website administrator

                        ?>

                            <form method="post" action="includes/remove_vacancy.inc.php">

                                <button href="includes/remove_vacancy.inc.php?role=marketing_specialist">Remove</button>
                                <input type="hidden" name="name_of_role_taken_from_database">

                            </form>

                        <?php

                    ?>

                </div>

            </div>
            
            <div class="tie">

                <button type="button" class="collapsible"> <span> Data Scientist </span> <span class="plus"> + </span> </button>
                
                <div class="content">

                    <p>Title: Data Scietist</p>
                    <p>Description: We are looking for a creative data scientist to join our team</p>
                    <p>Requirements: M.Sc. Computer Science</p>
                    <p>Salary: R 60 000/month</p>
                    <p>Benefits: Pension Fund, Medical Aid</p>
                    <a href="job_application.php?role=data_scientist">Apply</a>

                    <br>
                    <br>
                    
                    <?php

                        // This code should only be visible to website administrator

                        ?>

                            <form method="post" action="includes/remove_vacancy.inc.php">

                                <button href="includes/remove_vacancy.inc.php?role=data_scientist">Remove</button>
                                <input type="hidden" name="name_of_role_taken_from_database">

                            </form>

                        <?php

                    ?>
                    
                </div>
                
            </div>

            <?php

                // The div below is visible only to the website administrator who may add a new role to the database using this input form

            ?>

            <div class="tie">

                <button type="button" class="collapsible"> <span> Add New Role </span> <span class="plus"> + </span> </button>

                <div class="content">

                    <form method="post" action="includes/add_vacancy.inc.php">

                        <input type="textarea" placeholder="Title" required />
                        <br>
                        <br>
                        <input type="textarea" placeholder="Description" required />
                        <br>
                        <br>
                        <input type="text" placeholder="Requirements" required />
                        <br>
                        <br>
                        <input type="text" placeholder="Salary (Monthly)" required />
                        <br>
                        <br>
                        <input type="text" placeholder="Benefits" required />
                        <br>
                        <br>
                        <input type="submit" name="submit" required />

                    </form>

                </div>

            </div>

        </div>

    </body>

    <script src="./assets/js/script.vacancies.js"></script>

</html>