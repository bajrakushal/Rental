<?php require_once 'include/header.php'?>
<?php 
   require_once '../include/dbconnect.php';
   if(isset($_GET['delete_id'])){
       $query1 = "DELETE FROM tblcar WHERE car_id=".$_GET['delete_id'];

       $result1 = mysqli_query($conn, $query1);
       if($result1){
           $_SESSION['success'] = "The data has been deleted successfully";
       }
   }

   $query = "SELECT * FROM tblcar WHERE posted_by=".$_SESSION['seller_id'];
   $result = mysqli_query($conn, $query);
?>
<div id="layoutSidenav_content">
   <main>
      <div class="container-fluid px-4">
      <h1 class="mt-4">Car Table</h1>
        <?php if(isset($_SESSION['success'])):?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
            </div>
        <?php endif?>
        <div class="card mb-4">
            <div class="card-header">
                <div style="float: right;">
                    <a href="add_car.php" class="btn btn-secondary">Add Cars</a>
                </div>
               <i class="fas fa-table me-1"></i>
               All Cars
            </div>
            
            <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Car Name</th>
                        <th>Car Price</th>
                        <th>Car Model</th>
                        <th>Car Color</th>
                        <th>Car Status</th>
                        <th>Car Image</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tfoot>
                     <tr>
                        <th>#</th>
                        <th>Car Name</th>
                        <th>Car Price</th>
                        <th>Car Model</th>
                        <th>Car Color</th>
                        <th>Car Status</th>
                        <th>Car Image</th>
                        <th>Action</th>
                     </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($result as $i => $data):?>
                     <tr>
                        <td><?php echo ++$i;?></td>
                        <td><?php echo $data['car_name']?></td>
                        <td><?php echo $data['per_day_price']?>/per day</td>
                        <td><?php echo $data['car_model']?></td>
                        <td><?php echo $data['car_color']?></td>
                        <td>
                            <?php if($data['product_status'] == 0):?>
                                <button class="btn btn-success">Available</button>
                            <?php else:?>
                                <button class="btn btn-warning">Booked</button>
                            <?php endif?>
                        </td>
                        <td><img src="../assets/front/img/cars/<?php echo $data['image']?>" alt="" height="50"></td>
                        <td>
                            <a href="edit_car.php?id=<?php echo $data['car_id']?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="javascript:delete_id(<?php echo $data['car_id']; ?>)"" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                     </tr>
                     <?php endforeach?>
                  </tbody>
                </table>
            </div>
         </div>
        </div>
   </main>
<script>
   function delete_id(id) {
    if (confirm('Are you sure you want to delete this?')) {
        window.location.href = 'cars.php?delete_id=' + id;
    }
}
</script>


<?php require_once 'include/footer.php'?>
