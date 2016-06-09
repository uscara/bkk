@extends("..layouts.head")


@section("specific_css")
@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

@include("web.top-menu")

<script>
//     $(document).ready(function(){
//         sessionStorage.setItem("flag", 0);
//         $('#accommodation').addClass("active");
//         $('#menu li').on('click', function(){
//           $('li a.border-bottom').removeClass('border-bottom');
//           $(this).find('a').addClass('border-bottom');
//         });
//     });
</script>

<section>
  <div class="banner-containers show-for-large">
    {!! HTML::image("uploads/normal/banner/accommodation_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
  </div>
  <div class="banner-containers show-for-medium-only">
    {!! HTML::image("uploads/normal/banner/accommodation_medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
  </div>
  <div class="banner-containers show-for-small-only">
    {!! HTML::image("uploads/normal/banner/accommodation_small.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
  </div>
</section>

<div class="banner-page-title font">Accommodation</div>
<div class="body-section border padding-t">
  <div class="row collapse">
    <div class="small-12 medium-9 columns">
      <h4 lang="th">{!! $post->title_thai !!}</h4>
      <h4 lang="en">{!! $post->title_enlish !!}</h4>
      <h4 lang="ch">{!! $post->title_china !!}</h4>
      <h4 lang="jp">{!! $post->title_japan !!}</h4>
      <div class="padding-b">
        <span lang="th">{!! $post->description_thai !!}</span>
        <span lang="en">{!! $post->description_enlish !!}</span>
        <span lang="ch">{!! $post->description_china !!}</span>
        <span lang="jp">{!! $post->description_japan !!}</span>
      </div>
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.327923570138!2d100.49096021639426!3d13.759087656345015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd55c5a3036726e66!2sTourism+Division%3B+Culture%2C+Sports+and+Tourism+Department%3B+BMA!5e0!3m2!1sen!2sth!4v1462784638517" width="80%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="small-12 medium-3 columns detail padding-lr padding-b">
      <div class="row">
        <div class="small-12 detail-title padding-t">
          <h4 lang="th">{!! $post->title_thai !!}</h4>
          <h4 lang="en">{!! $post->title_enlish !!}</h4>
          <h4 lang="ch">{!! $post->title_china !!}</h4>
          <h4 lang="jp">{!! $post->title_japan !!}</h4>
        </div>
        <div class="small-6 columns padding-b padding-t">
           <i class="fa fa-clock-o" aria-hidden="true"></i> Check-in
        </div>
        <div class="small-6 columns padding-b padding-t">
           {!! $post->opening_hours !!}
        </div>
        <!-- <div class="small-6 columns padding-b padding-t">
           <i class="fa fa-clock-o" aria-hidden="true"></i> Check-in
        </div>
        <div class="small-6 columns padding-b padding-t">
          From 00.00
        </div>
        <div class="small-6 columns padding-b">
          <i class="fa fa-clock-o" aria-hidden="true"></i> Check-out
        </div>
        <div class="small-6 columns padding-b">
          Until 00.00
        </div>
        <div class="small-6 columns padding-b">
          <i class="fa fa-user-plus" aria-hidden="true"></i> Pets
        </div>
        <div class="small-6 columns padding-b">
          Pet are ...
        </div> -->
      </div>
    </div>
  </div>
</div>

@include("web.footer")
@stop



