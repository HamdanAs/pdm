<h1 class="title list-title">LIST ADUAN</h1>

<table class="table-content">
    <thead>
        <tr>
            <th>Tanggal Pengaduan</th>
            <th>NIK Pengadu</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($data['aduan'] as $aduan) : ?>
            <tr>
                <td><?=$aduan['tgl_pengaduan']?></td>
                <td><?=$aduan['nik']?></td>
                <td><?=$aduan['status']?></td>
                <td>
                    <a href="<?=BASEURL;?>/aduan/detail/<?=$aduan['id_pengaduan']?>" class="list-button">Lihat Detail</a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
    
</table>

<div class="btn-group mb-5">
    <a href="<?=BASEURL;?>/home" class="btn reset">Kembali</a>
</div>