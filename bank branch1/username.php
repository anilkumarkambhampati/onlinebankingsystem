<?php
$con=new mysqli("localhost","root","","bank");
session_start();
$acno=$_SESSION['acnumber'];

$user=$con->query("select username from customers where acnumber=$acno");
$user=$user->fetch_assoc();
$user=$user['username'];

echo "<html>
<head>
    <link href='styling.css' rel='stylesheet'>
    <style>
.container7
{
    background-color: rgb(255, 230, 0);
    height: fit-content;
    width: fit-content;
    border-radius: 20px;
}

</style>
</head>
<body>
    <form action='username1.php' method='post'>
    <center>
        <br><br>
        <h1><u><b>Change username</b></u></h1><br>

        <div class='container7'>
            <table>
                <tr>
                    <th>Current username:</th>
                    <td>$user</td>
                </tr>
                <tr>
                    <th>New username:</th>
                    <td>
                        <input type='text' name='user' id='user' required>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' align='center'>
                            <input type='submit'  class='button' value='Update'>
                    </td>
                </tr>
            </table>
        </div>
    </center>
    </form>
</body>
</html>";

$con->close();

?>