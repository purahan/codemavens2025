  
  <!-- Modal -->
<div class="modal fade" id="modal-signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content border-0" style="border-radius: 1rem;">
        <div class="modal-header" style="border-radius: 0.85rem 0.85rem 0 0;">
          <h5 class="modal-title text-light py-1 px-1" id="staticBackdropLabel"><i class="far fa-user fs-lg me-2"></i> Register</h5>
          <button type="button" class="btn-close btn-close-white" style="font-size: 0.65rem;" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-3">
            <p class="fs-ms modal-p" style="color: #9e9fb4 !important;">Sign in to your account using email and password provided during registration.</p>
            <div class="error-message-register alert alert-danger" role="alert" style="display: none;"></div>
            <form id="register-form" class="needs-validation mb-4" action="#" method="post" >
                <?php if(!empty($error_up)) { ?>						
                    <div class="error alert alert-danger">
                        <i class="bi bi-exclamation-triangle"></i>
                        <?php echo $error_up;?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <div class="input-group">
                        <i class="far fa-user position-absolute top-50 start-0 translate-middle-y ms-2" style="z-index: 10;"></i>
                        <input class="form-control py-2" style="padding-left: 40px; border-radius: 10px;" name="name" type="text" placeholder="Full Name" required>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="input-group">
                        <i class="far fa-envelope position-absolute top-50 start-0 translate-middle-y ms-2" style="z-index: 10;"></i>
                        <input class="form-control py-2" style="padding-left: 40px; border-radius: 10px;" name="email" type="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <i class="fas fa-venus-mars position-absolute top-50 start-0 translate-middle-y ms-2" style="z-index: 10;"></i>
                        <select class="form-control py-2" name="gender" id="gender" style="border-radius: 10px; padding-left: 40px;">
                            <optgroup label="Gender">
                                <option value="">Gender</option>
                                <option value="m"><i class="fas fa-male"></i> Male</option>
                                <option value="f"><i class="fas fa-female"></i> Female</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <i class="far fa-calendar position-absolute top-50 start-0 translate-middle-y ms-2" style="z-index: 10;"></i>
                        <input class="form-control py-2" style="padding-left: 40px; border-radius: 10px;" name="dob" type="date" placeholder="dd/mm/yyyy" required>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <i class="fas fa-phone-alt position-absolute top-50 start-0 translate-middle-y ms-2" style="z-index: 10;"></i>
                        <input class="form-control py-2" style="padding-left: 40px; border-radius: 10px;" name="phone" type="tel" placeholder="Phone No." required>
                    </div>
                </div>

                <input type="hidden" name="type" value="register">

                <div class="mb-3">
                    <div class="input-group">
                        <i class="fas fa-key position-absolute start-0 translate-middle-y ms-2" style="top: 50%;z-index: 20;"></i>
                        <div class="password-toggle w-100">
                            <input class="form-control py-2" style="padding-left: 40px; border-radius: 10px;" name="pwd" id="up-pwd" type="password" placeholder="Password" required>
                            <label class="password-toggle-btn position-absolute" style="bottom: 25%;right: 15px;" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox" onclick="pwd_visible_up()">
                                <span class="password-toggle-indicator"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary d-block w-100" type="submit">Register</button>
                <p class="fs-sm pt-3 mb-0">Already have an account? <a href="index.php" class="fw-medium modal-a">Sign in</a></p>
            </form>
        </div>
      </div>
    </div>
</div>
<script>
    $("#register-form").submit(function(e) {
        e.preventDefault();
        $('.error-message-register').hide();
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
                    $('.error-message-register').html(data.message);
                    $('.error-message-register').show();
                }
            }
        });
    });
</script>