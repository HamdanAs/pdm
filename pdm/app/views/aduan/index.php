<div class="container">

    <div class="form-container">
        
        <h2 class="title">
            FORM PENGADUAN
        </h2>

        <form action="<?=BASEURL?>/aduan/simpan" method="post">
            <div class="form-group">
                <label for="">NIK</label>
                <input type="text" name="nik" id="nik">
            </div>

            <div class="form-group">
                <label for="">Isi Laporan</label>
                <textarea name="isi" id="isi"></textarea>
            </div>

            <div class="form-group">
                <label for="">Foto</label>
                <input type="text" name="foto" id="foto">
            </div>

            <button type="submit" class="btn">Kirim</button>
        </form>
    </div>
</div>