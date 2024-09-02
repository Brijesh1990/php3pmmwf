 
 <!-- add employee -->
 <div class="container p-5 mt-2">
  <h2>Add Employee <span class="bi bi-person"></span>
  <button type="button" class="btn btn-md btn-dark text-white float-end" data-bs-toggle="modal" data-bs-target="#addemp">Click for Add <span class="bi bi-person"></span></button>
  </h2>
  <hr>

  <!-- FOR DISPLAY ALL EMPLOYEE DATA CREATE A table -->

  <table class="table table-responsive table-bordered">
    <tr>
      <th>#id</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>State</th>
      <th>Action</th>
    </tr>

<?php 
$select="select * from tbl_addemployee";
$exe=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($exe))
{

?>

    <tr>
      <td><?php echo $fetch["empid"];?></td>
      <td><?php echo $fetch["firstname"];?></td>
      <td><?php echo $fetch["lastname"];?></td>
      <td><?php echo $fetch["email"];?></td>
      <td><?php echo $fetch["mobile"];?></td>
      <td><?php echo $fetch["state"];?></td>
      <td><?php echo $fetch["added_date_time"];?></td>
      <td><a href="" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash" onclick="return confirm('Are you sure to Delete Data ?')"></span></a> | <a href="" class="btn btn-sm btn-primary text-white" onclick="return confirm('Are you sure to Edit Data ?')"><span class="bi bi-pencil"></span></a></td>
      
    </tr>
<?php 
}
?>

</table>

 </div>
