<?php 
if(isset($_POST["add-employee"]))
{
  date_default_timezone_set("Asia/Calcutta");
  
  $fnm=$_POST["fname"];
  $lnm=$_POST["lname"];
  $em=$_POST["email"];
  $pass=$_POST["password"];
  $mob=$_POST["mobile"];
  $st=$_POST["state"];
  $add_date=date("d/m/Y H:i:s a");
  $insert="insert into tbl_addemployee(firstname,lastname,email,password,mobile,state,added_date_time) values('$fnm','$lnm','$em','$pass','$mob','$st','$add_date')";
  $exe=mysqli_query($con,$insert);

  echo "<script>
  alert('Employee addedd successfully')
  window.location='./';
  </script>";


}

?>

<!-- add modal for add employee -->
<div class="modal fade" id="addemp" role="dialog">
  <div class="modal-dialog"  style="min-width:60% !important; margin-top: 5% !important;">
    <div class="modal-content mt-5 p-0">
      <div class="row">
        <div class="col-md-6 bg-dark p-5">
          <h3 class="text-white">Why join with us</h3>
          <hr class="border border-white border-1 w-50">
          <ul class="sidebar">
            <li><a href="">24x7 support</a></li>
            <li><a href="">Return policy</a></li>
            <li><a href="">Customers care support</a></li>
            <li><a href="">Secured payments</a></li>
            <li class="mt-5"><a href=""><img src="https://cdn-icons-png.flaticon.com/512/1256/1256628.png" class="img-fluid w-50" /></a></li>
          </ul>
        </div>
        
        <div class="col-md-6 bg-white p-5">
          <h2>Add Employee <span class="bi bi-person"></span>  <button type="button" class="btn btn-sm border border-0 btn-danger float-end" data-bs-dismiss="modal">&times;</button></h2>
          <hr class="border border-dark border-1 w-50">

          <form method="post">
            <div class="form-group mt-3">
              <input type="text" name="fname" placeholder="FirstName *" class="form-control">
            </div>
            <div class="form-group mt-3">
              <input type="text" name="lname" placeholder="LastName *" class="form-control">
            </div>
            <div class="form-group mt-3">
              <input type="text" name="email" placeholder="Email *" class="form-control">
            </div>
            <div class="form-group mt-3">
              <input type="password" name="password" placeholder="Password *" class="form-control">
            </div>
            <div class="form-group mt-3">
              <input type="text" name="mobile" placeholder="Mobile *" class="form-control">
            </div>

            <div class="form-group mt-3">
              <select name="state"  placeholder="State *" class="form-control">
                <option value="">-select state-</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Mahrastra">Mahrastra</option>
              </select>
            </div>
            <div class="form-group mt-3">
              <input type="submit" name="add-employee" value="AddEmployee"  class="btn btn-md btn-dark text-white">
              <input type="reset" name="reset" value="Reset"  class="btn btn-md btn-danger text-white ms-2">
            </div>

          </form>

        </div>

      </div>

    </div>
  </div>
 
 </div>
 </body>
</html>