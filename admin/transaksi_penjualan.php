<?php
include 'header.php'
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Transaksi Penjualan</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body">
        <?php date_default_timezone_set("Asia/Bangkok"); ?>
        <form action="#" method="POST">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Tangggal Transaksi" name="tgl" value="<?php echo date('Y-m-d') ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            +
                        </button>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Kode Barang" name="kode">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama Barang" name="nama">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Satuan Barang" name="satuan">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Harga Barang" name="harga">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Jumlah Barang" name="jml">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<?php
include 'footer.php'
?>