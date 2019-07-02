<?php if($this->session->flashdata('registered')):?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('registerd');?>
    </div>
<?php endif;?>
<?php if($this->session->flashdata('pass_login')):?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('logged In'); ?>
    </div>
<?php endif; ?>
<?php if($this->session->flashdata('fail_login')):?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('Couldnt logged in'); ?>
    </div>
<?php endif; ?>

<!-- render all the items -->
<div class="row d-flex no-gutters justify-content-around">
<?php foreach($products as $product) :?>
<div class="card col-md-3  mx-2 mb-3 no-gutters bg-light shadow rounded border border-light border-bottom-0">
    <a href="<?php base_url(); ?>products/details/<?php echo $product->Id; ?>">
        <img src="images/<?php echo $product->image; ?>" class="mx-0 my-0" style="max-width:100%; max-height: 55vh;">
    </a>
    <h5 class="price-tag  font-weight-bold p-2 mt-2 bg-warning text-center rounded">US $ <?php echo $product->price; ?></h5>                        
    <h4 class="card-title ml-1 mb-3 font-weight-normal"><?php echo $product->title; ?></h4>
    <form action="<?php echo base_url(); ?>cart/add" method="POST" class="form-inline mx-auto mt-1">
            <div class="input-group mb-5 w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text">QTY: </span>
                </div>
                <input type="number" class="qty form-control" name="qty" value="1">
                <input type="hidden" name="item_number" value="<?php echo $product->Id ?>">
                <input type="hidden" name="price" value="<?php echo $product->price ?>">
                <input type="hidden" name="title" value="<?php echo $product->title ?>"><br>
            </div>
            <div class="mt-5">
            <button class="btn btn-outline-primary d-block add-to-cart">Add to cart</button></div>
        </form>
    </div>
<?php endforeach; ?>