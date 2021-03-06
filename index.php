<?php
/****************************************************
*
* @File:          index.php ledgerium
*
*****************************************************/
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->
    <head>
        <title>Ledgerium || Blockchain accounting system</title>
        <?php include('templates/head.php'); ?>
    </head>
    <body class="front-page">

        <!-- .hero-head -->
        <section class="hero is-fullheight is-large">
            <div class="hero-body">
                <?php include('templates/navegation.php'); ?>
                <div class="container">
                    <div class="tile is-5 is-vertical">
                        <h1 class="title">
                            The Advanced Accounting Ledger on the Blockchain</h1>
                        <div>
                            <a href="#">Read the whitepaper →</a>
                        </div>
                        <div>
                            <a href="#">LGUM Token →</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container has-text-centered down-arrow">
                <img src="assets/images/down-arrow.svg" width="22" height="22">
            </div>
        </section>
        <!-- /.hero-head -->

        <section class="section is-small">
            <h2 class="section-title has-text-centered">Ledgerium</h2>
        </section>

        <!-- -->

        <div class="container">
            <div class="tabs is-centered" id="tab_header">
                <ul>
                    <li class="item is-active" data-option="1">
                        <a>Blockchain technology</a>
                    </li>
                    <li class="item" data-option="2">
                        <a>Modern Accounting</a>
                    </li>
                    <li class="item" data-option="3">
                        <a>Cloud technology</a>
                    </li>
                    <li class="item" data-option="3">
                        <a>Secure</a>
                    </li>
                </ul>
            </div>
            <div id="tab_container">
                <div class="container_item is-active" data-item="1">
                    <div class="columns is-vcentered">

                        <div class="colums is-6">
                            <video
                                controls="controls"
                                style="width:640px;height:360px;"
                                poster="assets/images/poster.png">
                                <source
                                    src="https://www.html5rocks.com/en/tutorials/video/basics/devstories.webm"
                                    type='video/webm;codecs="vp8, vorbis"'/>
                                <source
                                    src="https://www.html5rocks.com/en/tutorials/video/basics/devstories.mp4"
                                    type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'/>
                            </video>

                        </div>
                        <div class="column is-offset-1 is-5 content">
                        <h2 class="title">Blockchain technology</h2>
                        <h3 class="subtitle">Ledger systems</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Aliquam perferendis, consequuntur facere molestiae explicabo reprehenderit
                            vitae. Deleniti neque dolore nobis cum eius nulla porro quos sint delectus sed
                            amet adipisci quaerat laudantium est distinctio dolor, at repudiandae similique
                            doloribus rem. Obcaecati recusandae fugiat itaque nihil vel, mollitia modi,
                            repellat, voluptatibus, repellendus nostrum nisi veritatis. Odit magnam quia
                            magni quibusdam molestiae ut.</div>

                    </div>

                </div>
                <div class="container_item" data-item="2">
                    Nobis quibusdam veritatis voluptatum, quasi. Unde eaque reprehenderit expedita
                    at earum, accusantium laudantium vitae minima, veritatis in dolorem, illo itaque
                    nihil cum iusto tenetur saepe repellendus nam eum culpa magnam quae! Nam,
                    deleniti? Hic quibusdam sed perferendis quasi mollitia! Obcaecati recusandae
                    fugiat itaque nihil vel, mollitia modi, repellat, voluptatibus, repellendus
                    nostrum nisi veritatis. Odit magnam quia magni quibusdam molestiae ut.
                </div>
                <div class="container_item" data-item="3">
                    Beatae neque magni recusandae tempore ad nobis magnam. Explicabo, a! Molestiae
                    aperiam necessitatibus suscipit mollitia dolorum quas possimus ipsa, nemo quod
                    ipsam veniam, incidunt maxime quos iusto reiciendis. Eligendi cupiditate
                    asperiores fuga dolore. Reiciendis eligendi eaque autem, aperiam delectus
                    nesciunt enim similique ut laborum blanditiis tempora quidem, nobis unde
                    incidunt alias atque dignissimos recusandae quibusdam cum dolor voluptas
                    corrupti!
                </div>
            </div>
        </div>
        

        <div class="tabs is-boxed">
  <ul>
    <li class="is-active">
      <a id="1">
        <span class="icon is-small"><i class="fa fa-image"></i></span>
        <span>Pictures</span>
      </a>
    </li>
    <li>
      <a id="2">
        <span class="icon is-small"><i class="fa fa-music"></i></span>
        <span>Music</span>
      </a>
    </li>
    <li>
      <a id="3">
        <span class="icon is-small"><i class="fa fa-film"></i></span>
        <span>Videos</span>
      </a>
    </li>
    <li>
      <a id="4">
        <span class="icon is-small"><i class="fa fa-file-text-o"></i></span>
        <span>Documents</span>
      </a>
    </li>
  </ul>
