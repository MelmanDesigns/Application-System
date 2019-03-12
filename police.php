<?php
session_name('hydrid');
session_start();
require_once 'inc/connect.php';
require_once 'inc/config.php';

$page['name'] = 'Police Department';
?>
<?php include 'inc/page-top.php'; ?>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/materialize.css">
    <link rel="icon" href="assets/images/saflogo.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/images/saflogo.ico" type="image/x-icon"/>
</head>

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
            <div class="row">
                <div class="col">
                    <div class="card-box z-depth-2">
                        <h4 class="header-title mt-0 m-b-30">Police Department Images</h4>
                        <div class="row">
                            <img class="materialboxed responsive-img" data-caption="Police Department Officers taking notes during an important briefing." src="assets/images/departments/pd/pd1.jpg" alt="Civilian Image #1" width="300" height="215">
                            <?php echo '&nbsp' ?>
                            <img class="materialboxed responsive-img" data-caption="Police and Sheriff working an active shootout." src="assets/images/departments/pd/pd2.jpg" alt="Civilian Image #2" width="300" height="215">
                            <br>
                        </div>
                        <div class="row">
                            <img class="materialboxed responsive-img" data-caption="Police Officer providing traffic control for Fire / EMS." src="assets/images/departments/pd/pd3.jpg" alt="Civilian Image #3" width="300" height="215">
                            <?php echo '&nbsp' ?>
                            <img class="materialboxed responsive-img" data-caption="2 Police Officers sneakily running radar." src="assets/images/departments/pd/pd4.jpg" alt="Civilian Image #4" width="300" height="215">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-box z-depth-2">
                        <h4 class="header-title mt-0 m-b-30">Police Department Information</h4>
                            <ul class="collapsible popout">
                              <li>
                                <div class="collapsible-header"><i class="material-icons">cloud</i>General Info</div>
                                <div class="collapsible-body">
                                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, totam?</span>
                                </div>
                              </li>
                              <li>
                                <div class="collapsible-header active"><i class="material-icons">contacts</i>Command Structure</div>
                                <div class="collapsible-body">
                                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, totam?</span>
                                </div>
                              </li>
                              <li>
                                <div class="collapsible-header"><i class="material-icons">dehaze</i>Department Files</div>
                                <div class="collapsible-body">
                                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, totam?</span>
                                </div>
                              </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- CONTENT HERE -->
        </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="/assets/js/materialize.js"></script>
      <script>
        $(document).ready(function(){
          // Init Media
          $('.materialboxed').materialbox();
          // Init Collapsible
          $('.collapsible').collapsible();
        });
      </script>
        <!-- CONTENT END -->
        <?php include 'inc/copyright.php'; ?>
        <?php include 'inc/page-bottom.php'; ?>
</body>
