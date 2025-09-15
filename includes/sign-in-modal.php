  
  <!-- Modal -->
<div class="modal fade" id="modal-signin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content border-0" style="border-radius: 1rem;">
        <div class="modal-header" style="border-radius: 0.85rem 0.85rem 0 0;">
          <h5 class="modal-title text-light py-1 px-1" id="staticBackdropLabel"><i class="far fa-user fs-lg me-2"></i> Sign In</h5>
          <button type="button" class="btn-close btn-close-white" style="font-size: 0.65rem;" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-3">
            <p class="fs-ms modal-p" style="color: #9e9fb4 !important;">Sign in to your account using email and password provided during registration.</p>
            <div class="error-message-login alert alert-danger" role="alert" style="display: none;"></div>
            <form id="login-form" class="needs-validation mb-4" action="#" method="post" >
                <?php if(!empty($error)) { ?>						
                    <div class="error alert alert-danger">
                        <i class="bi bi-exclamation-triangle"></i>
                        <?php echo $error;?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <div class="input-group">
                        <i class="far fa-envelope position-absolute top-50 start-0 translate-middle-y ms-2" style="z-index: 10;"></i>
                        <input class="form-control py-2" style="padding-left: 40px; border-radius: 10px;" name="email" type="email" placeholder="Email" required>
                    </div>
                </div>
                <input type="hidden" name="type" value="login">
                <div class="mb-3">
                    <div class="input-group">
                        <i class="fas fa-key position-absolute start-0 translate-middle-y ms-2" style="top: 50%;z-index: 20;"></i>
                        <div class="password-toggle w-100">
                            <input class="form-control py-2" style="padding-left: 40px; border-radius: 10px;" name="pwd" id="pwd" type="password" placeholder="Password" required>
                            <label class="password-toggle-btn position-absolute" style="bottom: 25%;right: 15px;" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox" onclick="pwd_visible()">
                                <span class="password-toggle-indicator"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="keep-signed">
                        <label class="form-check-label fs-sm" for="keep-signed">Keep me signed in</label>
                    </div>
                </div>
                <button class="btn btn-primary d-block w-100" type="submit">Sign in</button>
                <p class="fs-sm pt-3 mb-0">Don't have an account? <a href="index.php" class="fw-medium modal-a">Sign up</a></p>
            </form>
        </div>
      </div>
    </div>
</div>
<script>
    $("#login-form").submit(function(e) {
        e.preventDefault();
        $('.error-message-login').hide();
        var form = $(this);
        $.ajax({
            type: "POST",
            url: 'script.php',
            data: form.serialize(), // serializes the form's elements.
            dataType: "json",
            success: function(data) {
                if(data.status == 'success') {
                    location.reload();
                } else {
                    $('.error-message-login').html(data.message);
                    $('.error-message-login').show();
                }
            }
        });
    });
</script>