<?php
    $connect = new mysqli("localhost","root","","andaliman_toba");

    if (!isset($_SESSION['operator'])){
        echo "<script>alert('Anda Harus Login ')</script>";
        echo "<script>location='login.php'</script>";
        header('location:login.php');
        exit();
    }
?>
<div class="x_content">
    <div class="col-md-12 col-sm-12 col-xs-12 profile_left">
        <h3><?php echo $_SESSION['operator']['nama']; ?></h3>
        <div class="profile_img">

            <!-- end of image cropping -->
            <div id="crop-avatar">
                <!-- Current avatar -->
                <div class="avatar-view" title="Change the avatar">
                    <img src="images/userImage/<?php echo $_SESSION['administrator']['image']; ?>" alt="Avatar">
                </div>
            </div>
            <!-- end of image cropping -->

        </div>
        <br>
        <ul class="list-unstyled user_data">
            <li>
                <i class="fa fa-male user-profile-icon" ></i><i class="fa fa-female user-profile-icon" ></i>&nbsp&nbsp<?php echo $_SESSION['administrator']['jenis_kelamin']; ?>
            </li>
            <li><i class="fa fa-map-marker user-profile-icon"></i>&nbsp&nbsp&nbsp&nbsp<?php echo $_SESSION['administrator']['alamat']; ?>
            </li>

            <li>
                <i class="fa fa-briefcase user-profile-icon"></i>&nbsp&nbsp&nbsp<?php echo $_SESSION['administrator']['role']; ?>
            </li>

            <li>
                <i class="fa fa-phone user-profile-icon"></i>&nbsp&nbsp&nbsp<?php echo $_SESSION['administrator']['no_telepon']; ?>
            </li>

            <li>
                <i class="fa fa-envelope user-profile-icon"></i>&nbsp&nbsp&nbsp<?php echo $_SESSION['administrator']['email']; ?>
            </li>
            
        </ul>

        <a href="index.php?halaman=edit_profile&id=<?php echo $_SESSION['administrator']['id_user']; ?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
        <br />
    </div>
</div>