@extends("..layouts.head")

@section("specific_title")
 : Partners
@stop

@section("specific_css")
{!! Html::style("css/partners.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<div class="banner-page-title">Our Partners</div>
<div class="body-section mg-b-2 mg-t-1">
	<div class="small-12 small-centered">
	    <ul class="partners">
	    	<!-- <li>
	            <div>
	            	<a href="http://www.agoda.com/" target="_blank"><img class="thumbnail-container" src="images/logo/agoda-logo.png" alt=""></a>
	            </div>
	            <div><h5>agoda</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="https://www.tripadvisor.com/" target="_blank"><img class="thumbnail-container" src="images/logo/trip-logo.png" alt=""></a>
	            </div>
	            <div><h5>trip advisor</h5></div>
	        </li> -->
	        <li>
	        	<div>
	            	<a href="http://vrtweb.rd.go.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/vat.png" alt=""></a>
	            </div>
	            <div><h5>vat</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="http://www.atta.or.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/atta.png" alt=""></a>
	            </div>
	            <div><h5>atta</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="http://www.tourismthailand.org/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/amazing-thailand.png" alt=""></a>
	            </div>
	            <div><h5>amazing thai</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a data-open="lmct" target="_blank"><img class="thumbnail-container" src="images/logo/footer/lmtc.png" alt=""></a>
	            </div>
	            <div><h5>lower mekong</h5></div>
	        </li>
	        <!-- <li>
	        	<div>
	            	<a href="http://www.showdc.co.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/showdc.png" alt=""></a>
	            </div>
                <div><h5>showdc</h5></div>
            </li> -->
	        <li>
	            <div>
	            	<a href="http://www.bangkok.go.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/bangkok-metro.png" alt=""></a>
	            </div>
	            <div><h5>bma</h5></div>
	        </li>
	        <li>
	        	<div>
	            	<a href="http://www.touristpolice.go.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/police.png" alt=""></a>
	            </div>
	            <div><h5>tourist police</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="http://airportthai.co.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/aot.png" alt=""></a>
	            </div>
	            <div><h5>aot</h5></div>
	        </li>
	    </ul>
	</div>
	<!-- modal -->
    <div class="reveal lmct" id="lmct" data-reveal data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <h4 align="center">Lower Mekong Tourism Cities</h4>
        <hr>
        <div class="row">
            <div class="small-6 columns">
                <p lang="th" align="center"><a href="http://www.phnom-penh.co/" target="_blank">พนมเปญ</a></p>
                <p lang="en" align="center"><a href="http://www.phnom-penh.co/" target="_blank">Phnom Penh</a></p>
                <p lang="jp" align="center"><a href="http://www.phnom-penh.co/" target="_blank">Phnom Penh</a></p>
                <p lang="ch" align="center"><a href="http://www.phnom-penh.co/" target="_blank">Phnom Penh</a></p>
            </div>
            <div class="small-6 columns">
                <p lang="th" align="center"><a href="http://www.tourismlaos.org/show.php?Cont_ID=20" target="_blank">เวียงจันทน์</a></p>
                <p lang="en" align="center"><a href="http://www.tourismlaos.org/show.php?Cont_ID=20" target="_blank">Vientiane</a></p>
                <p lang="jp" align="center"><a href="http://www.tourismlaos.org/show.php?Cont_ID=20" target="_blank">Vientiane</a></p>
                <p lang="ch" align="center"><a href="http://www.tourismlaos.org/show.php?Cont_ID=20" target="_blank">Vientiane</a></p>
                
            </div>
            <div class="small-6 columns">
                <p lang="th" align="center"><a href="http://www.eng.hochiminhcity.gov.vn/visitors/Lists/Posts/AllPosts.aspx?CategoryId=14" target="_blank">โฮจิมินห์</a></p>
                <p lang="en" align="center"><a href="http://www.eng.hochiminhcity.gov.vn/visitors/Lists/Posts/AllPosts.aspx?CategoryId=14" target="_blank">Ho Chi Minh City</a></p>
                <p lang="jp" align="center"><a href="http://www.eng.hochiminhcity.gov.vn/visitors/Lists/Posts/AllPosts.aspx?CategoryId=14" target="_blank">Ho Chi Minh City</a></p>
                <p lang="ch" align="center"><a href="http://www.eng.hochiminhcity.gov.vn/visitors/Lists/Posts/AllPosts.aspx?CategoryId=14" target="_blank">Ho Chi Minh City</a></p>
            </div>
            <div class="small-6 columns">
                <p lang="th" align="center"><a href="http://www.ycdc.gov.mm/content.php?yangon=Attraction" target="_blank">ย่างกุ้ง</a></p>
                <p lang="en" align="center"><a href="http://www.ycdc.gov.mm/content.php?yangon=Attraction" target="_blank">Yangon</a></p>
                <p lang="jp" align="center"><a href="http://www.ycdc.gov.mm/content.php?yangon=Attraction" target="_blank">Yangon</a></p>
                <p lang="ch" align="center"><a href="http://www.ycdc.gov.mm/content.php?yangon=Attraction" target="_blank">Yangon</a></p>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <!-- end modal -->
</div>
@include("web.footer")
@stop
