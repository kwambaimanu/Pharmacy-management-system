<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Manage Drugs
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Drugs</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Drug</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Name</th>
                 
                  <th>Unit</th>
                  <th>Batch No</th>
                  <th>Mf Date</th>
                  <th>Exp Date</th>
                  <th>Manufacturer</th>
                  <th>Supplier</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, stocks.id AS canid FROM stocks LEFT JOIN manufacturers ON manufacturers.id=stocks.manufacturer";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                     
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['name']."</td>
                           <td>".$row['unit']."</td>
                          <td>".$row['batch_no']."</td>
                          <td>".$row['mf_date']."</td>
                          <td>".$row['exp_date']."</td>
                          <td>".$row['manufacturer']."</td>
                          <td>".$row['supplier']."</td>
                          
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['canid']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['canid']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/candidates_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<?php //include 'includes/candidates_row.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

 

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'candidates_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.canid);
      $('#name').val(response.name);
      $('#unit').val(response.unit);
      $('#batchno').val(response.batch_no);
      $('#manufacturer').val(response.manufacturer).html(response.mfname);      
      $('#exp_date').val(response.exp_date);
      $('#mf_date').val(response.mf_date);
      $('#supplier').val(response.supplier);
      //$('.s').html(response.firstname+' '+response.lastname);
      //$('#desc').html(response.platform);
    }
  });
}
</script>
</body>
</html>
