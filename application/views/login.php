<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      
  <div id="login-page">
    <div class="container">
      

      <form class="form-login" action="" method="post">

        <h2 class="form-login-heading">login admin</h2>
        <?php if(validation_errors()): ?>       <!-- jika ada error atau data inputan tidak valid, maka akan                          bernilai true dan menampilkan pesan error -->
        <div class="showback">
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <?= validation_errors(); ?>
          </div>
        
        <?php endif; ?>


        <?php if ($this->session->flashdata('flash')) :?>  <!-- melakukan flashdata dengan nama flash -->
        <div class="showback">
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php if($this->session->flashdata('flash') == 'Sedang Login') {$this->session->set_flashdata('flash','Berhasil Logout');} ?>
            <?= $this->session->flashdata('flash'); ?>
          </div>
        <?php endif; ?>
        
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Username" autofocus name="username">
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password">
          <label class="checkbox">
            <!-- <input type="checkbox" value="remember-me"> Remember me -->
            <!-- <span class="pull-right"> -->
            <!-- <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a> -->
            <!-- </span> -->
            </label>
            <input type="submit" name="login" class="btn btn-theme btn-block" value="LOGIN"><!-- 
          <button class="btn btn-theme btn-block" href="Login" type="submit"><i class="fa fa-lock"></i> LOGIN</button> -->
          <hr>
          <!-- <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div> -->
          <!-- <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="#">
              Create an account
              </a>
          </div> -->
        </div>
        <!-- Modal -->
        <!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div> -->
        <!-- modal -->
      </form>
    </div>
  </div>