<?php
// Default values, if the user does not enter values
$location = "Antarctica";
$number = 10;
$animal = "penguin";
$verb1 = "sled";
$verb2 = "snow wrestle";
$adjective1 = "active";
$adjective2 = "tranquil";
$noun = "bird farm";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>mad libs. - results</title>
        <link rel="stylesheet" type="text/css" href="madlibs-app.css">
    </head>
    
    <body style="background:url('photos/polka-dots.jpg')">
        <main>
            <header>
                <h1 id="faded">Mad Libs</h1>
                <p id="faded">funky story time.</p>
            </header>

            <section>
                <section id="story-section">
                    <h2>The story of a family</h2>
                    <p id="story">
                        <?php

                        // If the user entered values, set the variables above to the user's values
                        if ($_POST['location'] != null) {
                            $location = $_POST['location'];
                            $location = ucwords($location); // Capitalize location
                        }
                        if ($_POST['number'] != null) {
                            $number = $_POST['number'];
                        }
                        if ($_POST['animal'] != null) {
                            $animal = $_POST['animal'];
                        }
                        if ($_POST['verb1'] != null) {
                            $verb1 = $_POST['verb1'];
                        }
                        if ($_POST['verb2'] != null) {
                            $verb2 = $_POST['verb2'];
                        }
                        if ($_POST['adjective1'] != null) {
                            $adjective1 = $_POST['adjective1'];
                        }
                        if ($_POST['adjective2'] != null) {
                            $adjective2 = $_POST['adjective2'];
                        }
                        if ($_POST['noun'] != null) {
                            $noun = $_POST['noun'];
                        }

                        // Display story
                        echo "There resides a family in $location with $number children and a pet $animal.
                            Every Saturday, the family likes to $verb1 and $verb2 to keep their lives $adjective1.
                            As a result, this bothers the family's neighbor and their $adjective2 $noun. The end.";

                        ?>
                    </p>
                </section>
                
                <p id="return-to-home"><a href="madlibs-app.html">make another story</a></p>.
            </section>

        </main>
        
        <footer>
            <p id="footer">copyright sabah siddique 2017.</p>
        </footer>
        
    </body>
</html>