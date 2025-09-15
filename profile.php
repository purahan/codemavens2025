<?php
  include('includes/functions.php');
  if(!isset($_SESSION['id']) && strpos($_SERVER["SCRIPT_FILENAME"], 'index.php') === false) {
    header("Location: index.php");
    exit();
  }
  if(isset($_SESSION['pic'])) {
    $pic_location = $_SESSION['pic'];
  }
  if(!empty($_POST)) {
    if (isset($_FILES['profile-pic']) && $_FILES['profile-pic']['name'] != '') {
      $arrFileName=explode('.',$_FILES['profile-pic']['name']);
      $fileExt=$arrFileName[count($arrFileName)-1];
      $uniqueFilename = uniqid().'.'.$fileExt;
      move_uploaded_file($_FILES['profile-pic']['tmp_name'], "assets/img/users/".$uniqueFilename);
      $pic_location = "assets/img/users/".$uniqueFilename;
    }

    $sql = "UPDATE users SET full_name='".$_POST['name']."', phone=".$_POST['phone'].", dob='".$_POST['dob']."', profile_pic='".$pic_location."', email='".$_POST['email']."', gender='".$_POST['gender']."', modified_on='".date("Y-m-d")."' WHERE id=".$_SESSION['id'];
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['dob'] = $_POST['dob'];
        $_SESSION['pic'] = $pic_location;
        header("Location: profile.php");
    } else {
      $error=' We are unable to update your Profile. Please try again later';
    }
  }

  $sql = "SELECT id, full_name, profile_pic, phone, dob, email, gender FROM `users` WHERE id='".$_SESSION['id']."'";
  $result = $conn->query($sql);
  if($result->num_rows > 0) {
    $profileData = $result->fetch_assoc();
  }
  $pic = "assets/img/default.jpg";
  if(isset($_SESSION['pic']) && !empty($_SESSION['pic'])) {
    $pic = $_SESSION['pic'];
  }
  page_header();
  nav_bar();
?>
<style>
  body {
    background: linear-gradient(135deg, rgba(10, 35, 81, 0.95) 0%, rgba(0, 106, 78, 0.98) 100%);
  }
</style>
<div class="body"></div>
  <div class="d-flex mx-md-5 mx-0 mb-0 mb-md-5 flex-column h-100 bg-light rounded-3 shadow-lg p-4">
    <section class="pt-5 px-3">
      <!-- Title + Delete link-->
      <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-start mt-5">
        <h1 class="h3 mb-2 ms-md-4 text-nowrap">Profile info</h1>
      </div>
      <!-- Content-->
      <input type="hidden" name="type" value="profile-edit">
      <div class="bg-secondary-msg rounded-3 p-4 mb-4">
        <form action="profile.php" method="post" enctype="multipart/form-data">
          <div class="d-block d-sm-flex align-items-center pb-5">
            <div style="width: 110px;height: 110px; overflow: hidden" class="rounded-circle mx-sm-0 mx-auto mb-3 mb-sm-0">
              <img class="d-block" src="<?=$pic?>" id="profile-pic-img" width="110" />
            </div>
            <div class="ps-sm-3 text-center text-sm-start">
              <label for="profile-pic" class="btn btn-light shadow btn-sm mb-2"><i class="bi bi-arrow-repeat"></i> Change avatar</label>
              <input type="file" name="profile-pic" id="profile-pic" class="invisible" accept="image/*" onchange="img_changed()">
              <div class="p mb-0 fs-ms text-muted">Upload JPG, GIF or PNG image. 300 x 300 required.</div>
            </div>
          </div>
          <?php if(!empty($error)) { ?>
            <div class="error alert alert-danger">
              <i class="bi bi-exclamation-triangle"></i>
              <?php echo $error;?>
            </div>
          <?php } ?>
          <div class="row">
            <div class="col-sm-6">
              <div class="mb-3 pb-1">
                <label class="form-label px-0" for="account-name">Full Name</label>
                <input class="form-control" type="text" id="account-name" style="border-radius: 10px;" name="name"
                  value="<?=$_SESSION['name']?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3 pb-1">
                <label class="form-label px-0" for="account-email">Email address</label>
                <input class="form-control" type="email" style="border-radius: 10px;" name="email" id="account-email"
                  value="<?=$_SESSION['email']?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3 pb-1">
                <label class="form-label px-0" for="account-phone">Phone no.</label>
                <div class="input-group">
                  <span class="position-absolute" style="z-index: 20; left: 3%; top: 18%;">+91</span>
                  <input class="form-control" name="phone" style="border-radius: 10px; padding-left: 50px;" type="tel"
                    id="account-phone" value="<?=$_SESSION['phone']?>">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3 pb-1">
                <label class="form-label px-0" for="account-gender">Gender</label>
                <select class="form-select" name="gender" style="border-radius: 10px;" id="account-gender">
                  <option value="">Select Gender</option>
                  <?php
                    if($_SESSION['gender'] == "m") {
                        echo '
                        <option value="f">Female</option>
                        <option value="m" selected="true">Male</option>';
                    }
                    else {
                        echo '
                        <option value="f" selected="true">Female</option>
                        <option value="m">Male</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3 pb-1">
                <label class="form-label px-0" for="account-dob">Date of Birth</label>
                <input class="form-control" type="date" style="border-radius: 10px;" name='dob' id="account-dob" value="<?=$_SESSION['dob']?>">
              </div>
            </div>
            <div class="col-12">
              <hr class="mt-2 mb-4">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="form-check d-block">
                  
                </div>
                <button class="btn btn-outline-primary border-2 mx-md-5 mx-0 mt-3 mt-sm-0" type="submit">
                  <i class="far fa-save fs-4 me-2"></i>Save changes
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</main><!-- End #main -->
<?php page_footer(false); ?>
