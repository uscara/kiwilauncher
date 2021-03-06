@extends("../admin-layouts.main-admin")


@section("title")
Add New Blog Post | 
@stop


@section("specific_css")
{!! HTML::style("/js/fancybox/source/jquery.fancybox.css", array("media" => "screen")) !!}
@stop


@section("specific_js_head")
{!! HTML::script("/js/tinymce/tinymce.min.js") !!}
{!! HTML::script("/js/fancybox/source/jquery.fancybox.pack.js") !!}
{!! HTML::script("/js/admin-blog-post-form.js") !!}
<script>
	window.onload = function() {
	  $(':text[name="title"]').focus();
	}
</script>
@stop


<?php
	if(!isset($_SESSION)) {
		session_start(); 
	};;
	$_SESSION["USER_ROLE"] = Auth::user()->role;
	
	$lpath = getLinkPath();
?>


@section("body")

@include("admin-layouts.menu-admin", array("link" => "blogposts", "has_sublink" => 1, "sublink" => "blogposts"))

<div class="row full-width container ui-block mg-b small-medium-header hide-for-large-up">
    <div class="small-6 columns">
        <a class="side-menu-toggle link-icon" data-side="left">
            <span class="fa fa-bars"></span>
        </a>
    </div>
</div>

<div id="admin-blogposts" class="container">
	{!! Form::open(array("route" => "admin-blog-post-create", "method" => "post", "class" => "post-form")) !!}
		<h3 class="title">{!! HTML::linkRoute("admin-blog-posts", "Blog Posts") !!} <span class="fa fa-angle-right"></span> Add</h3>
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
			        
			    	{!! Form::label("keyword", "Keyword") !!}
	                {!! Form::text("keyword", null) !!}
			        
			        {!! Form::label("description", "Description") !!}
	                {!! Form::textarea("description", null, array("rows" => "4")) !!}
			        
	                {!! Form::label("content", "Content") !!}
	                {!! Form::textarea("content", null, array("class" => "tinymce", "rows" => "30")) !!}
		    	</div>
		    </div>
		    
		    <div class="small-12 medium-3 columns">
                <div class="ui-block mg-b medium-half-mg-l">
                	<p class="f-label">Featured Image</p>

					<?php $p_link = "http://".$_SERVER['SERVER_NAME'].$lpath."/filemanager/dialog.php?type=1&field_id=feature-image-url"; ?>
					<a class="fm-open" href="<?php echo $p_link; ?>">
	                    {!! HTML::image("/images/admin/icon-placeholder.svg", 
	                        "Featured Image", 
	                        array(
	                            "id" => "feature-image",
	                            "class" => "post-image"
	                            )
	                        )
	                    !!}
                    </a>
                    
                    {!! Form::text("feature_image_url", 
                        null, 
                        array(
                            "id" => "feature-image-url",
                            "class" => "image-url far-away",
                            "autocomplete" => "off",
                            "readonly" => "readonly"
                            ) 
                        ) 
                    !!}
                        
                    <p><a class="fm-open" href="<?php echo $p_link; ?>">Select Image</a></p>
                    
                    <p class="text-date">Tips : Use image size > 600 x 315 pixels for Facebook link post with large preview image.</p>
                </div>
                	
                <div class="ui-block mg-b medium-half-mg-l">
                    {!! Form::label("tags", "Tags") !!}
                	{!! Form::text("tags", null, array("placeholder" => 'Ex. "tag1 tag2 tag3"')) !!}
                </div>
		    </div>
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







