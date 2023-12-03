<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="CSS/main.css" />
    </head>
    <body>
        <header>
            <img src="images/logo3.gif" alt="Welcome..." height="100" width="200"><hr>
            <h1>Login - for Management Reports</h1>
        </header>
        <main>
            <div id="frm">
            <form action="Reporting.php" method="POST">
                <p>
                <label>Username:</label>
                <input type="text" id="user" name="user"><br>
                </p>
                <p>
                <label>Password:</label>
                <input type="password" id ="pass" name="pass"><br>
                </p>
                <p>
                <label>&nbsp;</label>
                <input type="submit" id="btn" value="Login">
                </p>
            </form>
            </div>
            <p><a href="dashboard.php">Back to main page</a></p>
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>
