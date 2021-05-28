<div class="container home">
  <div class="main-logo">
    <img src="<?=BASEURL;?>/img/main-logo.png" alt="">
  </div>

  <?php
    Flasher::flash();
  ?>

  <div class="buttons-group">
    <a href="<?=BASEURL;?>/aduan" class="card">
      <div class="card-img">
        <img src="<?=BASEURL;?>/img/email.png" alt="" srcset="">
      </div>
      <p>Buat Aduan</p>
    </a>

    <a href="<?=BASEURL?>/aduan/list" class="card">
      <div class="card-img">
        <img src="<?=BASEURL;?>/img/clipboard.png" alt="" srcset="">
      </div>
      <p>Daftar Aduan</p>
    </a>

    <a href="#" class="card">
      <div class="card-img">
        <img src="<?=BASEURL;?>/img/user.png" alt="" srcset="">
      </div>
      <p>Profil</p>
    </a>

    <a href="#" class="card">
      <div class="card-img">
        <img src="<?=BASEURL;?>/img/logout.png" alt="" srcset="">
      </div>
      <p>Quit</p>
    </a>
  </div>
</div>
