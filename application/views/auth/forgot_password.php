<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Title</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('assets/backend/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/backend/css/sb-admin-2.min.css');?>" rel="stylesheet">

    <!-- aleret -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6 my-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?php echo lang('forgot_password_heading');?></h1>
                                    </div>
                                    <?php if(isset($message)){ ?>
                                      <script>
                                          swal({
                                                title: "Grownesia Alert",
                                                text: "<?=$message;?>",
                                                icon: "warning",
                                                button: "Ashiaapp!",
                                          });
                                      </script>
                                    <?php } ?>
                                    <?php echo form_open("auth/forgot_password", array('class' => 'user'));?>
                                        <div class="form-group">
                                            <?php echo form_input($identity);?>
                                        </div>
                                        <?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-primary btn-user btn-block"');?>
                                    <?php echo form_close();?>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/backend/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/backend/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/backend/js/sb-admin-2.min.js');?>"></script>

</body>

</html>