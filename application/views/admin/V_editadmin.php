<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $sub_judul; ?></h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?= $sub_judul; ?></h6>
    </div>
    <div class="card-body">
      <form class="form-group" method="post" action="">
        <div class="row">
          <div class="col-md-1">
            <div class="form-group">
              <!-- <label for="formGroupExampleInput">Id Admin</label> -->
              <input hidden type="text" class="form-control col-md-lg" name="id_admin" id="id_admin" value="<?= $admin['id_admin']; ?>">
            </div>
          </div>

          <div class="col-md-10">
            <div class="form-group">
              <div class="form-group">
                <label for="formGroupExampleInput">Username</label>
                <input type="text" class="form-control col-md-lg" name="username" id="username" value="<?= $admin['username']; ?>">

                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-1">
            <div class="form-group">
              <!-- <label for="formGroupExampleInput2">Old Password</label> -->
              <!-- <input hidden type="text" rows="4" class="form-control col-md-lg" name="password" id="password" value="<?= $admin['password']; ?>"> -->

            </div>
          </div>

          <div class="col-md-10">
            <div class="form-group position-relative">
              <label for="formGroupExampleInput2">Old Password</label>
              <input type="password" rows="4" class="form-control col-md-lg" name="password" id="password">
              <i class="far fa-eye-slash position-absolute" id="togglePassword" style="top: 45px; right: 15px; cursor: pointer; font-size: 15px"></i>
              <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-1">
            <div class="form-group">
              <!-- <label for="formGroupExampleInput2">Old Password</label> -->
              <!-- <input hidden type="password" rows="4" class="form-control col-md-lg" name="password" id="password"> -->

            </div>
          </div>

          <div class="col-md-5">
            <div class="form-group position-relative">
              <label for="formGroupExampleInput2">New Password</label>
              <input type="password" rows="4" class="form-control col-md-lg" name="password2" id="password2">
              <i class="far fa-eye-slash position-absolute" id="toggleNewPassword" style="top: 45px; right: 15px; cursor: pointer; font-size: 15px"></i>
              <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>

          <div class="col-md-5">
            <div class="form-group position-relative">
              <label for="formGroupExampleInput2">New Password 2</label>
              <input type="password" rows="4" class="form-control col-md-lg" name="password3" id="password3">
              <i class="far fa-eye-slash position-absolute" id="toggleNewPassword2" style="top: 45px; right: 15px; cursor: pointer; font-size: 15px"></i>
              <?= form_error('password3', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        </div>
    </div>
    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-paper-plane"></i> Simpan</button>
    </form>
  </div>
</div>
</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="alertModalLabel">Alert</h5>
      </div>
      <div class="modal-body">
        <?php if ($this->session->flashdata('error')) : ?>
          <?= $this->session->flashdata('error'); ?>
        <?php endif; ?>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Include Bootstrap CSS and JS, and jQuery -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    <?php if ($this->session->flashdata('error')) : ?>
      $('#alertModal').modal('show');
    <?php endif; ?>
  });
</script>

<script>
  document.getElementById('togglePassword').addEventListener('click', function(e) {
    const password = document.getElementById('password');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye');
  });
</script>

<script>
  document.getElementById('toggleNewPassword').addEventListener('click', function(e) {
    const password = document.getElementById('password2');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye');
  });
</script>

<script>
  document.getElementById('toggleNewPassword2').addEventListener('click', function(e) {
    const password = document.getElementById('password3');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye');
  });
</script>

<!-- End of Main Content -->