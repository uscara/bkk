@extends("..layouts.head")


@section("specific_css")
{!! Html::style("css/attraction-category.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

@include("web.banner-picture")

<div class="body-section">
	<div class="banner-page-title">Attraction</div>
	<div id="category-container-1" class="category-container">
		<a href="#">
			<div class="category-picture show-for-large">
				{!! HTML::image("http://placehold.it/1248x412","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-picture hide-for-large">
				{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-description">
				<h3>ARTS AND CULTURE</h3>
				<br class="show-for-large">
				<h5 class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
			</div>
		</a>
	</div>
	<div>
		<div id="category-container-2" class="category-container">
			<a href="#">
				<div class="category-picture show-for-large">
					{!! HTML::image("http://placehold.it/620x412","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-picture hide-for-large">
					{!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-description">
					<h3>FOOD AND DRINK</h3>
				</div>
			</a>
		</div>
		<div id="category-container-3" class="category-container">
			<a href="">
				<div class="category-picture show-for-large">
					{!! HTML::image("http://placehold.it/620x412","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-picture hide-for-large">
					{!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-description">
					<h3>PARKS AND GARDENS</h3>
				</div>
			</a>
		</div>
	</div>
	<div id="category-container-4" class="category-container">
		<a href="#">
			<div class="category-picture show-for-large">
				{!! HTML::image("http://placehold.it/1248x412","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-picture hide-for-large">
				{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-description">
				<h3>Events</h3>
				<br class="show-for-large">
				<h5 class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
			</div>
		</a>
	</div>
	<div id="category-container-5" class="category-container">
		<a href="#">
			<div class="category-picture show-for-large">
				{!! HTML::image("http://placehold.it/1248x412","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-picture hide-for-large">
				{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-description">
				<h3>Shopping</h3>
				<h5 class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
			</div>
		</a>
	</div>
</div>

@include("web.footer")
@stop
