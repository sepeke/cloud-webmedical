<?php

?>

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
            <nav>                          
                <a href="appointments_retrieve.php">Bookings Information</a><a>  |  </a>        
                <a href="bookings_form.php">Booking of clients</a><a>  |  </a>
                <a href="retrieve_invoice.php">Client Invoice</a><a>  |  </a>
                <a href="email_input.php">Send Email</a>
            </nav>
        </header>
        <main>
            <br>                       
            <p>Go To <a href="INDEX.php">Home</a></p>
            <h1>HCP <a href="management_login.php">Login</a> for Reports</h1>
            <br>
            <hr>
            <h3>CLIENT - Details</h3>
            <h1>Enter Client ID to check for Client Info.</h1>
            <form action="client_details.php" method="POST">
                <label>Client ID:</label>
                <input type="text" name="clientID"><br>
                
                <label>&nbsp;</label>
                <input type="submit" value="Search Details">
                
            </form>            
            <p class="alignment">
                <img align="middle" src="images/stetho.jpg" alt="centered image" height="500" width="250">
            </p>
        </main>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </body>
</html>
