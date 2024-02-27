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
                   <div class="col">
                        <div class="card">
                            <div class="card-header p-4">
                                <div class="float-right"> <h3 class="mb-0">Invoice #1</h3>
                                Date: <?php echo date('d M, Y') ?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="font-weight: bold;">Nama Pemesan : </label>
                                    <label id="date"><?php echo $nama ?></label><br>
                                    <label style="font-weight: bold;">Tanggal Pesan : </label>
                                    <label id="date"><?php echo $tanggal_reservasi ?></label><br>
                                </div>
                                <div class="col lg-12">
                    <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="tabel_pos">
                                <thead class="table-dark">
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Item</th>
                                                <th class="right">Unit Cost</th>
                                                <th class="center">Qty</th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($masakan as $key => $value): ?>
                                                <tr>
                                                    <td><?php echo $key+1 ?></td>
                                                    <td><?php echo $value ?></td>
                                                    <td><?php echo $harga[$key] ?></td>
                                                    <td><?php echo $qty[$key] ?></td>
                                                    <td><?php echo $harga[$key] * $qty[$key] ?></td>
                                                </tr>
                                            <?php $total[] = $harga[$key] * $qty[$key] ?>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-4 mt-4 ml-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                            <tr>
                                                    <td class="left">
                                                        <strong class="text-dark">Notes</strong>
                                                    </td>
                                                    <td class="right">
                                                        <strong class="text-dark"><?php echo $notes ?></strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        <strong class="text-dark">No Meja</strong>
                                                    </td>
                                                    <td class="right">
                                                        <strong class="text-dark"><?php echo $id_meja ?></strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        <strong class="text-dark">Total</strong>
                                                    </td>
                                                    <td class="right">
                                                        <strong class="text-dark">Rp <?php echo array_sum($total) ?></strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><a href="" class="btn btn-primary btn-block simpan">Simpan</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

    <script>
        $('.simpan').attr('href', `<?php echo site_url('penjualan/add') ?>${window.location.search}`)
    </script>