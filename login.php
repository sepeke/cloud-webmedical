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
        </header>
        <main>
            <h1>Login for - Administrator or HCP (Health Care Practitioner)</h1>
            <div id="frm">
            <form action="dashboard.php" method="POST">
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
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>
