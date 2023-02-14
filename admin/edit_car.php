<?php require_once 'include/header.php'?>
<?php
    require_once '../include/dbconnect.php';
    if(isset($_GET['id'])){
        $query = "SELECT * FROM tblcar where car_id=".$_GET['id'];
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
    }
?>
<div id="layoutSidenav_content">
   <main>
      <div class="container-fluid px-4">
         <h1 class="mt-4">Cars</h1>
         <div class="row">
            <div class="col-xl-6">
               <div class="card mb-4">
                  <div class="card-header">
                     <i class="fas fa-list me-1"></i>
                     Enter Car Details
                  </div>
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-success"><?php echo $_SESSION['success'];unset($_SESSION['success']); ?></div>
                    <?php elseif (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger"><?php echo $_SESSION['error'];unset($_SESSION['error']); ?></div>
                    <?php endif?>
                  <div class="card-body">
                    <form method="post" action="include/admin_form.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Name</label>
                            <input type="name" name="car_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Car Name" value="<?php echo $data['car_name']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Capacity</label>
                            <input type="number" name="capacity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Car Capacity" value="<?php echo $data['capacity']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Make Year</label>
                            <input type="number" name="year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['car_make']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Model</label>
                            <input type="text" name="model" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['car_model']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Color</label>
                            <input type="text" name="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['car_color']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Price Per Day</label>
                            <input type="number" name="per_day_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" value="<?php echo $data['per_day_price']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"><?php echo $data['car_desc']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <input type="hidden" name="car_id" value="<?php echo $data['car_id']?>">
                        <input type="submit" value="Submit" name="edit_car" class="btn btn-primary mt-2">
                    </form>

                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </main>
<?php require_once 'include/footer.php'?>