<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $skills = $_POST['skills'];

    // You can store this data in a database or do further processing as needed
    // For simplicity, we'll just display the entered data for now
    echo "<h2>Generated Resume</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Education:</strong> $education</p>";
    echo "<p><strong>Experience:</strong> $experience</p>";
    echo "<p><strong>Skills:</strong> $skills</p>";
    echo "<hr>";
}
?>

<h2>Resume Builder</h2>
<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="phone">Phone:</label>
    <input type="tel" name="phone" required>

    <label for="address">Address:</label>
    <textarea name="address" rows="4" required></textarea>

    <label for="education">Education:</label>
    <textarea name="education" rows="4" required></textarea>

    <label for="experience">Experience:</label>
    <textarea name="experience" rows="4" required></textarea>

    <label for="skills">Skills:</label>
    <textarea name="skills" rows="4" required></textarea>

    <button type="submit">Generate Resume</button>
</form>

</body>
</html>
