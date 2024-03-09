

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #007bff; /* Change sidebar background color */
    padding-top: 20px;
}

.sidebar a {
    padding: 10px;
    text-decoration: none; /* Hide underline */
    display: block;
    color: #fff; /* Change text color */
    font-weight: bold;
}

/* Adjust text color on hover */
.sidebar a:hover {
    background-color: #0056b3; /* Change hover background color */
    color: #fff; /* Change text color */
}
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .content h1 {
            color: #007bff; /* Change title color */
        }

        .content p {
            color: #333; /* Change paragraph text color */
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a href="#" class="sidebar-link" data-url="Admin-Register.php">Add New Admin</a>
        <a href="#" class="sidebar-link" data-url="../Agent/Agent-Register.php">Add New Agent</a>
        <a href="#" class="sidebar-link" data-url="View/ViewAgentList.php">View Agent List</a>
        <a href="#" class="sidebar-link" data-url="View/ViewPolicy.php">View Policy Record</a>
        <a href="#" class="sidebar-link" data-url="Plan/PlanDetails.php">Modify Plan</a>
    </div>

    <div class="content" id="dynamic-content">
        <!-- Content goes here -->
        <h1>Welcome to the Admin Dashboard</h1>
        <p>This is where you can manage your administration tasks.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            $('.sidebar-link').click(function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                $('#dynamic-content').load(url);
            });
        });
    </script>

</body>

</html>

<?php require_once 'footer.php'; ?>
