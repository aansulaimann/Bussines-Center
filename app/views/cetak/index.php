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
            <h6>Form Cetak Nota</h6>
        </div>

        <form action="<?= BASEURL; ?>/Cetak/tambah" method="post" id="formPesanan">
        <!-- pesanan & jasa -->
            <div class="row" id="nota">
                <div class="col-lg-6">
                    <!-- <input type="hidden" name="Id" id="Id"> -->

                    <div class="cNota border border-light mt-3 p-2">
                        <div class="row">
                            <div class="col">
                                <label for="noNota" class="text-white">Nomor Nota</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-5" name="noNota" id="noNota"  autocomplete="off" value="<?php echo $data['nota']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="tglNota" class="text-white">Tanggal Nota</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-5" name="tglNota" id="tglNota" value="<?php echo date('Y-m-d'); ?>" readonly autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="cJasa border border-light p-2 mt-3 mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="noSp" class="text-white">Nomor Pesanan</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-5" name="noSp" id="noSp" autocomplete="off">
                                <button type="button" class="btn btn-light px-3 ml-2" onclick="window.open('<?= BASEURL; ?>/Pesanan/daftarPesan', 'newwindow', 'width=500, height=600'); return false;">Cari</button>
                                <button type="button" class="btn btn-light" id="btntambah">tambah</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="tglPesan" class="text-white">Tanggal Pesanan</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-4" name="tglPesan" id="tglPesan" style="margin-left:42px !important;" autocomplete="off">
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
        <!-- end row pesanan -->
        
        <!-- row divisi -->
            <div class="row divisi float-right" style="margin-top:-300px; margin-right:50px;" id="divisi">
                <!-- Divisi -->
                <div class="col">
                    <div class="cDivisi border border-light mt-3 py-5 pr-5 pl-2">
                        <div class="row">
                            <div class="col">
                                <label for="idDivisi" class="text-white">Id Divisi</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-5" name="idDivisi" id="idDivisi" autocomplete="off">
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
                                <label for="Alamat" class="text-white">Lantai Divisi</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-4" name="Alamat" id="Alamat" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="noTelp" class="text-white">Telepon Divisi</label>
                                <input type="text" class="rounded border-0 p-1 mt-3 ml-3" name="noTelp" id="noTelp" autocomplete="off">
                            </div>
                        </div>
                        <!-- total -->
                        <div class="total text-right" style="position:absolute; transform:translateY(420px);">
                            <div class="row ml-5">
                                <div class="col">
                                    <input type="hidden" id="kdJasa">
                                    <input type="hidden" id="nmJasa">
                                    <input type="hidden" id="lamaJasa">
                                    <input type="hidden" id="jmlJual">
                                    <input type="hidden" id="hrgJual">

                                    <label for="totalBayar" class="text-white">Total Harga</label>
                                    <input type="text" name="totalHarga" id="totalBayar" class="rounded px-2 py-1 border-0 ml-2" autocomplete="off" readonly>
                                </div>
                            </div>
                        </div>
                    <!-- end total -->
                    </div>
                </div>
        <!-- end row divisi -->
                
            </div>

        <!-- row table -->
            <div class="row mt-5" style="margin-top:-200px" id="tblDetil">
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
                        <tbody class="tbody text-white" id="tbody">
                        </tbody>
                    </table>
                </div>
            </div> 
        <!-- end row table -->
        <!-- row button -->
            <div class="row mt-5 text-center" style="postition:aboslute; margin-top: 250px !important">
                <div class="col">
                    <button type="submit" class="btn btn-light py-3 px-4" onclick="window.print();">Cetak</button>
                    <button type="reset" class="btn btn-light py-3 px-4 ml-3">Batal</button>
                    <a href="<?= BASEURL; ?>" class="btn btn-light px-4 py-3 ml-3">Keluar</a>
                </div>
            </div>
        <!-- end button -->

        </form>
    </div>
</section>