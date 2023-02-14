<?php require_once 'include/header.php'?>
    <main>
        <section class="popular-places">
         <h1 class="text-center">Register</h1>
            <?php if(isset($_SESSION['error'])):?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['error']; unset($_SESSION['error'])?>
                </div>
            <?php elseif(isset($_SESSION['success'])):?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['success']; unset($_SESSION['success'])?>
                </div>
            <?php endif?>
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <form method="post" action="include/form.php">
                            <div class="col-md-6"> 
                                <div class="left-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="address" id="name" class="form-control" placeholder="Address" >
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="number" id="name" class="form-control" placeholder="Phone Number" >
                                        </div>
                                        <div class="col-md-12">
                                            <input name="email" type="email" class="form-control" placeholder="Your email">
                                        </div>
                                        <div class="col-md-12">
                                            <input name="password" type="password" class="form-control" id="name" placeholder="Your Password...">
                                        </div>
                                        <div class="col-md-12">
                                        <p>Have Account! <a href="login.php">Login</a></p>
                                        <fieldset>
                                            <div class="blue-button">
                                                <input type="submit" value="Register" class="btn btn-primary" name="register">
                                            </div>
                                        </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-3"></div>
                    </div>      
                </div>
            </div>
        </section>
    </main>
<?php require_once 'include/footer.php'?>
