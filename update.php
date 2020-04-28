<?php
            //Update record function
            function updateRecord(){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $databasename = "movieflix_database";

                //Creating a connection to database
                $connection = mysqli_connect($servername, $username, $password, $databasename);

                //Check if connection was successful or not
                if(!$connection){
                    die ("Connection unsuccessful: ".mysqli_connect_error());
                }else{
                    echo "";
                }

                //Storing user input into variables
                $id = $_POST["update-ID"];
                $movietitle = $_POST["update-title"];
                $moviegenre = $_POST["update-genre"];
                $moviedirector = $_POST["update-director"];

                //Attempting to INSERT Data into our table
                $sql = "UPDATE movieflix_table SET title='$movietitle',genre='$moviegenre', director='$moviedirector' WHERE id='$id'";

                //Check if inserting data was successful
                if(mysqli_query($connection, $sql)){
                    echo "";
                }else{
                    echo "Error: ".$sql.mysqli_error($connection);
                }

                //Close connection
                mysqli_close($connection);

                //Re-directing the user back to the main page index.php
                header("location: index.php");

            }
            if(isset($_POST["update-button"])){
                updateRecord();
            }
        
        ?>