<?php
include "./database/connection.php";

if(isset($_POST['btn_Request_form'])){
    $ID = $_POST['id'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone_num = $_POST['phone'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];

    $sql = ("INSERT INTO `Request`(`ID`, `Name`, `Email`, `Phone_num`, `Subject`, `Message`) 
    VALUES ('$ID','$Name','$Email','$Phone_num','$Subject','$Message')");

if ($con->query($sql)===TRUE){
    echo "<script>alert('Request successfully submitted.')</script>";
} else {
    echo "Failed to submit Request";
}
}

?>

</head>
<body>
    <div class="form-container">
        <h2>Request Form</h2>
        <form action="main.php?page=Request_form" method="post">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="num" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="btn_Request_form">Submit Request</button>
            </div>
        </form>
    </div>
</body>
</html>