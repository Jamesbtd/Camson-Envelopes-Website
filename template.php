<?php

if (is_file('config.php')) {
	require_once('config.php');
};

$page_title = 'Camson Envelopes - Coloured, Printed, Plain, Business and Invitation Envelopes';
$page_description = 'Camson Envelopes supplies envelopes in any quantity and size. Including DL, C2, C5 sizes, bespoke, personalised, invitation, printed and coloured envelopes.';
$page_keywords = 'envelopes, c4, c5, dl, invitation, colour, bespoke';

include ($path . '/includes/head.php');

include ($path . '/includes/header.php');?>

<!-- Page Content -->
<div class="row">

	<?php include ($path . '/includes/contact_sidebar.php');?>
</div>
<!-- /main content .row -->
            
    <!-- /.row -->
<?php include ($path . '/includes/footer.php');?>