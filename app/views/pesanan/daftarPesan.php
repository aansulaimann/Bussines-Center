<section class="detil">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
            <h5>Daftar Nomor Pesanan</h5>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Pesanan</th>
                            <th scope="col">Tanggal Pesanan</th>
                            <!-- <th scope="col">Tanggal Pesanan</th>
                            <th scope="col">Tanggal Pesanan</th>
                            <th scope="col">Tanggal Pesanan</th>
                            <th scope="col">Tanggal Pesanan</th> -->
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $data['pesan'] as $data ) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $data['noSp']; ?></td>
                            <td><?= $data['tglSp']; ?></td>
                            <td>
                                <a href="" class="badge badge-success p-2 btnPilih" onClick="sendValuePesan('<?= $data['noSp']; ?>', '<?= $data['tglSp']; ?>', '<?= $data['idDivisi']; ?>', '<?= $data['nmDivisi']; ?>', '<?= $data['Lantai']; ?>', '<?= $data['noTelp']; ?>', '<?= $data['kdJasa']; ?>', '<?= $data['nmJasa']; ?>', '<?= $data['lamaJasa']; ?>', '<?= $data['jmlJual']; ?>', '<?= $data['hrgJual']; ?>')">pilih</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>
</section>