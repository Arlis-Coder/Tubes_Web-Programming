<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="\assets\css\about.css">
    <link rel="stylesheet" href="\assets\css\home.css">
</head>

<body>
    <?php $this->load->view('_partials/navbar.php'); ?>

    <center>
        <h2>About Us</h2>
    </center>

    <div class=" team">
        <div class="person">
            <img src="\assets\img\boy.png" alt="Project Manager">
            <h3>Project Manager</h3>
            <p>Maulana Arlis</p>
        </div>
        <div class="person">
            <img src="\assets\img\boy.png" alt="Front End Developer">
            <h3>Front End Developer</h3>
            <p>Maulana Arlis</p>
        </div>
        <div class="person">
            <img src="\assets\img\boy.png" alt="Backend Developer">
            <h3>Backend Developer</h3>
            <p>Maulana Arlis</p>
        </div>
    </div>
    <div class="thank-you">
        <h2>Special Thanks</h2>
        <div class="thanks-person">
            <img src="/assets/img/gpt.png" alt="Person to Thank">
            <p>Thank you to ChatGPT for your guidance!</p>
        </div>
    </div>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>