<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

        <div class="table-responsive">
        <a href="?page=barangcreate" class= "btn btn-primary mb-3"><span data-feather="plus"></span>Data Baru</a>
        <table class="table table-striped table-sm">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Stok Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">Barang Masuk</th>
        <th scope="col">Barang Keluar</th>
        <th scope="col">Stok Akhir</th>
        <th scope="col">Opsi</th>
            </tr>
        </thead>
    <tbody>
        <?php
        $selectSQL = "SELECT * FROM barang";
        $database = new Database();
        $connection = $database->getConnection();
        $statement = $connection->prepare($selectSQL);
        $statement->execute();

        while ($data = $statement->fetch(PDO::FETCH_ASSOC)) {

        ?>
        <tr>
        <td><?php echo $data ['id_barang'] ?></td>
        <td><?php echo $data ['tanggal'] ?></td>
        <td><?php echo $data ['nama_barang'] ?></td>
        <td><?php echo $data ['stok_barang'] ?></td>
        <td><?php echo $data ['harga'] ?></td>
        <td><?php echo $data ['barang_masuk'] ?></td>
        <td><?php echo $data ['barang_keluar'] ?></td>
        <td><?php echo $data ['stok_akhir'] ?></td>
        <td> 
            <button class="btn btn-warning">
                <span data-feather="clipboard"></span></button>
            <button class="btn btn-success">
                <span data-feather="x-octagon"></span></button>
        </tr>
        <?php
        }
        ?>
            </tbody>
        </table>
    </div>
    </main>