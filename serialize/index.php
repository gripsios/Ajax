<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serialize Form</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>

        $('#contactForm').submit(function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Serialize the form data
            // var formData = $(this).serialize();
            var formData = $(this).serializeArray();

            // AJAX request
            $.ajax({
                type: 'GET',
                url: "demo_test.php",
                data: formData,
                success: function(response) {
                    // Handle the successful response from the server
                    // console.log('Form submitted successfully:', response);
                    console.log('Form submitted successfully:', formData);
                },
                error: function(error) {
                    // Handle any errors that occur during the AJAX request
                    console.error('Error submitting form:', error);
                }
            });
        });

    </script>
</head>
<body>

    <h2>Contact Us</h2>

    <form id="contactForm" action="index.php" method="post">
    <!-- Text input -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <!-- Email input -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

    <!-- Password input -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <!-- Textarea for comments -->
    <label for="comments">Comments:</label>
    <textarea id="comments" name="comments" rows="4" cols="50"></textarea>

    <!-- Radio buttons -->
    <p>Gender:</p>
    <label><input type="radio" name="gender" value="male"> Male</label>
    <label><input type="radio" name="gender" value="female"> Female</label>
    <label><input type="radio" name="gender" value="other"> Other</label>

    <!-- Checkbox -->
    <p>Subscribe to newsletter:</p>
    <label><input type="checkbox" name="subscribe" value="yes"> Yes, subscribe me</label>

    <!-- Dropdown menu -->
    <label for="country">Country:</label>
    <select id="country" name="country">
        <option value="usa">United States</option>
        <option value="canada">Canada</option>
        <option value="uk">United Kingdom</option>
        <!-- Add more options as needed -->
    </select>

    <!-- Submit button -->
    <input type="submit" value="Submit">
    
</body>
</html>