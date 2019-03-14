<?php

/* @var $this yii\web\View */

$this->title = 'Home';
use app\models\Lowongan;
?>
  
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-md-3 sidenav">
            <h4>Pilih Kriteria</h4><br>
            <form action="" method="">
                <input type="text" class="form-control" placeholder="Masukan keyword" name="keyword"><br>
                <select name="tipe" class="form-control">
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
                </select><br>
                <input type="text" class="form-control" placeholder="Masukan lokasi" name="lokasi"><br>
                <input type="number" class="form-control" placeholder="Masukan gaji minimum" name="gaji" min="0"><br>
                <button class="btn btn-default" type="submit">Cari Lowongan</button>
            </form>
        </div>
        <div class="col-md-9 text-left">
            <?php foreach(Lowongan::find()->all() as $lowongan){ ?>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="index.php?r=site/detail" class="judul-lowongan"><?= $lowongan['judul'] ?></a>
                        <a href="" class="perusahaan">Nama perusahaan</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> <?= $lowongan['lokasi_kerja'] ?></li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> <?= $lowongan['tipe_pekerjaan'] ?></li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. <?= $lowongan['gaji'] ?></li>
                        <li><i class="glyphicon glyphicon-time"></i> 1 hari yang lalu</li>
                    </ul>
                </div>
            </div>
            <?php } ?>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="index.php?r=site/detail" class="judul-lowongan">Akuntan</a>
                        <a href="" class="perusahaan">BANK BCA</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Bandung</li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> Waktu Penuh</li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. 5.000.000</li>
                        <li><i class="glyphicon glyphicon-time"></i> 2 hari yang lalu</li>
                    </ul>
                </div>
            </div>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="index.php?r=site/detail" class="judul-lowongan">Akuntan</a>
                        <a href="" class="perusahaan">BANK BCA</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Bandung</li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> Waktu Penuh</li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. 5.000.000</li>
                        <li><i class="glyphicon glyphicon-time"></i> 2 hari yang lalu</li>
                    </ul>
                </div>
            </div>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="index.php?r=site/detail" class="judul-lowongan">Akuntan</a>
                        <a href="" class="perusahaan">BANK BCA</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Bandung</li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> Waktu Penuh</li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. 5.000.000</li>
                        <li><i class="glyphicon glyphicon-time"></i> 2 hari yang lalu</li>
                    </ul>
                </div>
            </div>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="" class="judul-lowongan">Akuntan</a>
                        <a href="" class="perusahaan">BANK BCA</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Bandung</li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> Waktu Penuh</li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. 5.000.000</li>
                        <li><i class="glyphicon glyphicon-time"></i> 2 hari yang lalu</li>
                    </ul>
                </div>
            </div>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="" class="judul-lowongan">Akuntan</a>
                        <a href="" class="perusahaan">BANK BCA</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Bandung</li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> Waktu Penuh</li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. 5.000.000</li>
                        <li><i class="glyphicon glyphicon-time"></i> 2 hari yang lalu</li>
                    </ul>
                </div>
            </div>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="" class="judul-lowongan">Akuntan</a>
                        <a href="" class="perusahaan">BANK BCA</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Bandung</li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> Waktu Penuh</li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. 5.000.000</li>
                        <li><i class="glyphicon glyphicon-time"></i> 2 hari yang lalu</li>
                    </ul>
                </div>
            </div>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="" class="judul-lowongan">Akuntan</a>
                        <a href="" class="perusahaan">BANK BCA</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Bandung</li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> Waktu Penuh</li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. 5.000.000</li>
                        <li><i class="glyphicon glyphicon-time"></i> 2 hari yang lalu</li>
                    </ul>
                </div>
            </div>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="" class="judul-lowongan">Akuntan</a>
                        <a href="" class="perusahaan">BANK BCA</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Bandung</li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> Waktu Penuh</li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. 5.000.000</li>
                        <li><i class="glyphicon glyphicon-time"></i> 2 hari yang lalu</li>
                    </ul>
                </div>
            </div>
            <div class="lowongan">
                <div class="lowongan-header">
                    <div class="logo-perusahaan">
                        <img src="themes/images/company-logo-01.png" alt="">
                    </div>
                    <div class="lowongan-title">
                        <a href="" class="judul-lowongan">Akuntan</a>
                        <a href="" class="perusahaan">BANK BCA</a>
                    </div>
                </div>
                <div class="lowongan-footer">
                    <p>Ini deskripsi</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker"></i> Bandung</li>
                        <li><i class="glyphicon glyphicon-briefcase"></i> Waktu Penuh</li>
                        <li><i class="glyphicon glyphicon-usd"></i> Rp. 5.000.000</li>
                        <li><i class="glyphicon glyphicon-time"></i> 2 hari yang lalu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
