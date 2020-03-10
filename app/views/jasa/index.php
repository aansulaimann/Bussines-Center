<section class="jasa">
    <div class="container">            
        <div class="row mt-5 justify-content-center">
            <div class="col-8">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row justify-content-center mt-3s">
            <div class="col-8">
                
                <div class="card bg-primary" style="height:350px;">
                    <div class="card-body">
                        <div class="head bg-light p-1 rounded" style="margin-top:-22px;">
                            <h6>Form Entry Jasa</h6>
                        </div>

                        <form action="<?= BASEURL; ?>/Jasa/tambah" method="post" id="formJasa">
                        <input type="hidden" name="Id" id="Id">
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="kdJasa" class="mr-5 text-white">Kode Jasa</label>
                                    <input type="text" class="kdJasa ml-5 rounded border-0 py-1" id="kdJasa" style="margin-left:56px !important;" autocomplete="off" name="kdJasa" value="<?php echo $data['jasa']?>" readonly>
                                    <a href="<?= BASEURL; ?>/Jasa/daftarJasa" onclick="window.open('<?= BASEURL; ?>/Jasa/daftarJasa', 'newwindow', 'width=600,height=600'); return false;" class="btn btn-light ml-4 px-4">Cari</a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="nmJasa" class="mr-5 text-white">Nama Jasa</label>
                                    <input type="text" class="nmJasa ml-5 rounded border-0 py-1" id="nmJasa" style="margin-left:53px !important;" autocomplete="off" name="nmJasa">  
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="lmJasa" class="mr-5 text-white">Lama Jasa</label>
                                    <input type="text" class="lmJasa ml-5 rounded border-0 py-1" id="lamaJasa" style="margin-left:58px !important;" autocomplete="off" name="lamaJasa">  
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="hrgJasa" class="mr-5 text-white">Harga Jasa</label>
                                    <input type="text" class="hrgJasa ml-5 rounded border-0 py-1" id="hrgJasa" style="margin-left:55px !important;" autocomplete="off" name="hrgJasa">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-light mt-5 mr-4 px-4 py-2">Simpan</button>
                                    <button type="submit" class="btn btn-light mt-5 mr-4 px-4 py-2" id="btn-ubah">
                                    Ubah</button>
                                    <button type="submit" class="btn btn-light mt-5 mr-4 px-4 py-2" id="btnHapus" onClick="confirm('yakin data mau dihapus?');">Hapus</button>
                                    <button type="reset" class="btn btn-light mt-5 mr-4 px-4 py-2">Batal</button>
                                    <a href="<?= BASEURL; ?>" class="btn btn-light mt-5 mr-4 px-4 py-2">Keluar</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>