<?php
session_start();
    include "../config/connection.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["first-name"]) && isset($_POST["last-name"]) && isset($_POST["email"]))
        {
            $first_name = $_POST["first-name"];
            $last_name = $_POST["last-name"];
            $email = $_POST["email"];

            $f_name_message = "";
            $l_name_message = "";
            $email_message = "";

            $f_name_error = false;
            $l_name_error = false;
            $email_error = false;

            if(empty($first_name))
            {
                $f_name_message = "Ime je obavezno!";
            }
            else
            {
                if(!preg_match("/^[a-zA-Z-' ]*$/", $first_name))
                {
                    $f_name_message = "Samo su slova i razmaci dozvoljeni!";
                }
                else
                {
                    $f_name_message = "";
                    $f_name_error = true;
                }
            }

            echo $f_name_message;
            echo "~";

            if(empty($last_name))
            {
                $l_name_message = "Prezime je obavezno!";
            }
            else
            {
                if(!preg_match("/^[a-zA-Z-' ]/", $last_name))
                {
                    $l_name_message = "Samo su slova i razmaci dozvoljeni!";
                }
                else
                {
                    $l_name_message = "";
                    $l_name_error = true;
                }
            }

            echo $l_name_message;
            echo "~";

            if(empty($email))
            {
                $email_message = "Email je obavezan!";
            }
            else
            {
                if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    $email_message = "Neispravan email format!";
                }
                else
                {
                    $query_select_users = "SELECT * FROM users WHERE email = '$email'";
                    $query_select_users_result = mysqli_query($connection, $query_select_users);
                    
                    if(!$query_select_users_result)
                    {
                        die("Query failed: " . mysqli_connect_error($connection));
                    }
                    else
                    {   
                        $counter_rows = mysqli_num_rows($query_select_users_result);

                        if($counter_rows > 0)
                        {
                            $email_message = "Korisnik sa ovim mejlom već postoji!";
                        }
                        else
                        {
                            $email_message = "";
                            $email_error = true;
                        }
                    }
                }
            }

            echo $email_message;
            echo "~";

            

            if($f_name_error == true && $l_name_error == true && $email_error == true)
            {
                $query_insert_user = "INSERT INTO users(`name`, last_name, email, `status`) VALUES('$first_name', '$last_name', '$email', 'user')";
                $query_insert_user_result = mysqli_query($connection, $query_insert_user);

                if(!$query_insert_user_result)
                {
                    die("Query Failed: " . mysqli_connect_error($connection));
                }
                else
                {
                    $query_select_user = "SELECT * FROM users WHERE email = '$email'" ;
                    $query_select_user_result = mysqli_query($connection, $query_select_user);

                    if(!$query_select_user_result)
                    {
                        die("Query Failed: " . mysqli_connect_error($connection));
                    }
                    else
                    {
                        $row = mysqli_fetch_assoc($query_select_user_result);
                        $id_user = $row["id_users"];
                        $name = $row["name"];
                        $last_name = $row["last_name"];
                        $email = $row["email"];
                        $status = $row["status"];

                        $_SESSION["id-user"] = $id_user;
                        $_SESSION["first-name"] = $name;
                        $_SESSION["last-name"] = $last_name;
                        $_SESSION["email"] = $email;
                        $_SESSION["status"] = $status;
                    }
                }

                echo "Uspešno ste se registrovali";
                $bit = 1;
                echo "~";
                echo $bit;
            }
            else
            {
                echo "Jedno ili više polja imaju grešku. Molimo Vas proverite i pokušajte ponovo.";
                $bit = 0;
                echo "~";
                echo $bit;
            }
        }
    }
?>