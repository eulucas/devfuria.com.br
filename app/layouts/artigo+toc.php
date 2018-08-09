<!DOCTYPE html>
<html>
  <head>

    <?php include(Site::$path['includes/'] . "head.php") ?>
    <?php include(Site::$path['/'] . "/app/assets/boots3/include-css.php") ?>

  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include(Site::$path['includes/'] . "bread-crumb.php") ?>
        </div>
      </div>
    </div>

    <?php //include(Site::$path['includes/'] . "ad-video.php") ?>


    <article class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="page-header">
            <h1><?php echo $page->front['title'] ?> <br /><small><?php echo $page->front['description'] ?></small></h1>
          </div>
            <?php echo $content ?>
        </div>
        <div class="col-md-3 hidden-xs">

          <nav id="toc" data-toggle="toc" data-spy="affix">
            <p>Neste artigo...</p>
          </nav>

        </div>
      </div>
    </article>

    <?php include(Site::$path['includes/'] . "nav-next-prev.php") ?>

    <hr />

    <?php include(Site::$path['includes/'] . "disqus.php") ?>

    <?php include(Site::$path['includes/'] . "footer.php") ?>
    <?php include(Site::$path['includes/'] . "footer-js.php") ?>

  </body>
</html>
