<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pemesanan Offline</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
                <div class="row">
                    <div class="col-8">
                    <div class="row">
                            <?php foreach ($masakan as $key => $value):  $id_menu = $value['id_menu']; ?>
                                <div class="col-6">
                                    <div class="card">
                                    <div class="card-img">
                <?php
                $getGambar = $this->db->query("SELECT * FROM gambar_menu WHERE id_menu = $id_menu LIMIT 1");
                foreach ($getGambar->result_array() as $gambarm) {
                  $gambar = $gambarm['gambar'];
                }
                ?>
                <img class="card-img-top img-fluid p-2" src="<?php echo base_url('assets/dataresto/menu/' . $gambar) ?>" />
              </div>
                                        <div class="card-body text-center" id="<?= $value['id_menu'] ?>">
                                            <h3 class="card-title mb-2"><?= $value['nama_menu'] ?></h3>
                                            <h6 class="card-title mb-2"><?= $value['detail_menu'] ?></h6>
                                            <span class="text-dark">Rp. <span class="harga"><?= number_format($value['harga'], 0, ',', '.') ?></span></span>
                                            <div class="input-group mt-3">
                                                <input type="number" class="form-control" placeholder="0" min="0">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary tambah" disabled>Tambah</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                    </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header">Data Pesanan</h5>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item kosong">Kosong</li>
                                </ul>
                                 <div class="form-group mt-3">
                                    <select name="id_meja" id="id_meja" class="form-control form-control-md" required>
                                            <option value="" class="d-none">Pilih No Meja</option>
                                            <?php foreach ($meja as $key => $value): ?>
                                                <option value="<?= $value['id_meja'] ?>">Meja No : <?= $value['nomor_meja'] ?>(Kapasitas : <?= $value['kapasitas_meja'] ?>)</option>
                                            <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="input-group mt-3">
                                                <input type="text" id="tanggal_reservasi" name="tanggal_reservasi" class="form-control" placeholder="Tanggal Pesan" value="<?= date('d M Y') ?>">
                                            </div>
                                <div class="input-group mt-3">
                                                <input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control" placeholder="Atas Nama">
                                            </div>
                                <div class="input-group mt-3">
                                                <input type="text" id="notes" name="notes" class="form-control" placeholder="Notes">
                                            </div>
                            </div>
                            <div class="card-footer">
                                <button  class="btn btn-primary btn-block bayar" disabled>Bayar</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <script>
        let transaksi_url = '<?= base_url() ?>penjualan/proses'
    </script>
    <script src="<?= base_url() ?>assets/auth/js/pesan.js"></script>
