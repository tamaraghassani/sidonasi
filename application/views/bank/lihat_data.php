                <div class="row">
                    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Data Master</li>
		<li class="active">Bank</li>
	</ol>
                    
                    <div class="col-md-12">
                        <h2 class="page-header">
                           Bank
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Bank
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Bank</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="bank/post" method="POST">

            <div class="form-group">
                <label>Nama Bank </label>
                <input type="text" name="nama_bank" class="form-control" required="">
            </div>

            <div class="form-group">
                <label>Nama Rekening </label>
                <input type="text" name="nama_rek" class="form-control" required="">
            </div>

            <div class="form-group">
                <label>Nomor Rekening </label>
                <input type="text" name="no_rek" class="form-control" required="">
            </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
    </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                              <!--   <th>Id Mustahik</th> -->
                                                <th>No</th>
                                                <th>Nama Bank</th>
                                                <th>Nama Rekening</th>
                                                <th>Nomor Rekening</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
<!--                                            hilangkan id bank 1 krn no ni dipake utk default (ga ad nama banknya)-->
                                                <?php
                                                if($r->id_bank == 1){
                                                 continue;
                                                }
                                                ?>
                                             <td><?php echo $no?></td>
                                               <td><?php echo $r->nama_bank?></td>
                                               <td><?php echo $r->nama_rek?></td>
                                               <td><?php echo $r->no_rek?></td>
                                               
                                                <td class="center">
                                                    
                                                    <a title="Edit" class="btn btn-default" href="<?php echo site_url('bank/edit/'.$r->id_bank);?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                                    
                                                    <a title="Hapus" class="btn btn-default" href="<?php echo site_url('bank/delete/'.$r->id_bank);?>"
                                                       onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span class="glyphicon glyphicon-remove"></span></a>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->



                <!-- Button trigger modal -->

