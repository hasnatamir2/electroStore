<div class="card shadow-sm mb-5 bg-white rounded">
    <form action="cart/update" method="POST">
        <div class="table table-striped">
            <div class="row bg-dark text-light text-wrap font-weight-bold border">
                <div class="col-md-4 col-sm-4">QTY</div>
                <div class="col-md-4 col-sm-4">Items Description</div>
                <div class="col-md-4 col-sm-4" style="text-align: right">Item Price</div>
            </div>
            <?php $i=1; ?>
            <?php foreach($this->cart->contents() as $items): ?>
            <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
            <div class="row border-bottom">
                <div class="col-md-3 col-sm-3" style="text-align: left">
                    <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'size' => '1')); ?>    
                </div>
                <div class="col-md-5 col-sm-5 p-0" style="text-align: left"><?php echo $items['name']; ?></div>
                <div class="col-md-4 col-sm-4" style="text-align: left"><?php echo $this->cart->format_number($items['price'])?></div>
            </div>
            <?php $i++; ?>
            <?php endforeach;?>
            <div class="row bg-success text-white font-weight-bold p-1">
                <div class="col-md-6 col-sm-6" style="text-align: left" ><strong>Total</strong> </div>
                <div class="col-md-6 col-sm-6" style="text-align: right">
                    $ <?php echo $this->cart->format_number($this->cart->total());?>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around">
        <p><button class="btn btn-outline-dark" type="submit">Update Cart</button>
        <a class="btn btn-outline-secondary" href="cart">Go to Cart</a></p></div>
    </form>
    </div>
    <div class="card shadow-sm mb-3">
        <div class="card-header">
            Categories
        </div>
        <ul class="list-group list-group-flush">
            <?php foreach(get_categories() as $category) : ?>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <a href="<?php echo base_url();?>products/details/<?php echo $category->ID;?>">
                        <?php echo $category->name?>
                    </a>
                <span class="badge badge-primary badge-pill">1</span></a>
            </li>
            <?php endforeach;   ?>
        </ul>
    </div>
    <div class="card shadow-sm mb-3">
        <div class="card-header">
            Most Popular
        </div>
        <ul class="list-group list-group-flush">
            <?php foreach(get_popular() as $popular) : ?>
                <li class="list-group-item list-group-item-action d-flex">
                    <a  href="<?php echo base_url();?>products/details/<?php echo $popular->Id;?>">
                        <?php echo $popular->title; ?>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>