<!DOCTYPE html>
<html>
	<head>
		<title>PAW</title>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				
				$("#isi").click(function(){
				
					var nama = $("#nama").val() ;
					var harga = $("#harga").val() ;
					var jumlah = $("#jumlah").val() ;
					
					var total = harga * jumlah ;
					$('tbody').append("<tr>" + "<td>" + nama + "</td>" + "<td>" + harga + "</td>" + "<td>" +jumlah +"</td>" + "<td>" + total + "</td>" + "<td>&nbsp;<td></tr>") ;
					
				});
				
			}) ;
		</script>
	</head>
	<body>
		<h1>Input Barang</h1>
		<form action="#" onsubmit="return false">
			Nama Barang <br/> <input type="text" id="nama" /> <br/>
			Harga Barang <br/> <input type="text" id="harga" /> <br/>
			Jumlah Barang <br/> <input type="text" id="jumlah" /> <br/>
			<input type="button" id="isi" value="ISIKAN" />
			<hr/>
			<table border="1">
				<thead>
					<tr>
						<th>Nama Barang</th>
						<th>Harga Barang</th>
						<th>Jumlah Barang</th>
						<th>Total Barang</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
				
				</tbody>
			</table>
		</form>
	</body>
</html>