<?php require_once 'include/header.php'?>
<div id="layoutSidenav_content">
   <main>
      <div class="container-fluid px-4">
         <h1 class="mt-4">Carss</h1>
         <div class="row">
            <div class="col-xl-6">
               <div class="card mb-4">
                  <div class="card-header">
                     <i class="fas fa-list me-1"></i>
                     Enter Car Details
                  </div>
                  <div class="card-body">
                    <form method="post" action="include/admin_form.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Name</label>
                            <input type="name" name="car_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Car Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Capacity</label>
                            <input type="number" name="capacity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Car capacity">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Make Year</label>
                            <input type="number" name="year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Car Make Year">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Model</label>
                            <input type="text" name="model" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Car Model">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Color</label>
                            <input type="text" name="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Car Color">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Price Per Day</label>
                            <input type="number" name="per_day_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Car Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <input type="submit" value="Submit" name="car_post" class="btn btn-primary mt-2">
                    </form>

                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </main>
<?php require_once 'include/footer.php'?>