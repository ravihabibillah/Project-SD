<!-- main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">

                <a href="<?=base_url();?>Kelas/tambah" class="btn btn-primary col-md-2" style="float: right; margin-right: 1.5em;">Tambah Kelas</a>
                <h4>Daftar Kelas</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-sort-numeric-asc"></i> Kode</th>
                    <th class="hidden-phone"><i class="fa fa-desktop"></i> Nama Kelas</th>
                    <th class=""><i class="fa fa-user"></i> Wali Kelas</th>
                    <!-- <th><i class="fa fa-bookmark"></i> Profit</th> -->
                    <th><i class="fa fa-cogs"></i> Opsi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1; foreach ($kelas  as $kls) : ?>
                  <tr>
                    <td>
                      <?=$kls['kode_kelas']?>
                    </td>
                    <td class="hidden-phone"><?=$kls['nama_kelas'];?></td>
                    <td class="hidden-phone"><?=$kls['nama_guru'];?></td>
                    <td>
                      <a href="<?=base_url();?>Kelas/detail/<?=$kls['kode_kelas'];?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                      <a href="<?=base_url();?>Kelas/edit/<?=$kls['kode_kelas'];?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="<?=base_url();?>Kelas/hapus/<?=$kls['kode_kelas'];  ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
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