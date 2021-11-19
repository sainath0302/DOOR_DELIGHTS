<?php

require('config.php');
session_start();

#for login
if(isset($_POST['login']))
{
    $query = "SELECT * FROM `registered_users` WHERE `email` = '$_POST[email_username]' OR `username` = '$_POST[email_username]'";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        if(mysqli_num_rows($result) == 1)
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'], $result_fetch['password']))
            {
                #if password matched
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['username'];
                header('location: index.php');
                


            }
            else
            {
                #if incorrect password
                echo "
                <script>alert('Incorrect Password');
                window.location.href = 'login.php';
                </script>
               ";
            }

        }
        else
        {
            echo "
            <script>alert('email or username not registered');
            window.location.href = 'login.php';
            </script>
           ";

        }


    }
    else
    {
        echo "
                <script>alert('Cannot run query');
                window.location.href = 'login.php';
                </script>
               ";

    }
}

#This is for regisstration
if(isset($_POST['register']))
{
    $user_exist = "SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($conn, $user_exist);

    if($result)
    {
        if(mysqli_num_rows($result) > 0)#it will be executed if username or email already taken
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['username'] == $_POST['username'])
            {
                #error for username registerd
                echo "
                <script>alert('$result_fetch[username] - Username already Taken');
                window.location.href = 'login.php';
                </script>
               ";

            }
            else
            {
                #Error for email registerd
                echo "
                <script>alert('$result_fetch[email] - email already Taken');
                window.location.href = 'login.php';
                </script>
               ";
            }

        }
        else #This will be executed if no one has taken username and email before
        {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $query = "INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[email]', '$password')";
            if(mysqli_query($conn, $query))
            {
                #if data inserted successfully
                echo "
                    <script>alert('Registration sucessfull');
                    window.location.href = 'login.php';
                    </script>
                ";

            }
            else
            {
                #if data cannot be insertred
                echo "
                    <script>alert('cannot run query');
                    window.location.href = 'login.php';
                    </script>
                ";

            }

        }

    }
    else
    {
        echo "
         <script>alert('cannot run query');
         window.location.href = 'login.php';
         </script>
        ";
    }
}
?>