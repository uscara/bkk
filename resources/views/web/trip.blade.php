@extends("..layouts.head")

@section("specific_title")
 : Trip
@stop

@section("specific_css")

@stop


@section("specific_js_head")
{!! Html::script("js/timeline.js") !!}
@stop


@section("body")

<script>
    window.onbeforeprint = function() {
        console.log($('.bounce-in'));
    };

    (function() {
            var beforePrint = function() {
                $('.timeline-panel').removeClass('bounce-in');
                console.log('Functionality to run before printing.');
                            };
        var afterPrint = function() {
                console.log('Functionality to run after printing');
                $('.timeline-panel').addClass('bounce-in');
                        };

        if (window.matchMedia) {
            var mediaQueryList = window.matchMedia('print');
            mediaQueryList.addListener(function(mql) {
                if (mql.matches) {
                    beforePrint();
                } else {
                    afterPrint();
                }
            });
        }

        window.onbeforeprint = beforePrint;
        window.onafterprint = afterPrint;
    }());
</script>
@include("web.top-menu")

<section>
	<div class="banner-containers">
        <img class="banner-picture" data-interchange="[uploads/normal/banner/trip_small.jpg, small], [uploads/normal/banner/trip_medium.jpg, medium], [uploads/normal/banner/trip_large.jpg, large]">
    </div>
</section>

<div class="body-section">
	<div class="banner-page-title">Recommend Trips</div>
	<div class="timeline-container">
		<h2>Two days trip</h2>
		<div class="row">
			<div class="label-start">
				<h3>Day 1</h3>
			</div>
		</div>
		<ul class="timeline">
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Header1</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. 
							Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
							amistosis quis leo. Manduma pindureta quium dia nois paga.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Header2</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. 
							Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
							amistosis quis leo. Manduma pindureta quium dia nois paga.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	        <li>
	          	<div class="timeline-badge"></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="timeline-title">Header3</h4>
					</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. 
							Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
							amistosis quis leo. Manduma pindureta quium dia nois paga.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	    </ul>
	    <div class="row">
	    	<div class="label-stop">
				<h3>End Day 1</h3>
			</div>
		</div>

		<div class="row">
			<div class="label-start">
				<h3>Day 2</h3>
			</div>
		</div>
		<ul class="timeline">
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Header1</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. 
							Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
							amistosis quis leo. Manduma pindureta quium dia nois paga.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Header2</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. 
							Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
							amistosis quis leo. Manduma pindureta quium dia nois paga.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	        <li>
	          	<div class="timeline-badge"></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="timeline-title">Header3</h4>
					</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. 
							Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
							amistosis quis leo. Manduma pindureta quium dia nois paga.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	    </ul>
	    <div class="row">
	    	<div class="label-stop">
				<h3>End Day 2</h3>
			</div>
		</div>
	</div>
</div>
@include("web.footer")
@stop
