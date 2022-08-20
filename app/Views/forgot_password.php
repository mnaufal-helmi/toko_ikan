<?php
if (session()->getFlashData('error')) {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('error') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
}
?>
<form method="forgot_password.php" action="/forgot_password">
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required="" class="form-control">
    </div>
    <div class="form-group">
        <label>Repeat Password</label>
        <input type="password" name="repassword" required="" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </div>
</form>