<?php require_once 'include/header.php'?>
<?php
    require_once 'include/dbconnect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM tblcar WHERE car_id = '$id'";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
    }
?>
    <section class="banner banner-secondary" id="top" style="background-image: url(assets/front/img/banner-image-1-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Car Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-content">
                            <br>
                            <h4><?php echo $data['car_name']?></h4>
                            <form method="post" action="include/form.php">
                                <label>Price/per day:  $<?php echo $data['per_day_price']?></label><br>
                                <label>Capacity: <?php echo $data['capacity']?>/person</label><br>
                                <label>Car Make Year: <?php echo $data['car_make']?></label><br>
                                <label>Car color: <?php echo $data['car_color']?></label><br>
                                <label>Description:</label><br><?php echo $data['car_desc']?><br>
                                <label style="margin-top: 15px;">Book To</label>
                                <input type="date" name="book_to" class="form-control">
                                <input type="hidden" name="car_id" value="<?php echo $data['car_id']?>">
                                <?php if(isset($_SESSION['cid'])):?>
                                    <input type="hidden" name="cid" value="<?php echo $_SESSION['cid']?>">
                                <?php endif?>
                                <input type="hidden" name="price" value="<?php echo $data['per_day_price']?>">
                                <?php if(isset($_SESSION['cid'])):?>
                                    <input type="submit" value="Book" name="book" class="btn btn-primary">
                                <?php else:?>
                                    <a href="login.php" class="btn btn-primary">Book</a>
                                <?php endif?>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/front/img/cars/<?php echo $data['image']?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php require_once 'include/footer.php'?>