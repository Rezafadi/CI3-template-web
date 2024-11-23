<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Sistem Pakar CBR</h1>
        <p class="lead">Aplikasi Sistem Pakar Diagnosa Gangguan Pencernaan<br> Metode Case Based Reasoning (CBR) Dengan Algoritma Similarity Value</p>
    </div>
</div>

<!-- Container -->
<div class="container">
    <!-- Panel -->
    <div class="row justify-content-center">
        <div class="col-lg-10 info-panel">
            <div class="row">
                <div class="col-lg">
                    <h5>Bagaimana <span>Sistem Pakar CBR</span> Bekerja?</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <img class="float-left" src="<?= base_url('assets/img/user.png'); ?>" alt="Login">
                    <h4>Pakar/Admin</h4>
                    <p>Pakar menginput data penyakit & gejala pada gangguan sistem Pencernaan yang akan di gunakan sistem.</p>
                </div>
                <div class="col-lg">
                    <img class="float-left" src="<?= base_url('assets/img/konsul.png'); ?>" alt="Konsul">
                    <h4>User/Pengguna</h4>
                    <p>Pengguna melakukan konsul / memberikan masukan gejala-gejala yang dialami pada halaman konsul.</p>
                </div>
                <div class="col-lg">
                    <img class="float-left" src="<?= base_url('assets/img/result.png'); ?>" alt="Hasil">
                    <h4>Hasil Analisa</h4>
                    <p>Pengguna mendapatkan hasil dari sistem sesuai dengan basis pengetahuan dan peritungan CBR.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Panel -->

    <!-- Informasi Penyakit -->
    <div class="row informasi">
        <div class="col">
            <img src="<?= base_url('assets/img/informasi.png'); ?>" alt="infopenyakit" class="img-fluid">
        </div>
        <div class="col ml-2">
            <h3>Apa Itu <span>Sistem Pakar CBR</span>?</h3>
            <p>Sistem Pakar CBR merupakan sebuah sistem informasi yang dapat membantu pengguna atau orang - orang dalam berkonsultasi untuk mendiagnosa awal gangguan Pencernaan. Sistem Pakar CBR menggunakan Metode Case Based Reasoning Dengan Algoritma Similarity Value.</p>
            <a href="<?php echo base_url('informasi'); ?>" class="btn btn-sm btn-primary infobtn"><i class="fas fa-info-circle"></i> Info Penyakit</a>
        </div>
    </div>
    <!-- End Of -->

</div>
<!-- End Of Container -->


</div>
<!-- End of Main Content -->


<!-- Footer -->
<footer class="sticky-footer bg-success mt-5">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>&copy;2021 <a href="http://mycoding.net">
                    <font color="#FFF">MC Project</font>
                </a></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->


</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>