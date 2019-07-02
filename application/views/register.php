
<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
<form method="POST" action="<?php echo base_url(); ?>users/register">
        <h4 class="mb-3 display-4">Register</h4>
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">First name*</label>
            <input type="text" class="form-control" name="fname" id="firstName" placeholder="" value="" required>
            
        </div>
        <div class="col-md-6 mb-3">
            <label for="lastName">Last name*</label>
            <input type="text" class="form-control" name="lname" id="lastName" placeholder="" value="" required>
            
        </div>
        </div>

        <div class="mb-3">
        <label for="username">Username*</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="uname" id="username" placeholder="Username" required>
            
        </div>
        </div>

        <div class="mb-3">
        <label for="email">Email <span class="text-muted">(Optional)</span></label>
        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
        
        </div>
        
        <div class=" mb-3">
            <label for="password">Password*</label>
            <input type="password" class="form-control" name="pwd" id="password" placeholder="****" value="" required>
            <div class="invalid-feedback">
            password too week.
            </div>
        </div>
        
        <div class=" mb-3">
            <label for="c_password">Confirm Password*</label>
            <input type="password" class="form-control" name="cpwd" id="c_password" placeholder="****" value="" required>
            <div class="invalid-feedback">
            password not match.
            </div>
        </div>
        </div>
        
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
</form>