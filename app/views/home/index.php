<section class="header">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                
                <div class="card bg-primary" style="height:350px;">
                    <div class="card-body">

                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">Business Center</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="master" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Master
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="master">
                                            <a class="dropdown-item" href="<?= BASEURL; ?>/Divisi">Form Entry Divisi</a>
                                            <a class="dropdown-item" href="<?= BASEURL; ?>/Jasa">Form Entry Jasa</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="transaksi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Transaksi
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="transaksi">
                                            <a class="dropdown-item" href="<?= BASEURL; ?>/Pesanan">Form Entry Pesanan</a>
                                            <a class="dropdown-item" href="<?= BASEURL; ?>/Cetak">Form Cetak Nota</a>
                                        </div>
                                    </div>
                                    <a href="<?= BASEURL; ?>/Login/logout" class="btn btn-danger" style="margin-left:180px;">Log Out</a>
                               </div>
                            </div>
                        </nav>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>