<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="James Dennison">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php if(isset($page_title)){ ?>
    <title><?php echo $page_title; ?></title>
    <?php } 
    else { ?>
    <title>Default Camson Envelopes - Coloured, Printed, Plain, Business and Invitation Envelopes</title>
    <?php };?>

    <?php if(isset($page_description)){ ?>
    <meta name="description" content="<?php echo $page_description; ?>" />
    <?php } 
    else { ?>
    <meta name="description" content="Camson Envelopes supplies envelopes in any quantity and size. Including DL, C2, C5 sizes, bespoke, personalised, invitation, printed and coloured envelopes." />
    <?php };?>

    <?php if(isset($page_keywords)){ ?>
    <meta name="keywords" content="<?php echo $page_keywords; ?>" />
    <?php } 
    else { ?>
    <meta name="keywords" content="envelopes, c4, c5, dl, invitation, colour, bespoke." />
    <?php };?>
