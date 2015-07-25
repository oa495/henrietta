<!DOCTYPE html>
<html class = "page-home">
    <head>
        <meta charset="utf-8"> 
        <title>Henrietta</title>
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
        <meta name="viewport" content="initial-scale=1">
    </head>
    <body class="daBody galleryp">
        <div id = "container">
           <nav class="b-nav galleryp">
              <?php include '../nav/gallery.php'; ?>
            </nav>
           <main>
            <div id="gallery">
                <section class="row">
                  <img class="gallery-image"  src="../images/africans.jpg"/>
                  <img class="gallery-image" src="../images/art3.jpg"/>
                  <img class="gallery-image" id="image3" src="../images/art4.jpg"/>
                <section class="row">
                   <img class="gallery-image"  src="../images/art5.jpg"/>
                    <img class="gallery-image" src="../images/art1.png"/>
                    <img class="gallery-image" src="../images/art2.png"/>
                </section>
                  <section class="row">
                   <img class="gallery-image"  src="../images/meaning1.jpg"/>
                   <img class="gallery-image"  src="../images/meaning2.jpg"/>
                   <img class="gallery-image"  src="../images/meaning3.jpg"/>
                </section>
                 <section class="row">
                    <img class="gallery-image"  src="../images/charcoal.jpg"/>
                   <img class="gallery-image"  src="../images/inyourbag.jpg"/>
                    <img class="gallery-image"  src="../images/inyourbag2.jpg"/>
                </section>
                <section class="row">
                    <img class="gallery-image"  src="../images/hair.png"/>
                    <img class="gallery-image" src="../images/hair3.png"/>
                    <img class="gallery-image" src="../images/hair2.png"/>
                </section>
            </div>
         </main>
          <nav class="top-nav">
              <?php include '../title/title.php'; ?>
            </nav>
        </div>
    </body>
    <script src="../scripts/gallery.js"></script>
 </html>