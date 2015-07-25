<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Send email</title>
    </head>
    
    <body>
        <?php
        // Initialize variables
        $name = '';
        $email = '';
        $subject = '';
        $message = '';

        function validate_input($data) {
            $data = trim($data); // removes any extra whitespace
            $data = stripslashes($data); // removes backslash characters
            $data = htmlspecialchars($data); // escape special characters
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = validate_input($_POST["name"]);
            $email = validate_input($_POST["email"]);
            $subject = validate_input($_POST["subject"]);
            $message = validate_input($_POST["message"]);

            
          $emailsSent = fopen("emails/emailsSent.csv", "a") or exit("Unable to open file");
            $info = $name . "," . $email . "," . $subject . "," . $message . "\r\n";
            fwrite($emailsSent, $info);
            fclose($emailsSent);
        }
        ?>

        <p>Thanks, <?php echo $name; ?>!</p>
        <p>Your email has been sent!></p>
    </body>
</html>

