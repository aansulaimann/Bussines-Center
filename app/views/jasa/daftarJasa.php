<section class="detil">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
            <h5>Daftar Detil Jasa</h5>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Jasa</th>
                            <th scope="col">Nama Jasa</th>
                            <th scope="col">Lama Jasa</th>
                            <th scope="col">Harga Jassa</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $data['jasa'] as $data ) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $data['kdJasa']; ?></td>
                            <td><?= $data['nmJasa']; ?></td>
                            <td><?= $data['lamaJasa']; ?></td>
                            <td><?= $data['hrgJasa']; ?></td>
                            <td>
                                <a href="" class="badge badge-success p-2 btnPilih" onClick="sendValueJasa('<?= $data['kdJasa']; ?>', '<?= $data['nmJasa']; ?>', '<?= $data['lamaJasa']; ?>', '<?= $data['hrgJasa']; ?>')">pilih</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>
</section>