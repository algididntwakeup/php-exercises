<?php
if (isset($_POST['submit'])) { //ketika submit
    if($_POST['username'] == '');{

        echo 'gada username we';
    }
} else { //bagian ketika tida submit

}
?>

<html>
    <head>
        <title>
            Latihan Form Login
        </title>
            <style>
                input{
                    padding: 5px;
                    font-size: 24px;
                    display: inline-block;
                }
                form{
                    margin-top: 250px;
                    text-align: center;
                }
                label{
                    font-size: 24px;
                }
            </style>
    </head>
    <body>
        <form name="form_login" method="post" ">
            <h1>Login Form</h1>
            <label>Username</label>
            <input type="text" name="username"> <br>
            <label>Password</label>
            <input type="password" name="password"> <br>
            <input type="submit" name="submit">
        </form>
    </body>
    </html>