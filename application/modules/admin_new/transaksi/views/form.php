
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">


          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Transaksi</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" id="frm_ed_img" action="<?php echo backend_url().$this->modul ?>/<?php echo isset($is_edit) ? 'save_edit' : 'save' ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      			<input type="hidden" name="id" value="<?php echo $this->uri->segment(4) ?>">

              <div class="box-body">

                <span id="warning_message"></span>
                <?php require_once __DIR__."/../../blocks/alert_notification.php"; ?>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-3">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tanggal" class="form-control pull-right datepicker" id="datepicker">
                    </div>
                    <!-- <input type="text" name="qty" class="form-control" placeholder=".." value="<?php echo isset($list) ? $list['qty'] : '' ?>" required=""> -->
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <select class="select2" name="premis_kategori_id" required="">
                      <option value="" selected disabled>Please Select</option>
                      <?php foreach ($list_member as $key => $vm): ?>
                          <option <?php echo isset($list)?set_value_select($list['id'],$vm['id']):''?> value="<?php echo $vm['id'] ?>"><?php echo $vm['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Produk</label>

                  <div class="col-sm-10">
                    <select class="select2" name="premis_kategori_id" required="">
                      <option value="" selected disabled>Please Select</option>
                      <?php foreach ($list_produk as $key => $vm): ?>
                          <option <?php echo isset($list)?set_value_select($list['id'],$vm['id']):''?> value="<?php echo $vm['id'] ?>"><?php echo $vm['nama_produk'].' - Rp'.number_format($vm['harga']) ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tipe Transaksi</label>

                  <div class="col-sm-10">
                    <select class="select2" name="premis_kategori_id" required="">
                      <option value="" selected disabled>Please Select</option>
                      <?php foreach ($list_t_tipe as $key => $vm): ?>
                          <option <?php echo isset($list)?set_value_select($list['id'],$vm['id']):''?> value="<?php echo $vm['id'] ?>"><?php echo $vm['nama_transaksi_tipe'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status Bayar</label>

                  <div class="col-sm-10">
                    <select class="select2" name="premis_kategori_id" required="">
                      <option value="" selected disabled>Please Select</option>
                      <?php foreach ($list_t_tipe as $key => $vm): ?>
                          <option <?php echo isset($list)?set_value_select($list['premis_kategori_id'],$vm['id']):''?> value="<?php echo $vm['id'] ?>"><?php echo $vm['nama_transaksi_tipe'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kuantitas</label>

                  <div class="col-sm-2">
                    <input type="text" name="qty" class="form-control" placeholder=".." value="<?php echo isset($list) ? $list['qty'] : '' ?>" required="">
                  </div>
                </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<div class="col-sm-2">
              	</div>
              	<div class="col-sm-10">
                  <button type="button" class="btn btn-default" onclick="window.history.back()">Kembali</button>
	                <button type="submit" class="btn btn-info">Simpan</button>
              	</div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>



        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>

    <?php include 'form_js.php'; ?>