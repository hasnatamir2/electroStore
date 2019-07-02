<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Electro Store</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>main.js"></script>

    <!-- Custom styles for this template -->
  </head>
  <body class="bg-light mx-0 my-0">
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark mb-3">
        <a class="navbar-brand" href="<?php base_url(); ?>">electroStore</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <form class="form-inline mx-auto mt-1" style="width: 60%;">
                <div class="input-group mb-3 w-100">
                    <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="width: 70%;">
                <div class="input-group-append">
                    <button class="btn btn-outline-success" type="submit" id="button-addon2">Search</button>
                </div>
            </div>
        </form>
        <?php if(!$this->session->userdata('logged_in')):?>
        <div class="btn-group " role="group" aria-label="Basic example">
            <a data-toggle="modal" data-target="#signin" class="btn btn-sm btn-outline-secondary my-auto" href="<?php base_url();?>users/register">
                <i class="far fa-user"></i> sign In
            </a>
            <a  class="btn btn-sm btn-outline-secondary my-auto" href="<?php base_url();?>users/register"><i class="fas fa-user-plus"></i> sign Up</a>
        </div>
        <?php else:?>
        <div class="btn-group " role="group" aria-label="Basic example">
            <a name="submit" type="submit" href="<?php echo base_url();?>users/logout" class="btn btn-sm btn-outline-light my-auto">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
        <?php endif;?>
    </nav>
            <div class="modal fade" id="signin"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="form">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signIn">Sign In</h5>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url(); ?>users/login" >
                    <div class="form-group">
                        <label for="uname" class="col-form-label">User Name:</label>
                        <input type="text" class="form-control" id="uname">
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
    <!-- main body -->
    <div class="container justify-content-around">
        <div class="row">
            <div class="col-md-3 ">
              
                <?php $this->load->view('includes/sidebar'); ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <h3 class="card-header mb-2 bg-success text-white font-weight-lighter">Latest Product</h3>
