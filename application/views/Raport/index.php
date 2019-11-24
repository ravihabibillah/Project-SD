<!-- main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4>Daftar Seluruh Siswa</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-sort-numeric-asc"></i> No</th>
                    <th>NIS</th>
                    <th class="hidden-phone"><i class="fa fa-user"></i> Nama Siswa</th>
                    <th class=""><i class="fa fa-user"></i> Jenis Kelamin</th>
                    <!-- <th><i class="fa fa-bookmark"></i> Profit</th> -->
                    <th><i class="fa fa-cogs"></i> Opsi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1; foreach ($siswa  as $sw) : ?>
                  <tr>
                    <td>
                      <?=$i++?>
                    </td>
                    <td class="hidden-phone"><?=$sw['nis'];?></td>  
                    <td class="hidden-phone"><?=$sw['nama_siswa'];?></td>
                    <td class="hidden-phone"><?php if($sw['jk'] == 'L') {echo 'Laki-laki';} else {echo 'Perempuan';}?></td>
                    <td>
                      <a href="<?=base_url()?>Raport/detail/<?=$sw['nis']?>/<?=$sw['kode_kelas']?>" class="btn btn-warning btn-xs"><i class="fa fa-book"></i></a>
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
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end