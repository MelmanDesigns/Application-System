<?php
require_once 'inc/connect.php';

require_once 'inc/config.php';

$page['name'] = 'Main Page';
?>
<?php include 'inc/page-top.php'; ?>
<link rel="icon" href="assets/images/saflogo.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="assets/images/saflogo.ico" type="image/x-icon"/>

<link rel="stylesheet" href="/assets/css/materialize.css">

<script src="/assets/js/materialize.js"></script>

<body>
    <?php include 'inc/top-nav.php'; ?>
    <!-- CONTENT START -->
    <div class="wrapper m-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h4 class="page-title"><?php echo $page['name']; ?></h4>
                </div>
            </div>
            <div class="alert alert-warning" role="alert">
                <?php echo '<strong>Warning: </strong>'; ?> This is a ALPHA release. Beware that modules are missing and bugs may be present. Report any bugs on our Discord.
            </div>
            <div class="row">
                <div class="col s8">
                    <div class="card-box">
                        <h4 class="header-title mt-0 m-b-30">Welcome to the San Andreas' Finest Application Website</h4>
                        <p><b>This is a Alpha version of our new Application System.</b></p> <p>It will take time to fix out the bugs and glitches. <i>Please beware that bugs and glitches will occur and we will work quickly to solve those issues.</i></p>
                        <div class="divider blue-grey darken-1"></div>
                        <h5 class="header-title mt-sm-3 m-b-15">About us</h5>
                        <p>San Andreas' Finest is a community based on civilian life role-play with extensively trained emergency services. We aim to give the best experience to all members. Here at SA'F we're <b><i>Not just a Community, but a Family. Where everyone has a Chance to Make a Difference.</i></b></p>
                        <div class="divider blue-grey darken-1"></div>
                        <h5 class="header-title mt-sm-3 m-b-15">Before you apply</h5>
                        <p>We strongly recommend you to take the time and effort required to be here. Applications with little to no effort will be denied!</p>
                        <div class="divider blue-grey darken-1"></div>
                        <h5 class="header-title mt-sm-3 m-b-15">Requirements</h5>
                        <ul style="list-style-type:circle;">
                            <li>
                                <p>You must be 15+ to apply.</p>
                            </li>
                            <li>
                                <p>You must have a working microphone.</p>
                            </li>
                            <li>
                                <p>You must have a legal copy of Grand Theft Auto V for the PC.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col s4">
                    <div class="card-box">
                        <h4 class="header-title mt-0 m-b-30">Community Showcase Video</h4>
                        <video class="responsive-video" width="672" height="378" controls>
                            <source src="assets/videos/slideshow.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT END -->
    <?php include 'inc/copyright.php'; ?>
    <?php include 'inc/page-bottom.php'; ?>
