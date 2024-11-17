<?php 

include 'layout/header.php';


?>

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Login</h1>
                    <form action="" method="POST">
                        <input type="email" name="email" class="form-control my-3 py-2" placeholder="Email" required />
                        <input type="password" name="password" class="form-control my-3 py-2" placeholder="Password"
                            required />
                        <div class="text-center mt-3">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <a href="register.php" class="nav-link text-primary text-center text-py-10">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>