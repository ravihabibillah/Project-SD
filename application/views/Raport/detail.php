 <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice-head">
                <div class="pull-left mt">
                  <a href="<?=base_url()?>Raport/tambah/<?=$siswa['nis']?>/<?=$siswa['kode_kelas']?>" class="btn btn-primary" style="width: 150%;">Masukkan Nilai Baru</a>
                </div>
                <div class="pull-right mt">
                  <a href="<?=base_url()?>Raport/edit/<?=$siswa['nis']?>/<?=$siswa['kode_kelas']?>" class="btn btn-primary" style="width: 150%;">Edit Nilai</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
              <hr>
              <div class="invoice-body">
                <div class="pull-left">
                  <h1><?=$siswa['nama_siswa'];?></h1>
                  <address>
                    <h4>NIS : <?=$siswa['nis']?></h4>
                    Jenis Kelamin : <?php if($siswa['jk'] == 'L') {echo 'Laki-laki';} else {echo 'Perempuan';}?><br>
                    Alamat : <?=$siswa['alamat']?><br>
                  </address>
                </div>
                <!-- /pull-left -->
                <div class="pull-right">
                  <h2><?=$kelas['nama_kelas']?></h2>
                </div>
                <!-- /pull-right -->
                <div class="clearfix"></div>
                <br>
                <!-- /col-lg-10 -->
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width:60px" class="text-center">NO</th>
                      <th style="width: 580px" class="text-left">MATA PELAJARAN</th>
                      <!-- <th style="width:140px" class="text-right">UNIT PRICE</th> -->
                      <th colspan="2" style="width:90px" class="text-right">NILAI</th>  
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; $total = 0; foreach ($nilai as $n) : ?>
                    <tr>
                      <td class="text-center"><?=$i++?></td>
                      <td><?=$n['nama_mapel']?></td>
                      <!-- <td class="text-right">$429.00</td> -->
                      <td colspan="2" class="text-right"><?=$n['nilai']?></td>
                    </tr>
                    <?php $total = $total + $n['nilai'];?>
                    <?php endforeach; ?>
                    <tr>
                      <td colspan="2" rowspan="4">
                        <!-- <h4>Terms and Conditions</h4>
                        <p>Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.</p>
                         --><td class="text-right"><strong>Total</strong></td>
                        <td class="text-right"><?=$total;?></td>
                    </tr>
                    <tr>
                      <td class="text-right no-border">
                        <div class="well well-small green"><strong>Rata-rata</strong></div>
                      </td>
                      <td class="text-right no-border">
                        <div class="well well-small">
                          <strong><?php if($total == 0) { echo 0;} else {echo $rata = $total / ($i-1); } ?></strong>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
              </div>
              <!--/col-lg-12 mt -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end