</div>

<div class="tab-content">
  <div class="tab-pane is-active" id="1">Picture content</div>
  <div class="tab-pane" id="2">Music content</div>
  <div class="tab-pane" id="3">Videos content</div>
  <div class="tab-pane" id="4">Documents content</div>
</div>
<br><br>
<div class="tabs is-boxed">
  <ul>
    <li class="is-active">
      <a id="1">
        <span class="icon is-small"><i class="fa fa-image"></i></span>
        <span>Pictures</span>
      </a>
    </li>
    <li>
      <a id="2">
        <span class="icon is-small"><i class="fa fa-music"></i></span>
        <span>Music</span>
      </a>
    </li>
    <li>
      <a id="3">
        <span class="icon is-small"><i class="fa fa-film"></i></span>
        <span>Videos</span>
      </a>
    </li>
    <li>
      <a id="4">
        <span class="icon is-small"><i class="fa fa-file-text-o"></i></span>
        <span>Documents</span>
      </a>
    </li>
  </ul>
</div>

<div class="tab-content">
  <div class="tab-pane is-active" id="1">Picture content</div>
  <div class="tab-pane" id="2">Music content</div>
  <div class="tab-pane" id="3">Videos content</div>
  <div class="tab-pane" id="4">Documents content</div>
</div>

        <section class="section is-small">
            <h2 class="section-title has-text-centered">Who needs ledgerium</h2>
        </section>

        <!-- .titles -->
        <div class="container">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                        <div class="tile is-parent is-vertical is-4">
                            <article class="tile is-child notification bg-blue">
                                <h2 class="subtitle">Business entities need to be audited</h2>
                            </article>
                        </div>
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification bg-grey">
                                <h2 class="subtitle">Non-commercial subjects need to be audited</h2>
                            </article>
                        </div>
                    </div>
                    <div class="tile">
                        <div class="tile is-parent is-vertical is-8">
                            <article class="tile is-child notification bg-brown-image">
                                <h2 class="subtitle">Small and medium business need investment</h2>
                            </article>
                        </div>
                        <div class="tile is-parent is-vertical is-4">
                            <article class="tile is-child notification bg-brown">
                                <h2 class="subtitle">Blockchain related business</h2>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification bg-blue-image">
                        <h2 class="subtitle">Small and medium business need investment</h2>
                    </article>
                </div>
            </div>
        </div>

 <!-- to do
        <section class="section is-small">
            <h2 class="section-title has-text-centered">Who is talking about us?</h2>
        </section>

        <div class="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac massa non
                massa dapibus blandit et non dui.</p>
        </div>
-->
        <section class="section is-small">
            <h2 class="section-title has-text-centered">Find out more</h2>
        </section>

        <div class="contact-footer has-text-white">
            <div class="container">

                <div class="form">
                    <h2 class="subtitle has-text-centered has-text-white is-size-3">Get our pitch pack</h2>

                    <div class="columns">
                        <div class="column is-6">

                            <div class="control">
                                <label>Name</label>
                                <input class="input is-medium" type="text" placeholder="Your name">
                            </div>
                            <div class="control">
                                <label>Company</label>
                                <input class="input is-medium" type="text" placeholder="Your company name">
                            </div>
                            <div class="control">
                                <a class="button is-medium">Submit</a>
                            </div>

                        </div>
                        <div class="column is-6">

                            <div class="control">
                                <label>Email</label>
                                <input class="input is-medium" type="text" placeholder="Your email">
                            </div>
                            <div class="control">
                                <label>Message</label>
                                <textarea
                                    class="textarea is-medium"
                                    type="textarea"
                                    placeholder="Your message"
                                    rows="3"
                                    cols="33"
                                    maxlength="200"></textarea>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class='carousel carousel-animated carousel-animate-slide' data-size="5">
            <div class='carousel-container'>
                <div class='carousel-item is-active'>
                    <figure class="image is-2by1"><img src="assets/images/hayek-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/fintech-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/async-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/winvestor-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/fintech-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/async-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/winvestor-block.png"></figure>
                </div>
            </div>
        </div>

    </div>
    <?php include('templates/footer.php'); ?>
</body>
</html>