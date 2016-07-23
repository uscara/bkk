@extends("../admin-layouts.main-admin")


@section("title")
Add New Blog Post | 
@stop


@section("specific_css")
{!! Html::style("/js/fancybox/source/jquery.fancybox.css", array("media" => "screen")) !!}
@stop


@section("specific_js_head")
{!! Html::script("/js/tinymce/tinymce.min.js") !!}
{!! Html::script("/js/fancybox/source/jquery.fancybox.pack.js") !!}
{!! Html::script("/js/backend/admin-blog-post-form.js") !!}
<script>
	window.onload = function() {
	  $(':text[name="title"]').focus();
	}
</script>
@stop

@section("body")

@include("admin-layouts.menu-admin", array("link" => "blogposts", "has_sublink" => 1, "sublink" => "blogposts"))

<?php
	if(!isset($_SESSION))
		session_start();
	$_SESSION["USER_ROLE"] = Auth::user()->role;
	
	$lpath = getLinkPath();
?>

<div class="row full-width container ui-block mg-b small-medium-header hide-for-large-up">
    <div class="small-6 columns">
        <a class="side-menu-toggle link-icon" data-side="left">
            <span class="fa fa-bars"></span>
        </a>
    </div>
</div>

<div id="admin-blogposts" class="container">
	{!! Form::open(array("route" => "admin-blog-post-create", "method" => "post", "class" => "post-form")) !!}
		<h3 class="title">{!! Html::linkRoute("admin-blog-posts", "Blog Posts") !!} <span class="fa fa-angle-right"></span> Add</h3>
		<br />
		
		@include("admin.alert-box")
        
        <div class="medium-button-group show-for-medium-up">
        	{!! Form::button("Publish", 
	            array(
	                "class" => "button mg-r", 
	                "type" => "submit", 
	                "name" => "status", 
	                "value" => "published"
	                )
	            ) 
	        !!}
	        {!! Form::button("Save Draft", 
	            array(
	                "class" => "button secondary mg-r", 
	                "type" => "submit", 
	                "name" => "status", 
	                "value" => "draft"
	                )
	            ) 
	        !!}
	        {!! Form::button("Preview", 
	            array(
	                "class" => "livepreview button secondary", 
	                "type" => "button"
	                )
	            ) 
	        !!}
	        <br /><br />
        </div>
		
		<div class="row full-width">
		    <div class="small-12 medium-9 columns">
		    	<div class="ui-block mg-b medium-half-mg-r">
		    		<div class="row">
			    		<div class="small-12 large-6 columns">
			    			{!! Form::label("title", "Title") !!}
	               			{!! Form::text("title", null) !!}
			    		</div>
			    		<div class="small-12 large-6 columns">
			    			{!! Form::label("url", "URL") !!}
	               			{!! Form::text("url", null, array("placeholder" => 'only letters (a-z), numbers, and "-", "_"')) !!}
			    		</div>
			    	</div>
			        
			        {!! Form::label("description", "Description") !!}
	                {!! Form::textarea("description", null, array("rows" => "4")) !!}
			        
	                {!! Form::label("content", "Content") !!}
	                {!! Form::textarea("content", null, array("class" => "tinymce", "rows" => "30")) !!}
		    	</div>
		    </div>
		    
		    <div class="small-12 medium-3 columns">
                <div class="ui-block mg-b medium-half-mg-l">
                    {!! Form::label("tags", "Tags") !!}
                	{!! Form::text("tags", null, array("placeholder" => 'Ex. "tag1 tag2 tag3"')) !!}
                </div>
		    </div>
		</div>

		<div class="row full-width">
			@for($i = 1; $i <= 5; $i++)
				@if($i != 5)
				<div class="small-12 large-4 columns">
				@else
				<div class="small-12 large-4 columns end">
				@endif
					<div class="ui-block mg-b medium-half-mg-l">
						<p class="f-label">Image {!! $i !!}</p>
						<?php $p_link = "http://".$_SERVER['SERVER_NAME'].$lpath."/filemanager/dialog.php?type=1&field_id=screenshots-URL".$i; ?>
						<a class="fm-open" href="<?php echo $p_link; ?>">
							@if( $post["image_url_".$i] != null && $post["image_url_".$i] != '')
			                    {!! Html::image($post["image_url_".$i], 
			                        "Image-$i", 
			                        array(
			                            "id" => "screenshots".$i ,
			                            "class" => "post-image"
			                            )
			                        )
			                    !!}
			                @else 
								{!! Html::image("/images/admin/icon-placeholder.svg", 
									"Image-$i", 
										array(
											"id" => "screenshots".$i ,
											"class" => "post-image"
										)
									)
								!!}
							@endif
						</a>
						{!! Form::text("image_url_".$i, 
							null, 
							array(
									"id" => "screenshots-URL".$i,
									"class" => "image-url far-away",
									"autocomplete" => "off",
									"readonly" => "readonly"
								)
							)
						!!}
						<br><br>
						<p>
							<button class="select-image-open" type="button" href="<?php echo $p_link; ?>">
								Select Image
							</button>
							<button class="remove-image" type="button" onclick="removeImage('{!! $i !!}')" >
								Remove Image
							</button>
						</p>
					</div>
				</div>
				@if( $i%3 == 0)
					</div>
					<div class="row">
				@endif
			@endfor
		</div>
		
		<div class="small-button-group show-for-small-only">
        	{!! Form::button("Publish", 
	            array(
	                "class" => "button", 
	                "type" => "submit", 
	                "name" => "status", 
	                "value" => "published"
	                )
	            ) 
	        !!}
	        <br />
	        {!! Form::button("Save Draft", 
	            array(
	                "class" => "button secondary", 
	                "type" => "submit", 
	                "name" => "status", 
	                "value" => "draft"
	                )
	            ) 
	        !!}
	        <br />
	        {!! Form::button("Preview", 
	            array(
	                "class" => "livepreview button secondary", 
	                "type" => "button"
	                )
	            ) 
	        !!}
	        <br /><br />
        </div>
	{!! Form::close() !!}
	
	{!! Form::open(
	    array(
    	    "class" => "livepreview-form", 
    	    "route" => "admin-blog-post-livepreview", 
    	    "method" => "post", 
    	    "target" => "_blank"
    	    )
	    ) 
	!!}
	   {!! Form::hidden("title") !!}
	   {!! Form::hidden("content") !!}
	{!! Form::close() !!}
</div>

@stop







