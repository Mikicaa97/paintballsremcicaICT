<?php

    session_start();
    include "../config/connection.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["email"]) && isset($_POST["password"]))
        {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $email_message = "";
            $password_message = "";

            $email_error = false;
            $password_error = false;

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
                            $row = mysqli_fetch_assoc($query_select_users_result);
                            $email_db = $row["email"];

                            if($email_db == $email)
                            {
                                $email_message = "";
                                $email_error = true;
                            }
                            else
                            {
                                $email_message = "Neispravan email!";    
                            }
                        }
                        else
                        {
                            $email_message = "Korisnik ne postoji!";
                        }
                    }
                }
            }

            echo $email_message;
            echo "~";

            if(empty($password))
            {
                $password_message = "Password je obavezan!";
            }
            else
            {
                if(strlen($password) <= 4)
                {
                    $password_message = "Password mora imati najmanje 5 karaktera!";
                }
                else
                {
                    $numbers = [1,2,3,4,5,6,7,8,9];
                    $counter_numbers = 0;

                    for($i=0; $i<9; $i++)
                    {
                        $number = in_array($password, $numbers);
                        
                        if($number == -1)
                        {
                            $counter_numbers += 1;
                        }
                        else
                        {
                            $counter_numbers -= 1;
                        }
                    }    
                    
                    if($counter_numbers == 9)
                    {
                        $password_message = "Password mora sadržati makar jedan broj bez nule!";
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
                                $row = mysqli_fetch_assoc($query_select_users_result);
                                $password_db = $row["password"];

                                if($password_db == $password)
                                {
                                    $password_message = "";
                                    $password_error = true;
                                }
                                else
                                {
                                    $password_message = "Neispravan password!";
                                }
                            }
                            else
                            {
                                $password_message = "Korisnik ne postoji!";
                            }
                        }
                    }
                }
            }

            echo $password_message;
            echo "~";

            if($email_error == true && $password_error == true)
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

                echo "Uspešno ste se prijavili";
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