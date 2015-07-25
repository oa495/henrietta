<!DOCTYPE html>
<html class = "page-about">
    <head>
        <meta charset="utf-8"> 
        <title>Henrietta</title>
        <link rel="stylesheet" href="../styles/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
        <meta name="viewport" content="initial-scale=1">
    </head>
    <body class="daBody">
        <div id="container ap">
            <div class="background ap"></div>
            <div id="dialog-form" title="Send me a message">
                <form action="send-email.php" method="post">
                  <fieldset>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required value="Jane Smith" class="text ui-widget-content ui-corner-all" >
                    <label for="email">Email</label>
                    <input type="email" name="email" required id="email" value="jane@smith.com" class="text ui-widget-content ui-corner-all">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" class="text ui-widget-content ui-corner-all">
                    <label for="message">Message</label>
                    <input type="text" name="message" required id="message"  class="text ui-widget-content ui-corner-all">
                    <input class="submit" type="submit">
                  </fieldset>
                </form>
              </div>
             <main>
                <section class="my-info">
                    <article class="about">
                        <h2 class="aboutt">About</h2>
                        <p class="about-par">
                           Hey, My name is Henrietta Audu. I'm from Jos, Nigeria and I moved to New York in 2013 to attend the Parsons School of Design where I study Integrated Design. I sew, I draw, I design, I write. A lot of my work is reflective of that and my passion for issues pertaining to my home country and the empowerment of women and people of color. Wanna meet up? Wanna work on a project? Get in touch.
                        </p>
                        <button id="email-button" type="button">Email</button>
                    </article>
                        <article class="contact">
                        <nav class="social-nav info">
                            <ul class="soc-nav">
                                <li><a href="https://www.facebook.com/henrietta.audu" target="blank" title="Facebook"> <img class="soc-icon"  width="24" height="24" src="../images/facebook55.png"/></a></li>
                                <li><a href="https://twitter.com/henriettaudu" target="blank" title="Linkedin"> <img class="soc-icon" width="25" height="25" src="../images/twitter13.png" /></a></li>
                                <li><a href="http://www.henriettaudu.tumblr.com/" target="blank" title="Twitter"> <img class="soc-icon" width="14" height="25" src="../images/logotype1.png"/></a></li>
                            </ul>
                        </nav>
                    </article>
                </section>
           </main>
             <nav class="top-nav">
                  <?php include '../title/title.php'; ?>
              </nav>
            <figure>
                <img class="my-photo" src ="../images/fp.jpg"/>
            </figure>
            <nav class="b-nav otherp">
              <?php include '../nav/about.php'; ?>
            </nav>
        </div>
        </div>
    </body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../scripts/about.js"></script>
        <script src="../scripts/jquery-ui.js"></script>
 </html>