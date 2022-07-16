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
      Invoice
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Invoice</li>
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
             
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Invoice Id</th>
                  <th>Customer Id</th>
                  <th>Customer Name</th>
                  <th>Prescription Id</th>
                   <th>Quantity</th>
                  <th>Cost per dose</th>
                  <th>Drug Name</th>
                  <th>Total Cost</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                   $sql = "SELECT *, prescriptions1.id AS canid FROM prescriptions1 LEFT JOIN customer ON customer.id=prescriptions1.cust_id LEFT JOIN stocks ON stocks.id=prescriptions1.drug_name";

                     //$sql = "SELECT * FROM invoice ";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['invoice_id']."</td>
                          <td>".$row['cust_id']."</td>
                          <td>".$row['first_name']." ".$row['last_name']."</td>
                          <td>".$row['presc_id']."</td>
                          <td>".$row['quantity']."</td>
                           <td>".$row['cost']."</td>
                          <td>".$row['name']."</td>
                          <td>".$row['totalcost']."</td>


                          <td>
                            <a class='btn btn-sm btn-info' href='' role='button'>PRINT</a>
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
  <?php include 'includes/positions_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
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

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'positions_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_description').val(response.quantity);
      $('#edit_max_vote').val(response.cost);
      $('.description').html(response.description);
    }
  });
}
</script>
</body>
</html>
