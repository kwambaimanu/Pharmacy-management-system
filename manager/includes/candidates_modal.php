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
              <h4 class="modal-title"><b>Add New Drug </b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="unit" class="col-sm-3 control-label">Unit</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="unit" name="unit" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="batchno" class="col-sm-3 control-label">Batchno</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="batchno" name="batchno" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="manufacturer" class="col-sm-3 control-label">Manufacturer</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="manufacturer" name="manufacturer" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM manufacturers";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id']."'>".$row['mfname']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mf_date" class="col-sm-3 control-label">mf_date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="mf_date" name="mf_date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exp_date" class="col-sm-3 control-label">exp_date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="exp_date" name="exp_date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="supplier" class="col-sm-3 control-label">supplier</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="supplier" name="supplier">
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
              <h4 class="modal-title"><b>Edit Drug</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="candidates_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="unit" class="col-sm-3 control-label">Unit</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="unit" name="unit" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="batchno" class="col-sm-3 control-label">Batchno</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="batchno" name="batchno" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="manufacturer" class="col-sm-3 control-label">Manufacturer</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="manufacturer" name="manufacturer" required>
                        <option value="" id="manufacturer" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM manufacturers";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id']."'>".$row['mfname']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mf_date" class="col-sm-3 control-label">mf_date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="mf_date" name="mf_date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exp_date" class="col-sm-3 control-label">exp_date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="exp_date" name="exp_date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="supplier" class="col-sm-3 control-label">supplier</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="supplier" name="supplier">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-save"></i> Update<button>
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
                    <p>DELETE WORKER</p>
                    <h2 class="bold fullname"></h2>
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



     