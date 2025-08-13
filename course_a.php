<?php
// Include database connection file
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $branch = $_POST['branch'];
    $course_title = $_POST['course_title'];
    $youtube_url = $_POST['youtube_url'];

    // Insert data into the 'courses' table
    $query = "INSERT INTO courses (branch, course_title, youtube_url) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $branch, $course_title, $youtube_url);

    if ($stmt->execute()) {
        echo "<script>alert('Course uploaded successfully!');</script>";
        header('Location: course_s.php');
    } else {
        echo "<script>alert('Error uploading course!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Upload Course</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-top: 15px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Upload a Course</h1>
    <form method="POST" action="">
        <label for="branch">Branch:</label>
        <select name="branch" id="branch">
            <option value="information-technology">Information Technology</option>
            <option value="computer-engineering">Computer Engineering</option>
            <option value="mechanical-engineering">Mechanical Engineering</option>
            <option value="electrical-engineering">Electrical Engineering</option>
        </select>

        <label for="course_title">Course Title:</label>
        <input type="text" name="course_title" id="course_title" required>

        <label for="youtube_url">YouTube URL:</label>
        <input type="text" name="youtube_url" id="youtube_url" placeholder="https://youtu.be/your-video-id" required>

        <button type="submit">Upload Course</button>
        
    </form>
</div>

</body>
</html>
