<section class="pesanan">
    <div class="flasher">
        <div class="row justify-content-center">
            <div class="col-lg-8 mt-3">
                <?php Flasher::flash(); ?> 
            </div>
        </div>
    </div>
    <div class="container bg-primary mt-5 rounded mb-5 pb-5" style="height:900px;">
        <div class="head bg-light p-1 rounded" style="margin-top:-22px;">
            <h6>Form Entry Pesanan</h6>
        </div>
        <form action="<?= BASEURL; ?>/Pesanan/tambah" method="post" id="formPesanan">
        <!-- pesanan & jasa -->
            <div class="row">
                <div class="col-lg-6">
                    <input type="hidden" name="Id" id="Id">

                    <div class="cPesan border border-light mt-3 p-2">
                        <div class="row">
                            <div class="col">
                                <label for="noSp" class="text-white">Nomor Pesanan</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-5" name="noSp" id="noSp"  autocomplete="off" value="<?php echo $data['auto']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="tglPesan" class="text-white">Tanggal Pesanan</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-5" name="tglPesan" id="tglPesan" value="<?php echo date('Y-m-d'); ?>" readonly autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="cJasa border border-light p-2 mt-3 mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="kdJasa" class="text-white">Kode Jasa</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-5" name="kdJasa" id="kdJasa" autocomplete="off">
                                <button type="button" class="btn btn-light px-3 ml-2" onclick="window.open('<?= BASEURL; ?>/Jasa/daftarJasa', 'newwindow', 'width=500, height=600'); return false;">Cari</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nmJasa" class="text-white">Nama Jasa</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-4" name="nmJasa" id="nmJasa" style="margin-left:42px !important;" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="lamaJasa" class="text-white">Lama Jasa</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-5" name="lamaJasa" id="lamaJasa" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="hrgJasa" class="text-white">Harga Jasa</label>
                                <input type="number" class="rounded border-0 p-1 mt-3 ml-4" name="hrgJasa" id="hrgJasa" style="margin-left:43px !important;" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="hrgJual" class="text-white">Harga Pesan</label>
                                <input type="number" class="rounded border-0 p-1 mt-3 ml-4" name="hrgJual" id="hrgJual" style="margin-left:30px !important;" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="jmlJual" class="text-white">Jumlah Pesan</label>
                                <input type="number" class="rounded border-0 p-1 mt-3 ml-4" name="jmlJual" id="jmlJual" autocomplete="off">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <button type="button" class="btn btn-light px-3 py-2 mr-3 ml-5" id="btntambah">Tambah</button>
                                <button type="submit" class="btn btn-light px-4 py-2" id="btn-hapus">Hapus</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
        <!-- end row pesanan -->
        
        <!-- row divisi -->
            <div class="row divisi float-right" style="margin-top:-570px; margin-right:50px;">
                <!-- Divisi -->
                <div class="col">
                    <div class="cDivisi border border-light mt-3 py-5 pr-5 pl-2">
                        <div class="row">
                            <div class="col">
                                <label for="idDivisi" class="text-white">Id Divisi</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-5" name="idDivisi" id="idDivisi" autocomplete="off">
                                <button type="button" class="btn btn-light px-3 ml-3" onclick="window.open('<?= BASEURL; ?>/Divisi/daftarDivisi', 'newwindow', 'width=600, height=600'); return false;">Cari</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nmDivisi" class="text-white">Nama Divisi</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-3" name="nmDivisi" id="nmDivisi" style="margin-left:23px !important;" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="Lantai" class="text-white">Lantai Divisi</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-4" name="Lantai" id="Lantai" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="noTelp" class="text-white">Telepon Divisi</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-3" name="noTelp" id="noTelp" autocomplete="off">
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col">
                                <button type="submit" class="btn btn-light py-3 px-4">Simpan</button>
                                <button type="reset" class="btn btn-light py-3 px-4 ml-3">Batal</button>
                                <a href="<?= BASEURL; ?>" class="btn btn-light px-4 py-3 ml-3">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- end row divisi -->
            </div>
        </form>

        <!-- row table -->
            <div class="row mt-4">
                <!-- table isi data -->
                <div class="col">
                    <table class="table border border-light">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Kode Jasa</th>
                                <th scope="col">Nama Jasa</th>
                                <th scope="col">Lama Jasa</th>
                                <th scope="col">Jumlah Pesan</th>
                                <th scope="col">Harga Pesan</th>
                                <th scope="col">Jumlah Harga</th>
                            </tr>
                        </thead>
                        <tbody class="tbody text-white">
                        </tbody>
                    </table>
                </div>
            </div> 
        <!-- end row table -->

    </div>
</section>