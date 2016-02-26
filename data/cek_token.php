<?php 
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
  echo "<script language='javascript' type='text/javascript'>
	alert('Anda Harus Login Terlebih Dahulu...!!!');
	</script>
	<meta http-equiv='refresh' content='0; url=../index.php'>";  
}
else{
	$tampil=mysql_query("select * from dt_user INNER JOIN dt_tagihan ON dt_user.user_id=dt_tagihan.user_id");
	$r = mysql_fetch_array($tampil);

echo "
<table style='border:3px solid #CD4646;border-radius:8px;box-shadow:1px 1px 4px #CD4646;'>

	<tr>
		<th style='background-color:#CD2929;color:white;'>Name</th>
		<td>:</td>
		<td>$r[Nama]</td>
	</tr>
	<tr>
		<th style='background-color:#CD2929;color:white;'>No.Meter</th>
		<td>:</td>
		<td>$r[no_meter]</td>
	</tr>
	<tr>
		<th style='background-color:#CD2929;color:white;'>Power</th>
		<td>:</td>
		<td>$r[daya] MHz</td>
	</tr>
	<tr>
		<th style='background-color:#CD2929;color:white;'>Address</th>
		<td>:</td>
		<td>$r[alamat]</td>
	</tr>
	<tr>
		<th style='background-color:#CD2929;color:white;'>Telephone</th>
		<td>:</td>
		<td>$r[no_telp]</td>
	</tr>
	<tr>
		<th style='background-color:#CD2929;color:white;'>Token</th>
		<td>:</td>
		<td>$r[token] kWh</td>
	</tr>
	<tr>
		<th style='background-color:#CD2929;color:white;'>Remaining Time</th>
		<td>:</td>
		<td>$r[waktu] H</td>
	</tr>
	
</table>
";
 } ?>