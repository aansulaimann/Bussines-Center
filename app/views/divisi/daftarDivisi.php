<section class="detil">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
            <h5>Daftar Detil Divisi</h5>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Divisi</th>
                            <th scope="col">Nama Divisi</th>
                            <th scope="col">Lantai</th>
                            <th scope="col">No Telpon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $data['divisi'] as $data ) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $data['idDivisi']; ?></td>
                            <td><?= $data['nmDivisi']; ?></td>
                            <td><?= $data['Lantai']; ?></td>
                            <td><?= $data['noTelp']; ?></td>
                            <td>
                                <a href="" onClick="sendValue('<?= $data['idDivisi']; ?>', '<?= $data['nmDivisi']; ?>', '<?= $data['Lantai']; ?>', '<?= $data['noTelp']; ?>');" class="badge badge-success p-2 btnPilih">pilih</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>
</section>