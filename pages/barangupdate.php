<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <?php
            include_once "../database/database.php";

            $id = $_GET['id-barang'];
            echo $id_barang;
            $findSQL = "SELECT * FROM barang WHERE id_barang = ?";
            $database = new Database();
            $connection = $database->getConnection();
            $statement = $connection->prepare($findSQL);
            $statement->bindParam(1, $id);
            $statement->execute();
            $data = $statement->fetch();

            if (isset($_POST['button_simpan'])) {
                $id_barang = $_POST['id_barang'];
                $nama_barang = $_POST['nama_barang'];
                $stok_barang = $_POST['stok_barang'];
                $harga = $_POST['harga'];
                $barang_masuk = $_POST['barang_masuk'];
                $barang_keluar = $_POST['barang_keluar'];
                $stok_akhir = $_POST['stok_akhir'];

                $updateSQL = "UPDATE `barang` SET `nama_barang` = ?, `stok_barang` = ?, `harga` = ?, `barang_masuk` = ?, 'barang_keluar' = ?, 'stok_akhir' = ? WHERE `barang`.`id_barang` = ?";

                $database = new Database();
                $connection = $database->getConnection();
                $statement = $connection->prepare($updateSQL);
                $statement->bindParam(1, $nama_barang);
                $statement->bindParam(2, $stok_barang);
                $statement->bindParam(3, $harga);
                $statement->bindParam(4, $barang_masuk);
                $statement->bindParam(5, $barang_keluar);
                $statement->bindParam(4, $stok_akhir);
                $statement->bindParam(5, $id_barang);
                $statement->execute();

                header('Location: main.php?page=barang');
            }
            ?>
        </div>
    </div>
    <div>
        <form action="" method="post">
            <!-- <div class="mb-3">
                <label for="id_barang" class="form-label">Id Barang</label>
                <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $data['id_barang'] ?>" readonly>
            </div> -->
            <input type="hidden"  id="id_barang" name="id_barang" value="<?php echo $data['id_barang'] ?>" readonly>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="stok_barang" class="form-label">Stok Barang </label>
                <input type="text" class="form-control" id="stok_barang" name="stok_barang" value="<?php echo $data['stok_barang'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga </label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $data['harga'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="barang_masuk" class="form-label">Barang Masuk </label>
                <input type="text" class="form-control" id="barang_masuk" name="barang_masuk" value="<?php echo $data['barang_masuk'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="barang_keluar" class="form-label">Barang Keluar </label>
                <input type="text" class="form-control" id="barang_keluar" name="barang-keluar" value="<?php echo $data['barang_keluar'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="stok_akhir" class="form-label">Stok Akhir </label>
                <input type="text" class="form-control" id="stok_akhir" name="stok_akhir" value="<?php echo $data['stok_akhir'] ?>" required>
            </div>
            <button class="btn btn-success" type="submit" name="button_simpan"><span data-feather="database"></span> Simpan</button>
        </form>
    </div>
</main>