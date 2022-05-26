<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <?php 
            include_once "../database/database.php";

            if (isset($_POST['button_simpan'])){
            // print_r($_POST);

            $id_barang = $_POST['id_barang'];
            $tanggal = $_POST ['tanggal'];
            $nama_barang = $_POST ['nama_barang'];
            $stok_barang = $_POST ['stok_barang'];
            $harga = $_POST ['harga'];
            $barang_masuk = $_POST ['barang_masuk'];
            $barang_keluar = $_POST ['barang_keluar'];
            $stok_akhir = $_POST ['stok_akhir'];

            // $insertSQL = "INSERT INTO barang VALUES ('".$id_barang."','".$tanggal."','".$nama_barang."','".$stok_barang."', '".$harga."','".$barang_masuk."','".$barang_keluar."','".$stok_akhir."')";

            $insertSQL = "INSERT INTO barang VALUES (?,?,?,?,?,?,?,?)";

            $database = new Database();
            $connection = $database->getConnection();
            $statement = $connection->prepare($insertSQL);
            $statement->bindParam(1, $id_barang);
            $statement->bindParam(2, $tanggal);
            $statement->bindParam(3, $nama_barang);
            $statement->bindParam(4, $stok_barang);
            $statement->bindParam(5, $harga);
            $statement->bindParam(6, $barang_masuk);
            $statement->bindParam(7, $barang_keluar);
            $statement->bindParam(8, $stok_akhir);
            $statement->execute();

            header ('Location: main.php?page=barang');
            }
            ?>
    </div>
</div>
    <div>
        <form action="" method="post">
        <div class="mb-3">
            <label for="id_barang" class="form-label">ID Barang</label>
            <input type="text" class="form-control" id="id_barang" name="id_barang">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" >
        </div>
        <div>
            <label for="nama_barang" class="form-label">Nama Barang </label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" >
        </div>
        <div class="mb-3">
            <label for="stok_barang" class="form-label">Stok Barang</label>
            <input type="text" class="form-control" id="stok_barang" name="stok_barang" >
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" >
        </div>
        <div class="mb-3">
            <label for="barang_masuk" class="form-label">Barang Masuk</label>
            <input type="text" class="form-control" id="barang_masuk" name="barang_masuk" >
        </div>
        <div class="mb-3">
            <label for="barang_keluar" class="form-label">Barang Keluar</label>
            <input type="text" class="form-control" id="barang_keluar" name="barang_keluar" >
        </div>
        <div class="mb-3">
            <label for="stok_akhir" class="form-label">Stok Akhir</label>
            <input type="text" class="form-control" id="stok_akhir" name="stok_akhir" >
        </div>
            <button class="btn btn-primary" type="submit" name="button_simpan"><span data-feather="database"></span> Simpan </button>
        </form>
    </div>
</main>