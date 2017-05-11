<!DOCTYPE html>
<html>
  <head>
    <title>CALITUNG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
<script language="JavaScript">
var tanggallengkap = new String();
var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
namahari = namahari.split(" ");
var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
namabulan = namabulan.split(" ");
var tgl = new Date();
var hari = tgl.getDay();
var tanggal = tgl.getDate();
var bulan = tgl.getMonth();
var tahun = tgl.getFullYear();
tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;

	var popupWindow = null;
	function centeredPopup(url,winName,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	popupWindow = window.open(url,winName,settings)
}
</script>
</head>
  	<body>
  		<div class="header">
	    	<div class="container">
	            <div class="col-md-5">
	            <!-- Logo -->
	              	<div class="logo">
	                	<h1><a>APLIKASI CALITUNG</a></h1>
	              	</div>
	           	</div>
	        </div>
	    </div>
		
    <div class="page-content">
    	<div class="col-md-4"></div>
	  		<div class="row">
	  			<div class="col-md-5">
	  				<div class="content-box-large">
			  			<div class="panel-heading">
				            <div class="content-wrap">
	                            <hr class="left">
	                                <span><center><h2>Menghitung Volume Kubus</h2></center></span>
	                            <hr class="right">
					        </div>
					            <div class="Tanggal"><h4><script language="JavaScript">document.write(tanggallengkap);</script></h4>
					            </div>

			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form" method="POST" action="hasil_kubus.php">
			  						<div class="form-group">
			  							<label class="col-sm-4 control-label">RUMUS :</label>
								   			<div class="col-sm-6">
								   				<span class="form-control">Sisi X Sisi X Sisi</span>
										   			</div>
											</div>

											<div class="form-group">
											    <label class="col-sm-4 control-label">Sisi :</label>
											    	<div class="col-sm-6">
											     		<input type="text" class="form-control" id="sisi" name="sisi" required placeholder="Masukan Sisi">
												    	</div>
											</div>

											<div class="form-group">
											    <div class="col-sm-offset-4 col-sm-8">
											      	<input type="submit" value="Hitung"  class="btn btn-sm btn-primary"/>&nbsp;<a href="index.php" class="btn btn-sm btn-primary">Kembali</a>
												 </div>
											</div>
										</div>
									</div>
								</form>
			  				</div>

			  			</div>
	  				</div>
	  			</div>
	  		</div>	
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>