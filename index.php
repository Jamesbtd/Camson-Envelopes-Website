<?php

if (is_file('config.php')) {
	require_once('config.php');
};

$page_title = 'Camson Envelopes - Coloured, Printed, Plain, Business and Invitation Envelopes';
$page_description = 'Camson Envelopes supplies envelopes in any quantity and size. Including DL, C2, C5 sizes, bespoke, personalised, invitation, printed and coloured envelopes.';
$page_keywords = 'envelopes, c4, c5, dl, invitation, colour, bespoke';

include ($path . '/includes/head.php');

include ($path . '/includes/header.php');?>

<!-- Carousel -->
<div class="myCarouselContainer">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active black" style="background: url('images/home/carousel1.jpg') center center no-repeat scroll;">
                <div class ="inner">
                    <h2>Coloured Envelopes for any Occasion</h2>
                    <p>Any style. Any size. Any colour.</p>
                </div>
            </div>
            <div class="item black" style="background: url('images/home/carousel2.jpg') center center no-repeat scroll;">
                <div class ="inner">
                    <h2>Our business is business envelopes</h2>
                    <ul>
                        <li><p>Printed or bespoke to any design.</p></li>
                        <li><p>DL, C4, C5, C6 and more.</p></li>
                        <li><p>Any quantity order welcome.</p></li>
                    </ul>
                </div>
            </div>
            <div class="item white" style="background: url('images/home/carousel3.jpg') center center no-repeat scroll;">
                <div class ="inner">
                    <h2>20 years of envelope excellence.</h2>
                    <p>We pride ourselves on quality envelopes
                    <br>at rock bottom prices.</p>
                </div>
            </div>
            <div class="item black" style="background: url('images/home/carousel4.jpg') center center no-repeat scroll;">
                <div class ="inner">
                    <h2>SPECIAL OFFER - C6 Manilla Gummed </h2><h3>just £22/1000</h3>
                    <p>C6 114 x 162mm, 4 1/2 x 6 3/8”, Manilla brown, gummed envelopes opening on long edge.
                    <br>24 hour delivery.</p>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

<!-- Page Content -->
<div class="row">
    <div class="col-sm-8 camson-content">
        <h3><strong>Any size, any print, any quantity; always quality.</strong></h3>
            <p>With over <i>20 years experience</i>, we are the experts in all things envelopes. Call us old fashioned We always provide a personal service and value our customers.
            </p>
            <p>Based in Kent with our main customer base in London, we are experienced importers and exporters with the ability to source and print any envelope and the capacity to stock and supply any requirement. 
            </p>
            <p>Any size; protective envelopes; padded, board backed, jiffy bags, bubble bags, bubble envelopes. Decorated envelopes; coloured, tissue lined, personalised, tissue lined; the list is endless.
            </p>
            <p>We can <b>print to any specification;</b> Gold print <span class="glyphicon glyphicon-ok"></span> full colour <span class="glyphicon glyphicon-ok"></span> floodcoat <span class="glyphicon glyphicon-ok"></span> different print on each envelope <span class="glyphicon glyphicon-ok"></span>. We also supply bespoke envelopes made to order. All our envelopes are very high quality and subject to strict quality checks. Please <b>call +44(0)1732 368949</b> to get a quote or discuss what personlisation is possible.
            </p>
            <br><a class="btn btn-success btn-lg btn-center" style="width: 100%" href="feedback.html">Email us for a quote&raquo;</a>
    </div>

        <?php include ($path . '/includes/contact_sidebar.php');?>

</div>
<!-- /main content .row -->
<div class="row" style="padding:20px">
    <div class="panel panel-info" style="margin: 20px">
        <div class="panel-heading">
            <h3 class="panel-title"><b>Special Offer:</b> C6 114 x 162mm 4 1/2 x 6 3/8” Manilla brown gummed envelopes</h3>
        </div>
        <div class="panel-body">
            <p>Open on long edge, boxed in 1000’s, take A6 paper or cards (A4 folded twice) – need moisture to seal.</p>
            <p><b>£22.00 per 1000</b> plus £12.00 carriage, any quantity, 24 hour courier.</p>
            <a class="btn btn-success btn-sml" href="envelopes/specialoffers.html">View all special offers&raquo;</a>
        </div>
    </div>
    <div style="padding-top:20px">
        <div class="col-sm-3 camson-homeAd">
            <img class="img-circle img-responsive img-center" src="images/home/different_envelope_sizes.png" alt="">
            <h2>Expert Printers</h2>
            <p>We use the latest digital printers allowing us to print each envelope with a different design at no extra cost.</p><p>We also provide metallic and plain embossing and lamination. Anything is possible!</p>
        </div>
        <div class="col-sm-3 camson-homeAd">
            <img class="img-circle img-responsive img-center" src="images/home/envelope_delivery.png" alt="">
            <h2>Local Service, International Reliability</h2>
            <p>We are experienced exporters and a family-run business, which means a friendly hands-on service, no matter how small or large the order.</p>
        </div>
        <div class="col-sm-3 camson-homeAd">
            <img class="img-circle img-responsive img-center" src="images/home/1-box-to-1-million-envelopes.png" alt="">
            <h2>From 1 box to 1 million</h2>
            <p>We stock a large variety of envelopes on which there is no minimum order quantity. We also export shipments of envelopes all around the world.</p>
        </div>
        <div class="col-sm-3 camson-homeAd">
            <img class="img-circle img-responsive img-center" src="images/home/Camson_Envelopes_Range_Of_Envelopes.png" alt="">
            <h2>Any Design, Any Size</h2>
            <p>No matter what your requirement, we have the technical expertise and industry knoweledge to deliver envelopes of any speficiation. From printed mailers to specialist medical packaging. </p>
        </div>
    </div>
    <hr>
</div>              
    <!-- /.row -->
<?php include ($path . '/includes/footer.php');?>