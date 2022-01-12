<?php
include "../koneksi.php";
$sql="SELECT * FROM hotel where lng>0";
$hasil=mysqli_query($conn,$sql);
?>

var json_hotel_2 = {"type":"FeatureCollection","name":"hotel_2","crs":{"type":"name","properties":{"name":"urn:ogc:def:crs:OGC:1.3:CRS84"}},
"features":[
	<?php
		while($data=mysqli_fetch_array($hasil)){
			$id=$data['id'];
			$nama=$data['nama'];
			$jenis=$data['jenis'];
			$alamat=$data['alamat'];
			$lat=$data['lat'];
			$lng=$data['lng'];
	?>
{"type":"Feature","properties":{"id":"<?php echo $id; ?>","nama":"<?php echo $nama; ?>",
	"jenis":"<?php echo $jenis; ?>","alamat":"<?php echo $alamat; ?>"},
	"geometry":{"type":"MultiPolygon","coordinates":[<?php echo $lng; ?>,<?php echo $lat; ?> ]}},

<?php
}
?>
	]
}