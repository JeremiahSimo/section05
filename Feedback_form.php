<?php
include './database/connection.php';

if(isset($_POST['btn_Feedback_form'])){

    $Feedback = $_POST['Feedback'];
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email =$_POST['email'];
    $Date =$_POST['date'];

    $sql =("INSERT INTO `feedbacks`(`Feedback`, `Firstname`, `Lastname`, `Email`, `Date`) VALUES 
    ('$Feedback','$Firstname','$Lastname','$Email', '$Date' )");

    if ($con->query($sql)===TRUE){
        echo "<script>alert('Feedback successfully submitted.')</script>";
    } else {
        echo "Failed to submit feedback";
    }
}
?>


<main>
    <div class="container">
        <h1>Feedback Form</h1>
        <form action="main.php?page=Feedback_form" method="POST">
            <div class="form-group">
                <label for="Feedback">Your Feedback:</label>
                <input type="text" id="Feedback" name="Feedback" required>
            </div>

            <div class="form-group">
                <label for="Firstname">First Name:</label>
                <input type="text" id="Firstname" name="Firstname" required>
            </div>

            <div class="form-group">
                <label for="Lastname">Last Name:</label>
                <input type="text" id="Lastname" name="Lastname" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <button type="submit" name="btn_Feedback_form">Submit Feedback</button>
        </form>
    </div>

