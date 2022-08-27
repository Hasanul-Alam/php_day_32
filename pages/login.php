<?php include 'pages/header.php';?>
    
    <section class="py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login Here</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-danger"><?php echo isset($message) ? $message : ''; ?></p>
                        <form action="action.php" method="POST">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="px-5 btn btn-outline-success" name="login_btn" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'pages/footer.php';?>