<?php
header("content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data Order Customer</center></h3>
<br>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Invoice</th>
            <th>Harga</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>Nomor Hp</th>
            <th>Kurir</th>
            <th>Ongkos Kirim</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($order as $o){
        ?>
        <tr>
            <th scope="row"><?= $no++ ?></th>
            <th><?= $o['date'];?></th>
            <th><?= $o['invoice'];?></th>
            <th><?= $o['total'];?></th>
            <th><?= $o['name'];?></th>
            <th><?= $o['address'];?></th>
            <th><?= $o['city'];?></th>
            <th><?= $o['province'];?></th>
            <th><?= $o['phone'];?></th>
            <th><?= $o['courier'];?></th>
            <th><?= $o['cost_courier'];?></th>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>