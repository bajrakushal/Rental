<?php require_once 'include/header.php'?>
<?php 
    require_once 'include/dbconnect.php';
    $query = "SELECT * FROM tblcar";
    $result = mysqli_query($conn,$query);

?>
<?php if(isset($_SESSION['success'])):?>
    <script>
        alert("Your booking is successful")
    </script>
<?php unset($_SESSION['success']); endif?>
    <section class="banner banner-secondary" id="top" style="background-image: url(assets/front/img/banner-image-1-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Cars</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <?php foreach($result as $data):?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="featured-item">
                                <div class="thumb">
                                    <div class="thumb-img">
                                        <img src="assets/front/img/cars/<?php echo $data['image']?>" height="250" alt="">
                                    </div>
                                </div>
                                <div class="down-content">
                                    <h4><?php echo $data['car_name']?></h4>

                                    <br>

                                    <p><?php echo $data['capacity']?> people /  <?php echo $data['car_color']?>  /  <?php echo $data['car_make']?>  </p>

                                    <p><span><strong><sup>$</sup><?php echo $data['per_day_price']?></strong></span></p>

                                    <div class="text-button">
                                        <?php if($data['product_status'] == 0):?>
                                            <a href="car_detail.php?id=<?php echo $data['car_id']?>">View</a>
                                        <?php else:?>
                                            <a href="javascript:void(0)">Not Available</a>
                                        <?php endif?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>

                </div>
            </div>
        </section>
    </main>
<?php require_once 'include/footer.php'?>