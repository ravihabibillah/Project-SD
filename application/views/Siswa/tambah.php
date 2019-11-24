
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right "></i> Tambah Data Siswa</h4>
              <form class="form-horizontal style-form" method="post" style="margin: 2em;">
                <?php if(validation_errors()): ?>
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?= validation_errors(); ?>
                  </div>
                <?php endif; ?>
                <div class="form-group" style="margin-top: 3em;">
                  <label class="col-sm-2 col-sm-2 control-label" style="font-weight: bold;">NIS</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-form" name="nis">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label" style="font-weight: bold;">Nama Siswa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-form" name="nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label" style="font-weight: bold;">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenisKelamin" id="laki" value="L" checked>
                        Laki-laki
                        </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenisKelamin" id="perempuan" value="P" checked>
                        Perempuan
                        </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label" style="font-weight: bold;">Alamat</label>
                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control round-form" name="alamat"> -->
                    <textarea class="form-control " name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label" style="font-weight: bold;">Tempat/Tanggal lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-form" name="ttl">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label" style="font-weight: bold;">Kelas</label>
                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control round-form" name="nama"> -->
                    <select name="kelas">
                      <?php if($keterangan == 'tambahSeluruhSiswa') { ?>
                        <?php foreach ($kelas as $kls) : ?>                      
                          <option value="<?=$kls['kode_kelas']?>"><?=$kls['nama_kelas']; ?></option>
                        <?php endforeach; ?>
                      
                      <?php } else { ?>                      
                        <option value="<?=$kelas['kode_kelas']?>"><?=$kelas['nama_kelas']; ?></option>
                      <?php } ?>
                      
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2" style="float: right;">
                    <input class="btn btn-primary" type="submit" name="submit" value="Tambahkan">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->