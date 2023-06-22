<!DOCTYPE html>
<html><head>
    <title>Document</title>
</head><body>
    <table border=1>
        <tr>
            <th>Resi Pengiriman</th>
        </tr>
        <tr>
            <td>
                <div class="tabel-responsive">
                    <table border=1>
                        <tr>
                            <th>Invoice</th>
                            <th>Nama Penerima</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                        </tr>
                        <?php foreach ($order_detail as $detail) :?>
                            <tr>
                                <td><?= $order->invoice;?></td>
                                <td><?= $order->name;?></td>
                                <td><?= $order->phone;?></td>
                                <td><?= $order->address;?></td>
                                <td><?= $detail->title;?></td>
                                <td><?= $detail->quantity;?></td>
                                <td>Rp,<?= number_format($detail->price, 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach?>
                            <tr>
                                <th colspan="6" style="text-align:right">Subtotal &nbsp; &nbsp;</td>
                                <td>Rp,<?= number_format(array_sum(array_column($order_detail, 'sub_total')), 0, ',', '.') ?></td>   
                            </tr>
                            <tr>
                                <th colspan="6" style="text-align:right">Ongkos Kirim &nbsp; &nbsp;</td>
                                <td>Rp,<?= number_format($order->cost_courier, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <th colspan="6" style="text-align:right">Total Bayar &nbsp; &nbsp;</td>
                                <td>Rp,<?= number_format($order->total + $order->cost_courier, 0, ',', '.') ?></td>
                            </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
  
</body>
</html>
