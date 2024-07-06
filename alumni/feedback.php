<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    
    $to = 'kirtanmangukiya32@gmail.com';
    $subject = 'Alumni Website Feedback';
    $message = "Name: $name\n\nEmail: $email\n\nFeedback: $feedback";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo '<p class="success-message">Thank you for your feedback!</p>';
    } else {
        echo '<p class="error-message">Sorry, there was an error sending your feedback. Please try again later.</p>';
    }
}
?>
<style>
    .feedback-form {
    display: flex;
    flex-direction: column;
    max-width: 600px;
    margin: 0 auto;
}

.feedback-form label {
    margin-top: 1rem;
}

.feedback-form input[type="text"],
.feedback-form input[type="email"],
.feedback-form textarea {
    padding: 0.5rem;
    border-radius: 4px;
    border: 1px solid #ccc;
    font-size: 1rem;
    margin-top: 0.5rem;
}

.feedback-form textarea {
    resize: vertical;
}

.feedback-form button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 0.5rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 1rem;
    font-size: 1rem;
}

.feedback-form button[type="submit"]:hover {
    background-color: #3e8e41;
}
.success-message {
    background-color: #DFF2BF;
    border: 1px solid #B2D2B2;
    color: #4F8A10;
    margin: 1em 0;
    padding: 1em;
}

.error-message {
    background-color: #FFBABA;
    border: 1px solid #D8000C;
    color: #D8000C;
    margin: 1em 0;
    padding: 1em;
}
</style>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="feedback-form" style="color:white ">
    <br><br><br><br>
    <h2>Feedback Form</h2>
    <br>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    
    <label for="feedback">Feedback:</label>
    <textarea name="feedback" id="feedback" rows="5" required></textarea>
    <br>
    <button type="submit">Submit</button>
    <br><br>
</form>