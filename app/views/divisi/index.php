<!-- <?php require_once('../app/views/divisi/daftarDivisi.php'); ?> -->

<section class="divisi">
    <div class="container">

        <div class="row mt-5 justify-content-center">
            <div class="col-8">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-8">
                
                <div class="card bg-primary" style="height:350px;">
                    <div class="card-body">
                        <div class="head bg-light p-1 rounded" style="margin-top:-22px;">
                            <h6>Form Entry Divisi</h6>
                        </div>
                        <form action="<?= BASEURL; ?>/Divisi/tambah" method="post" id="formDivisi">
                        
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="idDivisi" class="mr-5 text-white">ID Divisi</label>
                                    <input type="text" class="idDivisi ml-5 rounded border-0 py-1" id="idDivisi" autocomplete="off" name="idDivisi" value="<?php echo $data['divisi'];?>" readonly>  
                                    <a href="<?= BASEURL; ?>/Divisi/daftarDivisi" onclick="window.open('<?= BASEURL; ?>/Divisi/daftarDivisi', 'newwindow', 'width=600,height=600'); return false;" class="btn btn-light ml-4 px-4">Cari</a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="nmDivisi" class="mr-4 text-white">Nama Divisi</label>
                                    <input type="text" class="nmDivisi ml-5 rounded border-0 py-1" id="nmDivisi" autocomplete="off" name="nmDivisi">  
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="Lantai" class="mr-5 text-white">Lantai</label>
                                    <input type="text" class="Lantai ml-5 rounded border-0 py-1" id="Lantai" style="margin-left:65px !important;" autocomplete="off" name="Lantai">  
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="noTelp" class="mr-5 text-white">No Telp</label>
                                    <input type="text" class="noTelp ml-5 rounded border-0 py-1" id="noTelp" style="margin-left:55px !important;" autocomplete="off" name="noTelp">  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-light mt-5 mr-4 px-4 py-2">Simpan</button>
                                    <button type="submit" class="btn btn-light mt-5 mr-4 px-4 py-2" id="btnUbah">
                                    Ubah</button>
                                    <button type="submit" onClick="confirm('yakin?');" class="btn btn-light mt-5 mr-4 px-4 py-2" id="href">Hapus</button>
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
