    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right "></i> Edit Raport Siswa</h4>
              <form class="form-horizontal style-form" method="post" style="margin: 2em;">
                <?php if(validation_errors()): ?>
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?= validation_errors(); ?>
                  </div>
                <?php endif; ?>
                <div class="form-group" style="margin-top: 3em;">
                  <label class="col-sm-2 col-sm-2 control-label" style="font-weight: bold;">NIS</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control round-form" name="nis" readonly value="<?=$siswa['nis'];?>">
                  </div>
                </div>
                <div class="form-group" style="margin-top: 3em;">
                  <label class="col-sm-2 col-sm-2 control-label" style="font-weight: bold;">Nama</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control round-form" name="nama" readonly value="<?=$siswa['nama_siswa']?>">
                  </div>
                </div>
                <?php $index=1; foreach ($nilai as $n) : ?>

                  <?php if($n['nilai'] == NULL) { ?>
                  <div class="form-group" style="margin-top: 3em;">
                    <label class="col-sm-2 col-sm-2 control-label" style="font-weight: bold;"><?=$n['nama_mapel']?></label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control round-form" name="mapel<?=$index++;?>" value="0">
                    </div>
                  </div>
                  <?php } else {$index++;} ?>
                <?php endforeach; ?>
                <input type="hidden" name="jumlah" value="<?=$index;?>">
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