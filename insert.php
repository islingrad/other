<?php
            //Variables for connecting to your database.
            //These variable values come from your hosting account.
            $hostname = "osa1328303012376.db.11942441.hostedresource.com";
            $username = "osa1328303012376";
            $dbname = "osa1328303012376";

            //These variable values need to be changed by you before deploying
            $password = "your password";
            $usertable = "your_tablename";
            $yourfield = "your_field";
        
            //Connecting to your database
            mysql_connect($hostname, $username, $password) OR DIE ("Unable to 
            connect to database! Please try again later.");
            mysql_select_db($dbname);

            //Fetching from your database table.
            $query = "SELECT * FROM $usertable";
            $result = mysql_query($query);

            if ($result) {
                while($row = mysql_fetch_array($result)) {
                    $name = $row["$yourfield"];
                    echo "Name: $name<br>";
                }
            }
            ?>
            