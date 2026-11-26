<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donor Registration</title>
</head>
<?php 
include ('config.php');
if(isset($_POST['name'])){
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$city = $_POST['city'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$save_life = $_POST['save_life'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashing password for security

// Insert into database
$sql = "INSERT INTO donor (name, gender, email, city, dob, contact, save_life, password)
        VALUES ('$name', '$gender', '$email', '$city', '$dob', '$contact', '$save_life', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New donor registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<body>
    <h2>Register as a Donor</h2>
    <form action="" method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Gender:</label><br>
        <input type="text" name="gender" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>City:</label><br>
        <input type="text" name="city" required><br><br>

        <label>Date of Birth:</label><br>
        <input type="text" name="dob" placeholder="YYYY-MM-DD" required><br><br>

        <label>Contact:</label><br>
        <input type="text" name="contact" required><br><br>

        <label>Save Life (Times Donated):</label><br>
        <input type="text" name="save_life" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
