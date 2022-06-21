<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #000000;
            text-align: center;
        }
    </style>
</head>

<body>
    <div style="font: size 20px; color:'#dddddd' "><i>invoice</div>
    <p>
        <i>Bratayudha Aquarium</i><br>
        Garut, Indonesia <br>
        082127xxxx
    </p>
    <hr>
    <hr>
    <p></p>
    <p>
        Pembeli : <?= $pembeli->username ?> <br>
        Alamat : <?= $transaksi->alamat ?> <br>
        Transaksi No : <?= $transaksi->no ?> <br>
        Tanggal : <?= date('Y-m-d', strtotime($transaksi->created_date)) ?>
    </p>
    <table cellpading="6">
        <tr>
            <th><strong>Barang</strong></th>
            <th><strong>Harga satuan</strong></th>
            <th><strong>Jumlah</strong></th>
            <th><strong>Ongkir</strong></th>
            <th><strong>Total Harga</strong></th>
        </tr>
        <tr>
            <td><?= $barang->nama ?></td>
            <td><?= "Rp " . number_format($barang->harga, 2, ',', '.') ?></td>
            <td> <?= $transaksi->jumlah ?></td>
            <td><?= "Rp" . number_format($transaksi->ongkir, 2, ',', '.') ?></td>
            <td> <?= "Rp" . number_format($transaksi->total_harga, 2, ',', '.') ?></td>
        </tr>
    </table>
</body>

</html>