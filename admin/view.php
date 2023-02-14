<?php require_once 'include/header.php'?>
<?php
    if($_GET['id']){
        $id = $_GET['id'];
        $query = "SELECT booking.book_id, customer.Name,customer.address,customer.email,customer.phone,tblcar.car_name,
                tblcar.per_day_price,booking.book_to,booking.book_date,booking.total_price,tblcar.image
                FROM customer
                JOIN booking on booking.cid = customer.cust_id
                JOIN tblcar on tblcar.car_id = booking.car_id
                WHERE booking.book_id=$id";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);
    }
?>
<div id="layoutSidenav_content">
   <main>
      <div class="container-fluid px-4">
         <h1 class="mt-4">Booking</h1>
         <div class="row">
            <div class="col-xl-6">
               <div class="card mb-4">
                  <div class="card-header">
                     <i class="fas fa-list me-1"></i>
                    Booking Information
                  </div>
                  <div class="card-body">
                    <form method="post" action="include/admin_form.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Name</label>
                            <input type="name" name="car_name" class="form-control" id="exampleInputEmail1" value="<?php echo $data['car_name']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Price Per Day</label>
                            <input type="number" name="capacity" class="form-control" id="exampleInputEmail1" value="<?php echo $data['per_day_price']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Name</label>
                            <input type="name" name="type" class="form-control" id="exampleInputEmail1" value="<?php echo $data['Name']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Email</label>
                            <input type="text" name="per_day_price" class="form-control" id="exampleInputEmail1" value="<?php echo $data['email']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Address</label>
                            <input type="text" name="per_day_price" class="form-control" id="exampleInputEmail1" value="<?php echo $data['address']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Phone</label>
                            <input type="text" name="per_day_price" class="form-control" id="exampleInputEmail1" value="<?php echo $data['phone']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Booking Date</label>
                            <input type="text" name="per_day_price" class="form-control" id="exampleInputEmail1" value="<?php echo $data['book_date']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Book To</label>
                            <input type="text" name="per_day_price" class="form-control" id="exampleInputEmail1" value="<?php echo $data['book_to']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total Price</label>
                            <input type="text" name="per_day_price" class="form-control" id="exampleInputEmail1" value="<?php echo $data['total_price']?>">
                        </div>
                        <a href="booking.php" class="btn btn-secondary mt-2">Back</a>
                    </form>

                  </div>
               </div>
            </div>
            <div class="col-xl-6">
                <img src="../assets/front/img/cars/<?php echo $data['image']?>" alt="<?php echo $data['car_name']?>" height="250">
            </div>
            
         </div>
      </div>
   </main>
<?php require_once 'include/footer.php'?>