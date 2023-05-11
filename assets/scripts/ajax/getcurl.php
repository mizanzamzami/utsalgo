<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_maxredirs => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);
$response_array = json_decode($response,true);

$onscreen = '<table class="table" width="100%">
                <thead>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Jual</th>
                    <th>Quantity</th>
                    <th>Total Aset</th>
                   </thead>
                   ';
foreach ($response_array as $resp) {
    $onscreen.='<tr>
                  <td>'.$resp['kode barang'].'</td>
                  <td>'.$resp['nama barang'].'</td>
                  <td>'.$resp['harga jual'].'</td>
                  <td>'.$resp['quantity'].'</td>
                  <td>'.$resp['total aset'].'</td>
                </tr>';
}
$onscreen.='</table>';
echo $onscreen;