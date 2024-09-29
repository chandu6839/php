<?php include('dbconnect.php'); ?>
<?php 
    $id = $_GET['id'];
    if($id){
      $sqlq = "SELECT * FROM `stdent` where `ID` = $id";
      $result = mysqli_query($connection, $sqlq);
      if(!$result){
          die(mysqli_error());
      }
      $row = mysqli_fetch_assoc($result);
    }
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="insert.php" method="post">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="f_name" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" name="f_id" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Roll No</label>
                <div class="col-sm-10">
                    <input type="text"  name="f_no" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Hobbies</label>
                <div class="col-sm-10">
                    <input type="text"  name="f_hobbies" class="form-control" placeholder="">
                    <input type="submit" name="add_student" class="form-control"  value="Add">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->