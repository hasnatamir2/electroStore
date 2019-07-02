<div class="row no-gutters d-flex justify-content-around">
    <div class="col-md-4">
        <img class="card-img" src="<?php echo base_url(); ?>images/<?php echo $product->image; ?>" style="width: 100%;">
    </div>
    <div class="col-md-7 ml-2">
        <h3 class="font-weight-light "><?php echo $product->title; ?></h3>
        <h5 class="price-tag text-dark font-weight-ligh p-1 text-left">US $<?php echo $product->price; ?></h5>
        <div class="detail-decription">
            <p class="card-text">
                <?php echo $product->description; ?>
            </p>
        </div>
        <form action="<?php echo base_url(); ?>cart/add" method="POST" class="form-inline mx-auto my-5 " style="width: 100%; max-height: 35%;">
            <div class="input-group mb-5 w-100 add-to-cart">
                <div class="input-group-prepend">
                    <span class="input-group-text">QTY: </span>
                </div>
                <input type="number" class="qty form-control text-center" name="qty" value="1">
                <input type="hidden" name="item_number" value="<?php echo $product->Id ?>">
                <input type="hidden" name="price" value="<?php echo $product->price ?>">
                <input type="hidden" name="title" value="<?php echo $product->title ?>"><br>
            </div>
            <div class="mt-5">
            <a href="#" class="btn btn-outline-primary d-block add-to-cart">Add to cart</a></div>
        </form>
    </div>
</div>