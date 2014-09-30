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
        <?php
          $count=0;
          foreach ($blog_news as $article) { ?>
            <article class="blog-post">
              <h2 class="post-title"><?php echo $article["post_title"]; ?></h2>
              <div class="post-excerpt">
                <?php echo $article["post_excerpt"]; ?>
              </div>

              <div class="post-body">
                <?php echo $article["post_body"]; ?>
              </div>
            </article>
        <?php
            $count++;
            if($count==2)break;
          }
        ?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
    
  </div>
</body>
</html>
