<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="../asset/img/logo.png" rel="icon"> -->
    <title>E-Arsip-Dashboard</title>
    <link href="../asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../asset/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('master.sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('master.topbar')
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content -->
                    <div class="profile-list mt-5  align-content-center">
                        <div class="wrapper-profile row">
                            <div class="col-md-2 ">
                                <!-- <img src="logo2.png" alt="" width="200"> -->
                            </div>
                            <div class="col-md-5 col-ce">
                                
                            </div>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Modal Logout -->
                    

                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            @include('master.footer')
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="../asset/vendor/jquery/jquery.min.js"></script>
    <script src="../asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../asset/js/ruang-admin.min.js"></script>
</body>

</html>
