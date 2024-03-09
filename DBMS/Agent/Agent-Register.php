<?php require_once '../Admin/header.php'; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Agent Sign-Up</h1>
                </div>
                <div class="card-body">
                    <form action="includes/Agent-register-inc.php" method="post">
                        <div class="form-group">
                            <input type="number" class="form-control" name="Agency_code" placeholder="Agency Code (7 digit)" min="1000000" max="9999999" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="Mobile_no" placeholder="Mobile Number" min="5000000000" max="9999999999" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="Email_id" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Designation" placeholder="Designation">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="City" placeholder="City">
                        </div>
                        <div class="form-group">
                            <label for="DOB">Date of Birth:</label>
                            <input type="date" class="form-control" name="DOB" placeholder="Date of Birth">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../Admin/footer.php'; ?>
