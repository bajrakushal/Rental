<?php require_once 'include/header.php'?>
<?php 
   require_once '../include/dbconnect.php';
   if(isset($_GET['delete_id'])){
       $query1 = "DELETE FROM booking WHERE book_id=".$_GET['delete_id'];

       $result1 = mysqli_query($conn, $query1);
       if($result1){
           $_SESSION['success'] = "The data has been deleted successfully";
       }
   }

   $query = "SELECT booking.book_id, customer.Name,customer.address,customer.email,customer.phone,tblcar.car_name,tblcar.per_day_price,booking.book_to,booking.book_date,booking.total_price
   FROM customer
   JOIN booking on booking.cid = customer.cust_id
   JOIN tblcar on tblcar.car_id = booking.car_id
   WHERE tblcar.posted_by=".$_SESSION['seller_id'];
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
               <i class="fas fa-table me-1"></i>
               All Booking Details
            </div>
            
            <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Car Name</th>
                        <th>Book To Date</th>
                        <th>Total Rent Price</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tfoot>
                     <tr>
                        
                     </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($result as $i => $data):?>
                     <tr>
                        <td><?php echo ++$i;?></td>
                        <td><?php echo $data['Name']?></td>
                        <td><?php echo $data['phone']?></td>
                        <td><?php echo $data['car_name']?></td>
                        <td><?php echo $data['book_to']?></td>
                        <td><?php echo $data['total_price']?></td>
                        <td>
                           <a href="view.php?id=<?php echo $data['book_id'];?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="javascript:delete_id(<?php echo $data['book_id']; ?>)"" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
        window.location.href = 'booking.php?delete_id=' + id;
    }
}
</script>


<?php require_once 'include/footer.php'?>
