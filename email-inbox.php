
<?php
//session_start();
include("includes/connect_db.php");

$req = $bdd->query("SELECT * FROM message_contact ");
$donnees = $req->fetch();
 ?>
 <?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:login.php');
}else{
?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/email-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 15:46:34 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Boite de Recepition </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Summernote css -->
        <link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-0 font-size-18">Boite</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                            <li class="breadcrumb-item active">Boite</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        <?php 
                      if (isset($_GET['resultat'])) {

                       if ($_GET['resultat'] == 'ouiSupp') {
                      ?>

                          <br><div class="container"><div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    
                                    Message modifier avec succes.
                                    
                                    </div></div>

                          <?php  }else{ ?>
                            <div class=""></div>
                          <?php } 
                            }?>
                        <div class="row">
                            <div class="col-12">
                                <!-- Left sidebar -->
                                <div class="email-leftbar card">
                                    
                                    <button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-toggle="modal" data-target="#composemodal">
                                    <a href="Controller/supp_message.php?id=<?php echo $donnees['id']; ?>">Supprimer</a>

                                    </button>
                                    
                                   
                                                                    </div>
                                <!-- End Left sidebar -->
        
        
                                <!-- Right Sidebar -->
                                <div class="email-rightbar mb-3">
                                    
                                    <div class="card">
                                        <div class="btn-toolbar p-3" role="toolbar">
                                            <div class="btn-group mr-2 mb-2 mb-sm-0">
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
                                            </div>
                                            <div class="btn-group mr-2 mb-2 mb-sm-0">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ml-1"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mr-2 mb-2 mb-sm-0">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ml-1"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>
            
                                            <div class="btn-group mr-2 mb-2 mb-sm-0">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    More <i class="mdi mdi-dots-vertical ml-2"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Mark as Unread</a>
                                                    <a class="dropdown-item" href="#">Mark as Important</a>
                                                    <a class="dropdown-item" href="#">Add to Tasks</a>
                                                    <a class="dropdown-item" href="#">Add Star</a>
                                                    <a class="dropdown-item" href="#">Mute</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="message-list">
                                            <?php while($donnees = $req->fetch()){ ?>
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk19">
                                                        <label for="chk19" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title"><?php echo $donnees['email']; ?></a><span class="star-toggle far fa-star"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="#" class="subject"><?php echo $donnees['objet']; ?> – <span class="teaser"><?php echo $donnees['message']; ?></span>
                                                    </a>
                                                    <div class="date">Mar 6</div>
                                                </div>
                                            </li>
                                            <?php } ?>
                
                                            
        
                                        </ul>
        
                                    </div> <!-- card -->
        
                                    <div class="row">
                                        <div class="col-7">
                                            Showing 1 - 20 of 1,524
                                        </div>
                                        <div class="col-5">
                                            <div class="btn-group float-right">
                                                <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
        
                                </div> <!-- end Col-9 -->
        
                            </div>
        
                        </div><!-- End row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal -->
                <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="To">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <div class="summernote">
                                            <h6>Hello Summer note</h6>
                                            <ul>
                                                <li>
                                                    Select a text to reveal the toolbar.
                                                </li>
                                                <li>
                                                    Edit rich document on-the-fly, so elastic!
                                                </li>
                                            </ul>
                                            <p>
                                                End of air-mode area
                                            </p>

                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send <i class="fab fa-telegram-plane ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                
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

        <!-- Summernote js -->
        <script src="assets/libs/summernote/summernote-bs4.min.js"></script>

        <!-- email summernote init -->
        <script src="assets/js/pages/email-summernote.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/email-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 15:46:35 GMT -->
</html>
<?php } ?>