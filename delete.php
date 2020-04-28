<?php
            //Delete record function
            function deleteRecord(){
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
                $id = $_POST["delete-ID"];

                //Attempting to INSERT Data into our table
                $sql = "DELETE FROM movieflix_table WHERE id='$id'";
                
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
            if(isset($_POST["delete-button"])){
                deleteRecord();
            }
        
        ?>