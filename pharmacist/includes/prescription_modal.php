<!-- Description -->
<div class="modal fade" id="platform">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Prescription</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="customer" class="col-sm-3 control-label">Customer Id</label>

                    <div class="col-sm-9">
                       <select class="form-control" id="position" name="customer" required>
                        <option value="" selected>- Select -</option>
                        <?php
                         $sql = "SELECT * FROM customer";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id']."'>".$row['cust_id']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-3 control-label">Age</label>

                    <div class="col-sm-9">
                      <input type="number" min="0" class="form-control" id="age" name="age" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sex" class="col-sm-3 control-label">Sex</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="sex" name="sex" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="drug" class="col-sm-3 control-label">Drug Name</label>
                       <div class="col-sm-9">
                      <select class="form-control" id="position" name="drug" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM stocks";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id']."'>".$row['name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dose" class="col-sm-3 control-label">Dose</label>

                    <div class="col-sm-9">
                      <input type="number" min="0" class="form-control" id="dose" name="dose">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="quantity" class="col-sm-3 control-label">Quantity</label>

                    <div class="col-sm-9">
                      <input type="number" min="0" class="form-control" id="quantity" name="quantity">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="cost" class="col-sm-3 control-label">Cost Per dose</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="cost" name="cost">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit prescription</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
              
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Age</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="age" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Sex</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="password" name="sex" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Drug Name</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="position" name="drug" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM stocks";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id']."'>".$row['name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Dose</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="dose" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-save"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE PRESCRIPTION</p>
                    
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>



     