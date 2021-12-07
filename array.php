<?php
// array biasa
$nama_mahasiswa=array('nuris akbar','ida husna','rafika yuni','wahyu safizal');
// asociative array
$barang=array('smartphone'=>130000,'power bank'=>500000,'mouse'=>30000);


foreach ($barang as $nama=>$harga)
{
    echo $nama.' harganya adalah'.$harga.'<br>';
}




/*for($i=0;$i<=3;$i++)
{
    echo $nama_mahasiswa[$i].'<br>';
}
 
 */
?>
