 <!--**********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3> Detail Siswa</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">

              <div class="col-md-4 profile-text">
                <h3><?=$siswa['nama_siswa']?></h3>
                <h5><?=$siswa['nis']?></h5>
                
                <br>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="<?=base_url()?>assets/img/ui-sam.jpg" class="img-circle"></p>
                  
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Overview</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#edit">Edit Profile</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Informasi Siswa</h4>
                        <form role="form" class="form-horizontal" method="post">
                          <!-- <div class="form-group">
                            <label class="col-lg-2 control-label"> Avatar</label>
                            <div class="col-lg-6">
                              <input type="file" id="exampleInputFile" class="file-pos">
                            </div>
                          </div> -->
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Jenis Kelamin</label>
                            <div class="col-lg-10">
                              <div class="radio">
                                <label>
                                  <input type="radio" name="jenisKelamin" id="laki" value="L" <?php if($siswa['jk']=='L') { echo 'checked';}?>>
                                  Laki-laki
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="jenisKelamin" id="perempuan" value="P" <?php if($siswa['jk']=='P') { echo 'checked';}?>>
                                  Perempuan
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tempat/Tanggal Lahir</label>
                            <div class="col-lg-6">
                              <input type="text" name="ttl" value="<?=$siswa['ttl']?>" id="country" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Alamat</label>
                            <div class="col-lg-10">
                              <textarea rows="5" cols="30" class="form-control" id="" name="alamat"><?=$siswa['alamat']?></textarea>
                            </div>
                          </div>

                          <input type="hidden" name="nis" value="<?=$siswa['nis']?>">
                          <input type="hidden" name="nama" value="<?=$siswa['nama_siswa']?>">
                          <input type="hidden" name="kelas" value="<?=$siswa['kode_kelas']?>">
                      
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Simpan</button>
                              <button class="btn btn-theme04" type="button">Kembali</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end