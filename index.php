<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS    ===================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/vendor.css">

    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

</head>

<body id="top">

<?php include 'includes/header.php'; ?>

<section id="intro">
    <div class="intro-overlay"></div>
    <div class="intro-content">
        <div class="row">
            <div class="col-twelve">
                <h5>Hello, World.</h5>
                <h1>I'm <?php echo 'Gramos Shala' ?>>.</h1>
                <p class="intro-position">
                    <span><?php echo 'Back-end Developer' ?> </span>
                    <span><?php echo 'PHP-LARAVEL ' ?> </span>
                </p>
                <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
            </div>
        </div>
    </div>

    <ul class="intro-social">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://www.instagram.com/gramosshala"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://github.com/gramosshala"><i class="fa fa-github"></i></a></li>
    </ul>
</section>

<section id="about">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>About</h5>
            <h1>Let me introduce myself.</h1>

            <div class="intro-info">
                <img src="images/profile-pic.jpg" alt="Profile Picture">
                <p class="lead">///////////////////////.</p>
            </div>
        </div>
    </div>

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Profile</h3>
            <p>L///.</p>

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span>///////////</span>
                </li>
            </ul>
        </div>

        <div class="col-six tab-full">
            <h3>Skills</h3>
            <p>//////////</p>

            <ul class="skill-bars">
                <li>
                    <?php $d = 30; ?>
                    <div class="progress percent<?php echo $d ?> >"><span><?php echo $d ?>%</span></div>
                    <strong>PHP</strong>
                </li>
            </ul>
        </div>
    </div>
    <div class="row button-section">
        <div class="col-twelve">
            <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
            <a href="https://github.com/gramosshala" title="Download CV" class="button button-primary">My Profil</a>
        </div>
    </div>
</section>

<section id="resume" class="grey-section">
    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Resume</h5>
            <h1>More of my credentials.</h1>

            <p class="lead">/////////</p>
        </div>
    </div>

    <div class="row resume-timeline">
        <div class="col-twelve resume-header">
            <h2>Work Experience</h2>
        </div>

        <div class="col-twelve">
            <div class="timeline-wrap">
                <div class="timeline-block">
                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="timeline-header">
                        <h3>PHP</h3>
                        <p>July 2015 - Present</p>
                    </div>
                    <div class="timeline-content">
                        <h4>StarLabs</h4>
                        <p>////</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row resume-timeline">
        <div class="col-twelve resume-header">
            <h2>Education</h2>
        </div>
        <div class="col-twelve">
            <div class="timeline-wrap">
                <div class="timeline-block">
                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="timeline-header">
                        <h3>Bachelor Degree</h3>
                        <p>July 2018 - Present</p>
                    </div>
                    <div class="timeline-content">
                        <h4>UBT</h4>
                        <p>CSE</p>
                    </div>
                </div>
            </div
        </div>
    </div>

</section>
<section id="contact">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Contact</h5>
            <h1>I'd Love To Hear From You.</h1>

            <p class="lead">///</p>

        </div>
    </div>

    <div class="row contact-form">

        <div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
                <fieldset>

                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2"
                               required="">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value=""
                               required="">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50"
                                  required=""></textarea>
                    </div>
                    <div class="form-field">
                        <button class="submitform">Submit</button>
                        <div id="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </form>


            <div id="message-warning">
            </div>

            <div id="message-success">
                <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>

        </div>

    </div> <!-- /contact-form -->

    <div class="row contact-info">

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-pin"></i>
            </div>

            <h5>Where to find me</h5>

            <p>
                ///
            </p>

        </div>

        <div class="col-four tab-full collapse">

            <div class="icon">
                <i class="icon-mail"></i>
            </div>

            <h5>Email Me At</h5>

            <p>gramos_shala@live.com
            </p>

        </div>

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-phone"></i>
            </div>

            <h5>Call Me At</h5>

            <p>Phone: 045..
            </p>

        </div>

    </div> <!-- /contact-info -->

</section> <!-- /contact -->


<!-- footer
================================================== -->

<?php include 'includes/footer.php'; ?>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>

</html>