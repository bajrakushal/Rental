<?php require_once 'include/header.php'?>
    <main>
        <section class="popular-places">
         <h1 class="text-center">Login</h1>
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
                                        <fieldset>
                                            <input name="email" type="email" class="form-control" placeholder="Your email">
                                        </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <input name="password" type="password" class="form-control" id="name" placeholder="Your Password...">
                                        </div>
                                        <div class="col-md-12">
                                        <p>New to the site?<a href="register.php"> Reigster here</a></p>
                                        <fieldset>
                                            <div class="blue-button">
                                                <input type="submit" class="btn btn-primary" value="Login" name="login">
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
