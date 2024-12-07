<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    
    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Email settings
        $to = "your-email@example.com"; // Replace with your email address
        $subject = "Contact Us Message from: $name";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        // Email body content
        $emailContent = "<html>
                            <body>
                                <h2>Message from: $name</h2>
                                <p><strong>Email:</strong> $email</p>
                                <p><strong>Message:</strong></p>
                                <p>$message</p>
                            </body>
                        </html>";

        // Send the email
        if (mail($to, $subject, $emailContent, $headers)) {
            echo "Your message has been sent successfully!";
        } else {
            echo "Sorry, something went wrong. Please try again.";
        }
    }
} else {
    // Redirect to the contact page if the form is not submitted via POST
    header("Location: contact.html");
    exit();
}
?>
