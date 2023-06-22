<!DOCTYPE html>
<html lang="en"><head>
    <title>Document</title>
</head><body>
    <center><h2>LAPORAN PENJUALAN</h2></center>
    <table border=1>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Invoice</th>
            <th>Harga</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>Phone</th>
            <th>Kurir</th>
        </tr>
        <?php $no = 1;
        foreach($order as $o) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $o['date'];?></td>
            <td><?= $o['invoice'];?></td>
            <td><?= $o['total'];?></td>
            <td><?= $o['name'];?></td>
            <td><?= $o['address'];?></td>
            <td><?= $o['city'];?></td>
            <td><?= $o['province'];?></td>
            <td><?= $o['phone'];?></td>
            <td><?= $o['courier'];?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body></html>