<?php
	include 'includes/session.php';

	function generateRow($conn){
		$contents = '';
	 	
		//$sql = "SELECT * FROM positions ORDER BY priority ASC";
     $sql = "SELECT *, prescription.id AS canid FROM prescription LEFT JOIN customer ON customer.id=prescription.cust_id LEFT JOIN stocks ON stocks.id=prescription.drug_name";
        $query = $conn->query($sql);
        while($row = $query->fetch_assoc()){
        	$id = $row['id'];
        	$contents .= '
        		 <thead class="thead-dark">
    <tr>
      <th scope="col">Invoice</th>
      <th scope="col">Customer</th>
      <th scope="col">Prescription</th>
      <th scope="col">Cost</th>
    </tr>
  </thead>
        	';

        	$sql = "SELECT * FROM candidates WHERE position_id = '$id' ORDER BY lastname ASC";
    		$cquery = $conn->query($sql);
    		while($crow = $cquery->fetch_assoc()){
    			$sql = "SELECT * FROM votes WHERE candidate_id = '".$crow['id']."'";
      			$vquery = $conn->query($sql);
      			$votes = $vquery->num_rows;

      			$contents .= '
      				<tr>
      					<td>'.$crow['lastname'].", ".$crow['firstname'].'</td>
      					<td>'.$votes.'</td>
      				</tr>
      			';

    		}

        }

		return $contents;
	}
		
	$parse = parse_ini_file('config.ini', FALSE, INI_SCANNER_RAW);
    $title = $parse['election_title'];

	require_once('../tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
   // $pdf->SetTitle('Result: '.$title);  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	<h2 align="center">Avenue Hospital</h2>
      	<h4 align="center">Patient Invoice</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
      ';  
   	$content .= generateRow($conn);  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('invoice.pdf', 'I');

?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <img src="http://via.placeholder.com/400x90?text=logo">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice #550</p>
                            <p class="text-muted">Due to: 4 Dec, 2019</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Customer Information</p>
                            <p class="mb-1">John Doe, Mrs Emma Downson</p>
                            <p>070876543</p>
                            <p class="mb-1">Berlin, Germany</p>
                            <p class="mb-1">6781 45P</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4"></p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                            <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">PRESCRIPTION ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">DRUG NAME</th>
                                        
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Software</td>
                                        <td>LTS Versions</td>
                                        <td>21</td>
                                        <td>$321</td>
                                        <td>$3452</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Grand Total</div>
                            <div class="h2 font-weight-light">$234,234</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Discount</div>
                            <div class="h2 font-weight-light">10%</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Sub - Total amount</div>
                            <div class="h2 font-weight-light">$32,432</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   

</div>


