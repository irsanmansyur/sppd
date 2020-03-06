<?php 
    $cPageSource    = GetLocationFile(__FILE__) ;   
?>
<style type="text/css">
    .sc-date{text-align: center;}
    .sc-number{text-align: right;}
</style>
<section class="content-header">
    <h1>
        Master Pegawai
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-user"></i>Master Pegawai</a></li> 
    </ol>
</section> 
<section class="content">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs" id="myTabs">
            <li class="active"><a href="#tab_1" data-toggle="tab" id="mstpegawai_tab_1">Daftar Pegawai</a></li>
            <li><a href="#tab_2" data-toggle="tab" id="mstpegawai_tab_2">Pegawai</a></li>
            <li class="pull-right">
                <button class="btn btn-primary" name="cmdPrint" id="cmdPrint" type="button">Cetak PDF</button>
                <button class="btn btn-primary" name="cmdPrint_CSV" id="cmdPrint_CSV" type="button">Cetak CSV</button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active full-height" id="tab_1"> 
                <div id="gr_mstpegawai" style="width:100%;height:500px"></div>
            </div>
            <div class="tab-pane full-height" id="tab_2"> 
                <form id="mstpegawai">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>NIP</label>
                                <input type="text" name="cNip" id="cNip" placeholder="NIP" 
                                class="form-control sc-input-required sc-select" maxlength="100" data-sf="LoadNip_Not">
                                <input type="hidden" name="cPageSource" id="cPageSource" value="<?=$cPageSource?>">
                            </div>
                            <div class="col-sm-8">
                                <label>Nama</label>
                                <input type="text" name="cNama" id="cNama" placeholder="Nama" 
                                class="form-control sc-input-required" maxlength="255">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-10">
                                <label>Alamat</label>
                                <input type="text" name="cAlamat" id="cAlamat" placeholder="Alamat" 
                                class="form-control sc-input-required">
                            </div>
                            <div class="col-sm-2">
                                <label>Nomor HP</label>
                                <input type="text" name="cno_hp" id="cno_hp" placeholder="No HP" 
                                class="form-control sc-input-required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Tempat Lahir</label>
                                <input type="text" name="cTempat" id="cTempat" placeholder="Tempat Lahir" 
                                class="form-control sc-input-required" maxlength="100">
                            </div>
                            <div class="col-sm-2">
                                <label>Tgl Lahir</label> 
                                <input type="text" name="dTempat_Tgl" id="dTempat_Tgl" placeholder="Tgl Lahir" 
                                class="form-control sc-date" <?=scDate::SetDataDate()?>>
                            </div>
                            <div class="col-sm-4">
                                <label>Pangkat / Golongan</label>
                                <input type="text" name="cGolongan" id="cGolongan" placeholder="Pangkat Golongan" 
                                class="form-control sc-input-required sc-select" maxlength="100" data-sf="LoadPangkat">
                            </div>
                            
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Jabatan</label>
                                <input type="text" name="cJabatan" id="cJabatan" placeholder="Jabatan" 
                                class="form-control sc-input-required" maxlength="100">
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="cKeterangan" id="cKeterangan" placeholder="Keterangan" class="form-control">
                    </div>
                    <button type="button" class="btn btn-primary" id="cmdSave" name="cmdSave">Simpan</button>
                </form>                
            </div>
        </div><!-- /.tab-content -->
    </div> 
</section>
<script type="text/javascript" src="<?=$cPageSource?>.js"></script>