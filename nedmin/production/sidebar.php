 <!-- sidebar menu -->
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3> <?php 

      if ($kullanicicek['kullanici_yetki']==5) {
       echo "Yetki: Yönetici";
     } ?></h3>
     <ul class="nav side-menu">
       <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa<span class="label label-success pull-right"></span></a></li>

        <li><a><i class="fa fa-cog"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="genel-ayar.php">Genel Ayarlar</a></li>
            <li><a href="iletisim-ayar.php">İletişim Ayarlar </a></li>
            <li><a href="sosyal-ayar.php">Sosyal Medya Ayarları</a></li>

          </ul>
        </li>
      
         <li><a href="hakkimizda.php"><i class="fa fa-book"></i> Hakkımızda<span class="label label-success pull-right"></span></a></li>

         <li><a href="slider.php"><i class="fa fa-image"></i> Slider İşlemleri<span class="label label-success pull-right"></span></a></li>

         <li><a href="menu.php"><i class="fa fa-list"></i> Menü İşlemleri<span class="label label-success pull-right"></span></a></li>

         <li><a href="icerik.php"><i class="fa fa-file-text"></i> İçerik İşlemleri<span class="label label-success pull-right"></span></a></li>

         <li><a href="galeri.php"><i class="fa fa-image"></i> Resim Galeri<span class="label label-success pull-right"></span></a></li>



    </ul>

  </div>


</div>
            <!-- /sidebar menu -->