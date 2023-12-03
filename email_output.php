<?php
        require_once 'message.php';
        
        // Copy form values to local variables
        $full_name = trim(filter_input(INPUT_POST, 'FullName'));
        $message = trim(filter_input(INPUT_POST, 'comment'));
        $email = trim(filter_input(INPUT_POST, 'Email'));

        // Set up email variables
        $to_address = $email;
        $to_name = $full_name;
        $from_address = 'sepekeg@gmail.com';
        $from_name = 'SG Ramaselela';
        $subject = 'Notice of payment';
        $body = $message;
        //$is_body_html = true;
        
        // Send email
                
        
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
            <h1>Client info</h1>
        </header>
        <main>
            <?php 
                try {
                    send_email($to_address, $to_name, 
                        $from_address, $from_name, 
                        $subject, $body);
                    echo "Email sent successfully";
                } catch (Exception $ex) {
                        $error = $ex->getMessage();
                        echo 'Email not Sent';
                }
            ?>
            <p><a href="client_data.php">Main Admin</a></p>
            <p><a href="index.php">Back to main page</a></p>
        </main>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </body>
</html>

