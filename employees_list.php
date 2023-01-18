<?php

    session_start();

    if (isset($_SESSION['useruid'])) {

        // Check if user is granted administrative privildges, in which case the page will be available to the user without any restrictions

    }

?>

<!DOCTYPE html>

<html lang="en" >

    <head>
        
        <meta charset="UTF-8">
    
        <title> Manage Employees </title>
        <link rel="stylesheet" href="./assets/css/style.manage_employees.css">

    </head>

    <body>

        <div class="middle">

            <h2> Add New Employee </h2>

        </div>

        <div class="middle">

            <a href="edit_employee.php?employee=new"> Add New Employee </a>
            
        </div>

        <div class="center">

            <table>                

                <thead>

                    <tr>
                        <th scope="col"style="width: 10%;">Name</th>
                        <th scope="col" style="width: 10%;">Surname</th>
                        <th scope="col" style="width: 10%;">Mobile</th>
                        <th scope="col" style="width: 25%;">Email</th>
                        <th scope="col" style="width: 20%;">Working Hours</th>
                        <th scope="col" style="text-align: right;">Edit</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td data-label="Name">Moss</td>
                        <td data-label="Surname">Marshal</td>
                        <td data-label="Mobile">0769111234</td>
                        <td data-label="Email">mosh@mathmonkey.joburg</td>
                        <td data-label="Hours"> <input type="time" /> - <input type="time"/> </td>
                        <td data-label="Edit" style="text-align: right;"><a href="edit_employee.php" style="border: 0.5px solid black; border-radius: 3px; text-decoration: none; padding: 2px; border-color: #000000; font-size: 14px;">Edit</a></td>
                    </tr>

                    <tr>
                        <td data-label="Name">Moss</td>
                        <td data-label="Surname">Marshal</td>
                        <td data-label="Mobile">0769111234</td>
                        <td data-label="Email">mosh@mathmonkey.joburg</td>
                        <td data-label="Hours"> <input type="time" /> - <input type="time"/> </td>
                        <td data-label="Edit" style="text-align: right;"><a href="edit_employee.php" style="border: 0.5px solid black; border-radius: 3px; text-decoration: none; padding: 2px; border-color: #000000; font-size: 14px;">Edit</a></td>
                    </tr>

                    <tr>
                        <td data-label="Name">Moss</td>
                        <td data-label="Surname">Marshal</td>
                        <td data-label="Mobile">0769111234</td>
                        <td data-label="Email">mosh@mathmonkey.joburg</td>
                        <td data-label="Hours"> <input type="time" /> - <input type="time"/> </td>
                        <td data-label="Edit" style="text-align: right;"><a href="edit_employee.php" style="border: 0.5px solid black; border-radius: 3px; text-decoration: none; padding: 2px; border-color: #000000; font-size: 14px;">Edit</a></td>
                    </tr>

                    <tr>
                        <td data-label="Name">Moss</td>
                        <td data-label="Surname">Marshal</td>
                        <td data-label="Mobile">0769111234</td>
                        <td data-label="Email">mosh@mathmonkey.joburg</td>
                        <td data-label="Hours"> <input type="time" /> - <input type="time"/> </td>
                        <td data-label="Edit" style="text-align: right;"><a href="edit_employee.php" style="border: 0.5px solid black; border-radius: 3px; text-decoration: none; padding: 2px; border-color: #000000; font-size: 14px;">Edit</a></td>
                    </tr>

                </tbody>

            </table>

        </div>

    </body>

</html>