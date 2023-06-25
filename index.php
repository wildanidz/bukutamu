<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Sistem Informasi Buku Tamu</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="absensi/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="absensi/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="absensi/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="absensi/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="absensi/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="absensi/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="absensi/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="absensi/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="absensi/assets/js/config.js"></script>
  </head>

  <body>
    
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Login</h5>
            <small class="text-muted float-end">Login</small>
        </div>
        <div class="card-body">
            <form action="proses.php" method="POST">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="basic-default-name" placeholder="112233" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="basic-default-name" placeholder="112233" />
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">Copyright ©
            <script>document.write(new Date().getFullYear());</script> pro.art production
        </div>
    </div>
</footer>
    <!-- / Footer -->
<div class="content-backdrop fade"></div>
</div>
    <!-- Content wrapper -->
</div>
    <!-- / Layout page -->
</div>
    <!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
<script src="absensi/assets/vendor/libs/jquery/jquery.js"></script>
<script src="absensi/assets/vendor/libs/popper/popper.js"></script>
<script src="absensi/assets/vendor/js/bootstrap.js"></script>
<script src="absensi/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="absensi/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
<script src="absensi/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>