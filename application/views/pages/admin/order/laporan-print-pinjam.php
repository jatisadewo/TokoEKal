<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <style type="text/css">
            .table-data{
                width: 100%;
                border-collapse: collapse;
            }

            .table-data tr th,
            .table-data tr td{
                border: 1px solid black;
                font-size: 11pt;
                font-family: Verdana;
                padding: 10px 10px 10px 10px;
            }

            .table-data th{
                background-color: grey;
            }

            h3{
                font-family: Verdana;
            }
        </style>

        <h3><center>LAPORAN PENJUALAN</center></h3>
        <br/>
        <table class="table-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Tanggal Kembali</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Total Denda</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($order as $o){
                ?>
                <tr>
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $o['name']; ?></td>
                    <td><?= $o['invoice']; ?></td>
                    <td><?= $o['tgl_pinjam']; ?></td>
                    <td><?= $o['tgl_kembali']; ?></td>
                    <td><?= $o['tgl_pengembalian']; ?></td>
                    <td><?= $o['total_denda']; ?></td>
                    <td><?= $o['status']; ?></td>
                </tr>
                <?php 
            } 
            ?>
            </tbody>
        </table>
        <script type="text/javascript">
            window.print();
        </script>
    </body>
</html>
