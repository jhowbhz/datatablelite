<?php
	//////////////////////////////////////////
	// 		SGSMobile 3.5 - Beta 	 		//
	//		Developer: Jhon Fallon. 		//
	//		Site: fb.com/jhowbhz			//
	//////////////////////////////////////////

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" type="text/css">
<div class="container" style="padding-top: 100px">
	<div class="col-xs-12">
		<table id="datatable_demo" class="table display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Cod Cadastro</th>
					<th>Data</th>
					<th>Nome</th>
				</tr>
			</thead>
		</table>		
	</div>
</div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#datatable_demo').DataTable( {
			"processing": true,
			"serverSide": true,
			"ajax": "../data/json.php"
		} );
	} );
</script>
</body>
</html>
