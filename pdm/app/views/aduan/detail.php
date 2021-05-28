<h1 class="title">Detail Pengaduan</h1>

<div class="card-pengaduan">

    <div class="pengaduan-group">
        <p class="pengaduan-form">ID Pengaduan</p>
        <p class="pengaduan-value"> : <?=$data['aduan']['id_pengaduan'];?></p>
    </div>

    <div class="pengaduan-group">
        <p class="pengaduan-form">Tanggal</p>
        <p class="pengaduan-value"> : <?=$data['aduan']['tgl_pengaduan'];?></p>
    </div>

    <div class="pengaduan-group">
        <p class="pengaduan-form">NIK Pengadu</p>
        <p class="pengaduan-value"> : <?=$data['aduan']['nik'];?></p>
    </div>

    <div class="pengaduan-group">
        <p class="pengaduan-form">Isi Laporan</p>
        <p class="pengaduan-value"> : <?=$data['aduan']['isi_laporan'];?></p>
    </div>

    <div class="pengaduan-group direction-column">
        <p class="pengaduan-form">Foto</p>
        <p class="pengaduan-value"><?=$data['aduan']['foto'];?></p>
    </div>

    <div class="pengaduan-group">
        <p class="pengaduan-form">Status</p>
        <p class="pengaduan-value"> : <?=$data['aduan']['status'];?></p>
    </div>

    <div class="btn-group">
        <button class="btn open-modal btn-tanggapan" id="modal-open">Buat Tanggapan</button>
        <a href="<?=BASEURL;?>/aduan/list" class="btn btn-red btn-tanggapan-kembali">Kembali</a>
    </div>
    
</div>

<div class="modal-container" id="modal-container">
    <div class="modal">
        <h1 class="modal-title">Tanggapi</h1>

        <form action="<?=BASEURL?>/aduan/tanggapi" method="post">
            <div class="form-group">
                <label for="">ID Pengaduan</label>
                <input type="text" name="id_pengaduan" id="id_pengaduan" value="<?=$data['aduan']['id_pengaduan']?>" readonly>
            </div>

            <div class="form-group">
                <label for="">Tanggapan</label>
                <textarea name="tanggapan" id="tanggapan"></textarea>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn">Kirim</button>
                <button type="button" class="btn btn-red" id="modal-close">Tutup</button>
            </div>
        </form>

    </div>
</div>
