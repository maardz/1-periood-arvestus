<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <?php  

          $rand_nr=rand(100,200);

          if($rand_nr>150){
            echo 'Juhuslik number "'.$rand_nr.'" on suurem kui 150';
          }else if($rand_nr<150){
            echo 'Juhuslik number "'.$rand_nr.'" on väiksem kui 150';
          }else {
            echo 'Juhuslik number on "'.$rand_nr.'"';
          }

        ?>
        <h2>Juhuslik pilt</h2>
        <?php $rand_img=rand(1,12); ?>
        <img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/<?php echo $rand_img; ?>.jpg">
        <h2>Kõikide piltide väljastamine</h2>
        <?php 
          for ($i=1; $i <=12 ; $i++) { ?>
            <img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/<?php echo $i; ?>.jpg">
        <?php
          }
        ?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
