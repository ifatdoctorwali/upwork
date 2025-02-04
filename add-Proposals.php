<?php
session_start();
include 'db.php';

// Ensure the freelancer is logged in
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'freelancer') {
    echo "You must be logged in as a freelancer to submit a proposal.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_proposal'])) {
    $freelancer_id = $_SESSION['user_id']; // Freelancer's ID
    $job_id = $_POST['job_id']; // Job ID
    $cover_letter = $_POST['cover_letter']; // Proposal text
    $bid_amount = $_POST['bid_amount']; // Freelancer's bid amount

    // Validate input
    if (empty($cover_letter) || empty($bid_amount)) {
        echo "All fields are required.";
        exit;
    }

    // Insert proposal into database
    $sql = "INSERT INTO proposals (freelancer_id, job_id, cover_letter, bid_amount) 
            VALUES ('$freelancer_id', '$job_id', '$cover_letter', '$bid_amount')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Proposal submitted successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Proposal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        .form-container {
            width: 50%;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            text-align: left;
            font-weight: bold;
            margin-top: 10px;
        }

        textarea, input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-top: 20px;
            display: block;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Submit Your Proposal</h2>
    <form method="POST">
        <label for="job_id">Job ID</label>
        <input type="number" id="job_id" name="job_id" required>

        <label for="cover_letter">Cover Letter</label>
        <textarea id="cover_letter" name="cover_letter" required></textarea>

        <label for="bid_amount">Your Bid Amount ($)</label>
        <input type="text" id="bid_amount" name="bid_amount" required>

        <button type="submit" name="submit_proposal">Submit Proposal</button>
    </form>
    <a href="index.php">Go Back to Home</a>
</div>

</body>
</html>
