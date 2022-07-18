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
                <?php include 'phpclass/Databases.php' ?>
                <?php
                $objectDB = new Databases();
                $conn = $objectDB->getConnection();
                $sql = "SELECT * FROM user";
                $result1 = $conn->query($sql);
                if ($result1->num_rows > 0){
                while ($row1 = $result1->fetch_assoc()){

                ?>
                <h1>I'm <?php echo $row1['firstname'] . " " . $row1['lastname'] ?></h1>
                <p class="intro-position">
                    <span><?php echo 'Back-end Developer' ?> </span>
                    <span><?php echo 'PHP-LARAVEL ' ?> </span>
                </p>
                <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
            </div>
        </div>
    </div>
    <ul class="intro-social">
        <li><a href="https://github.com/gramosshala"><i class="fa fa-github"></i></a></li>
        <li><a href="https://www.linkedin.com/in/gramosshala"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://www.facebook.com/gramossshala/"><i class="fa fa-facebook"></i></a></li>
        <li><a href="mailto: gramos_shala@live.com"><i class="fa fa-mail-forward"></i></a></li>
    </ul>
</section>
    <section id="about">
        <div class="row section-intro">
            <div class="col-twelve">
                <h5>About</h5>
                <h1>Let me introduce myself.</h1>
                <div class="intro-info">
                    <img src="images/profile-pic.jpg" alt="Profile Picture">
                    <p class="lead"><?php echo $row1['about'] ?></p>
                </div>
            </div>
        </div>
        <div class="row about-content">
            <div class="col-six tab-full">
                <h3>Profile</h3>
                <ul class="info-list">
                    <li>
                        <strong>Fullname:</strong>
                        <span><?php echo $row1['firstname'] . " " . $row1['lastname'] ?></span>
                    </li>
                    <li>
                        <strong>BIRTH DATE:</strong>
                        <span><?php echo date('d-m-Y', strtotime($row1['birthday'])) ?></span>
                    </li>
                    <li>
                        <strong>EMAIL:</strong>
                        <span><?php echo $row1['email'] ?></span>
                    </li>
                </ul>
        </div>
        <div class="col-six tab-full">
            <?php
            $sql1 = "SELECT * FROM skills";
            $result = $conn->query($sql1);
            if ($result->num_rows > 0){
            ?>
            <h3>Skills</h3>
            <ul class="skill-bars">
                <?php
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <li>
                        <div class="progress percent<?php echo $row['percentage'] ?> >">
                            <span><?php echo $row['percentage'] ?>%</span></div>
                        <strong><?php echo $row['name'] ?></strong>
                    </li>
                    <?php
                }
                } ?>
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
                <p class="lead"></p>
            </div>
        </div>

        <div class="row resume-timeline">
            <div class="col-twelve resume-header">
                <h2>Education</h2>
            </div>

            <div class="col-twelve">
                <?php
                $sql3 = "SELECT * FROM education";
                $result2 = $conn->query($sql3);
                if ($result2->num_rows > 0){
                while ($row2 = $result2->fetch_assoc()){

                ?>
                <div class="timeline-wrap">
                    <div class="timeline-block">
                        <div class="timeline-ico">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="timeline-header">
                            <h3><?php echo $row2['level'] ?></h3>
                            <p><?php echo date('m-Y', strtotime($row2['started'])) . "-" . $row2['ended'] ?></p>
                        </div>
                        <div class="timeline-content">
                            <h4><?php echo $row2['name'] ?></h4>
                            <p><?php echo $row2['degree'] ?></p>
                            <p>Field:<br>
                                * <?php echo $row2['field'] ?></p>
                        </div>
                    </div>
                </div
            </div>
            <?php }
            } ?>
        </div>


        <div class="row resume-timeline">
            <div class="col-twelve resume-header">
                <h2>Repository</h2>
            </div>
            <div class="col-twelve">
                <?php
                $sql4 = "SELECT * FROM repository ORDER BY started DESC";
                $result3 = $conn->query($sql4);
                if ($result3->num_rows > 0) {
                    while ($row3 = $result3->fetch_assoc()) {

                        ?>
                        <div class="timeline-wrap">
                            <div class="timeline-block">
                                <div class="timeline-ico">
                                    <i class="fa fa-code-fork"></i>
                                </div>
                                <div class="timeline-header">
                                    <h3><a href="<?php echo $row3['web'] ?>"><?php echo $row3['field'] ?></a></h3>
                                    <p><?php echo date('Y', strtotime($row3['started'])) ?></p>
                                </div>
                                <div class="timeline-content">
                                    <h4><a href="<?php echo $row3['web'] ?>"><?php echo $row3['name'] ?></a></h4>
                                    <p><?php echo $row3['body'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </section>
<section id="contact">
    <div class="row section-intro">
        <div class="col-twelve">
            <h5>Contact</h5>
            <p class="lead"></p>
        </div>
    </div>
    <div class="row contact-form">
        <div class="col-twelve">
            <!-- form -->
            <form action="phpclass/contact.php" name="contactForm" id="contactForm" method="post">
                <fieldset>
                    <div class="form-field">
                        <input name="name" type="text" id="contactName" placeholder="Name" value="" minlength="2"
                               required="">
                    </div>
                    <div class="form-field">
                        <input name="email" type="email" id="contactEmail" placeholder="Email" value=""
                               required="">
                    </div>
                    <div class="form-field">
                        <input name="subject" type="text" id="contactSubject" placeholder="Subject" value="">
                    </div>
                    <div class="form-field">
                        <textarea name="message" id="contactMessage" placeholder="message" rows="10" cols="50"
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
                <?php echo $row1['address'] ?>
            </p>
        </div>

        <div class="col-four tab-full collapse">
            <div class="icon">
                <i class="icon-mail"></i>
            </div>
            <h5>Email Me At</h5>
            <p><?php echo $row1['email'] ?>
            </p>
        </div>

        <div class="col-four tab-full">
            <div class="icon">
                <i class="icon-phone"></i>
            </div>
            <h5>Call Me At</h5>
            <p>Phone: +383 (0) <?php echo $row1['phonenumber'] ?>
            </p>
        </div>

    </div>
    <?php }
    } ?>
</section>

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