<?php
session_name('hydrid');
session_start();
require_once 'inc/connect.php';
require_once 'inc/config.php';
require_once 'inc/backend/user/auth/userIsLoggedIn.php';

$page['name'] = 'Test';
?>
<?php include 'inc/page-top.php'; ?>
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
        </div>
	</div>
	 <!-- CONTENT HERE -->
	 <blockquote>Yeetus Deletus</blockquote>
	<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4>Modal Header</h4>
			<p>A bunch of text</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
		</div>
	</div>
        <!-- CONTENT END -->
</body>
        <?php include 'inc/copyright.php'; ?>
        <?php include 'inc/page-bottom.php'; ?>
