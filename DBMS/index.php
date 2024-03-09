<?php
session_start();
if (isset($_SESSION['sessionId']) || isset($_SESSION['sessionId2'])) {
    session_unset();
    session_destroy();
    session_set_cookie_params(0);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Insurance Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-custom {
            background-color: #007bff; /* Change the color as per your preference */
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" href="#">Insurance Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" id="adminModeBtn">Admin Mode</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="agentModeBtn">Agent Mode</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-3" id="adminLoginForm" style="display:none;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Admin Login</h3>
            <!-- Include your admin login form code here -->
            <form action="Admin/Admin-Login.php" method="post">
                <!-- Your admin login form fields -->
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-3" id="agentLoginForm" style="display:none;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Agent Login</h3>
            <!-- Include your agent login form code here -->
            <form action="Agent/Agent-Login.php" method="post">
                <!-- Your agent login form fields -->
                <div class="form-group">
                    <input type="number" class="form-control" name="Agency_code" placeholder="Agency Code" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $("#adminModeBtn").click(function() {
            $("#agentLoginForm").hide();
            $("#adminLoginForm").load("Admin/Admin-Login.php");
            $("#adminLoginForm").show();
        });

        $("#agentModeBtn").click(function() {
            $("#adminLoginForm").hide();
            $("#agentLoginForm").load("Agent/Agent-Login.php");
            $("#agentLoginForm").show();
        });
    });
</script>

</body>
</html>
