<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:login.php');
}else{
?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/projects-create.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 15:46:42 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Ajouter Produits </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- dropzone css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
            <?php include("includes/header.php") ?>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <?php include("includes/sidebar.php") ?>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Ajouter_produit</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Fiore</a></li>
                                            <li class="breadcrumb-item active">Ajouter_produit</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Ajouter Produits</h4>
                                        <form action="Controller/ajouter_produit.php" method="post">

                                            <div class="form-group row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Titre</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="titre" type="text" class="form-control" 
                                                    placeholder="Titre">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Description</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="description" type="text" class="form-control" 
                                                    placeholder="Description">
                                                </div>
                                            </div>



                                            <div class="form-group row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">produit</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="produit" type="text" class="form-control" 
                                                    placeholder="Produit">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">code_produit</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="code_produit" type="text" class="form-control" 
                                                    placeholder="Code_produit">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">poids</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="poids" type="text" class="form-control" 
                                                    placeholder="Poids">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Code_Ean</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="code_ean" type="text" class="form-control" 
                                                    placeholder="Code EAN">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">DLC</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="dlc" type="text" class="form-control" 
                                                    placeholder="DLC">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Categorie</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="catagorie" type="text" class="form-control" 
                                                    placeholder="Categorie">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Categorie2</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="catagorie2" type="text" class="form-control" 
                                                    placeholder="Categorie2">
                                                </div>
                                            </div>


                                            

                                            

                                            
                                        
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">
                                                <button type="submit" name="modifier" class="btn btn-primary">Ajouter</button>
                                            </div>
                                        </div>
</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php include("includes/footer2.php") ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- bootstrap datepicker -->
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <!-- dropzone plugin -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/projects-create.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 15:46:43 GMT -->
</html>
<?php } ?>