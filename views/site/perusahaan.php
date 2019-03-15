<?php

/* @var $this yii\web\View */

$this->title = 'Perusahaan';
?>
<div class="container">
    <div class="col-md-12">
        <div class="col-md-4 sidenav sticky">
            <h4>Pilih Kriteria</h4><br>
            <form action="" method="">
                <input type="text" class="form-control" placeholder="Masukan nama perusahaan" name="perusahaan"><br>
                <!--<select name="tipe" class="form-control">
                    <option selected disabled>--Pilih Tipe Pekerjaan--</option>
                    <option value="waktu penuh">Waktu Penuh</option>
                    <option value="paruh waktu">Paruh Waktu</option>
                    <option value="kontrak">Kontrak</option>
                    <option value="pekerja lepas">Pekerja Lepas</option>
                    <option value="sukarelawan / magang">Sukarelawan / Magang</option>
                </select><br>
                <select name="tipe" class="form-control">
                    <option selected disabled>--Pilih Pendidikan Minimal--</option>
                    <option value="tidak bersekolah">Tidak Bersekolah</option>
                    <option value="sd">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA / SMK sederajat">SMA / SMK sederajat</option>
                    <option value="diploma">Diploma</option>
                </select><br>-->
                <input type="text" class="form-control" placeholder="Masukan lokasi" name="lokasi"><br>
                <button class="btn btn-default" type="submit">Cari Perusahaan</button>
            </form>
        </div>
        <div class="col-md-8" style>
            <div class="sort sticky" style="text-align: right; padding: 10px;">
                <form action="" method="" class="form-inline">
                    <label>Urutkan berdasarkan</label>
                    <a href="" style="color: black"><i class="glyphicon glyphicon-sort-by-attributes"></i></a>
                    <select type="submit" name"sort">
                        <option></option>
                        <option>Nama</option>
                        <option>Jumlah Karyawan</option>
                        <option>Rating</option>
                    </select>
                </form>
            </div>
<?php for($i=0;$i<40;$i++){ ?>
            <div class="col-md-3" style="padding: 0 5px; margin-bottom: 10px">
                <div  style="text-align: center; background: #f1f1f1; padding: 10px">
                    <img src="themes/images/company-logo-01.png" alt="" style="width:50%">
                    <h5>Nama Perusahaan</h4>
                    <i class="glyphicon glyphicon-user"></i> 3982<br>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star-empty"></i>
                    <i class="glyphicon glyphicon-star-empty"></i>
                    <p>1620 ratings<p>
                </div>
            </div>
<?php } ?>
        </div>
    </div>
</div>