<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Travel Website</title>
    <!-- custom css -->
     <link rel="stylesheet" href="style.css">
     <!-- font family link -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="bg.jpeg" alt="IIT Khargapur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip Form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
    </div>
    <form action="insert.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <input type="text" name="age" id="age" placeholder="Enter your age" required>
        <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
        <input type="text" name="email" id="email" placeholder="Enter your email" required>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required>
        <textarea name="desc" id="desc" cols="30" rows="8" placeholder="Enter any other information here" required></textarea>

        <button class="btn" name="SubmitBtn">Submit</button>
    </form>
</body>
</html>