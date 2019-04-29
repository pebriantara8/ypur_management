
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">


          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Produk</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" id="frm_ed_img" action="<?php echo backend_url().$this->modul ?>/<?php echo isset($is_edit) ? 'save_edit' : 'save' ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      			<input type="hidden" name="id" value="<?php echo $this->uri->segment(4) ?>">

              <div class="box-body">

                <span id="warning_message"></span>
                <?php require_once __DIR__."/../../blocks/alert_notification.php"; ?>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>

                  <div class="col-sm-6">
                    <input type="text" name="nama_produk" class="form-control" placeholder=".." value="<?php echo isset($list) ? $list['nama_produk'] : '' ?>" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kuantitas</label>

                  <div class="col-sm-2">
                    <input type="text" name="qty" class="form-control" placeholder=".." value="<?php echo isset($list) ? $list['qty'] : '' ?>" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga per Unit</label>

                  <div class="col-sm-2">
                    <input type="text" name="harga" class="form-control" placeholder=".." value="<?php echo isset($list) ? $list['harga'] : '' ?>" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga Piutang</label>

                  <div class="col-sm-2">
                    <input type="text" name="harga_piutang" class="form-control" placeholder=".." value="<?php echo isset($list) ? $list['harga_piutang'] : '' ?>" required="">
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