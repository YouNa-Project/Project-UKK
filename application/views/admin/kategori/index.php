<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
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
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Kategori</h3>
                </div>
                <div class="col-lg-12">
                    <?= $this->session->flashdata('message'); ?>
                    <?php if ($this->session->flashdata('error')) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('error') ?>
                        </div>
                    <?php
                    } ?>
                    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahkategorimodal"><i class="fa fa-plus"></i> Tambah Kategori</button>
                    <div class="table-responsive">
                        <table class="table table-flush dataTable" id="datatable-id" role="grid" aria-describedby="datatable-basic_info">
                            <thead class="thead-dark">
                                <tr role="row">
                                    <th>Id Kategori</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($kategori as $k) {
                                ?>
                                    <tr>
                                        <td><?= $k['id_kategori'] ?></td>
                                        <td><?= $k['kategori'] ?></td>
                                        <td>
                                            <button data-toggle="modal" data-target="#editkategorimodal" onclick="edit_kategori(<?= $k['id_kategori'] ?>)" class="btn btn-sm btn-warning">Edit</button>
                                            <a href="<?= base_url() ?>kategori/hapus/<?= $k['id_kategori'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Kategori <?= $k['kategori'] ?>?');" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahkategorimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>kategori/tambah" method="POST">
                    <div class="form-group">
                        <label>Id Kategori</label>
                        <input type="number" class="form-control" placeholder="1A" name="id_kategori" required>
                        <label>Kategori</label>
                        <input type="text" min="0" class="form-control" placeholder="0" name="kategori" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editkategorimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori <span id="kategori_title"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>kategori/edit" method="POST">
                    <div class="form-group">
                        <input type="hidden" id="idkategori_edit" name="id_kategori" required>
                        <label>Kategori</label>
                        <input type="text" min="0" id="kategori_edit" class="form-control" placeholder="0" name="kategori" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Edit Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function edit_kategori(id) {
        $.ajax({
            type: 'POST',
            url: `<?= base_url() ?>kategori/get_kategori_by_id/${id}`,
            dataType: 'json',
            success: (hasil) => {
                document.getElementById("idkategori_edit").value = hasil.id_kategori;
                document.getElementById("kategori_edit").value = hasil.kategori;
                $('#kategori_title').html(hasil.id_kategori)
            }
        });
    }
</script>