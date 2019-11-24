<!-- main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">

                <a href="<?=base_url();?>Mapel/tambah" type="button" class="btn btn-primary col-md-3" style="float: right; margin-right: 1.6em;">Tambah Mata Pelajaran</a>
                <h4>Daftar Mata Pelajaran</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-sort-numeric-asc"></i> No</th>
                    <th class="hidden-phone"><i class="fa fa-desktop"></i> Kode</th>
                    <th class=""><i class="fa fa-user"></i> Mata Pelajaran</th>
                    <!-- <th><i class="fa fa-bookmark"></i> Profit</th> -->
                    <th><i class="fa fa-cogs"></i> Opsi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1; foreach ($mapel  as $mpl) : ?>
                  <tr>
                    <td>
                      <?=$i++;?>
                    </td>
                    <td class="hidden-phone"><?=$mpl['kode_mapel'];?></td>
                    <td class="hidden-phone"><?=$mpl['nama_mapel'];?></td>
                    <td>
                      <a href="<?=base_url();?>Mapel/edit/<?=$mpl['kode_mapel'];?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        
        <div class="row mt">
          <!-- <div class="col-lg-12">
            <p>Place your content here.</p>
          </div> -->
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end