@extends("../admin-layouts.main-admin")


@section("title")
{!! $post["title"] !!} (Live Preview) | 
@stop

{!! HTML::style("/css/web-style.css") !!}

@section("body")

@include("admin-layouts.menu-admin", array("link" => "workposts", "has_sublink" => 1, "sublink" => "workposts"))

<div class="row full-width container ui-block mg-b small-medium-header hide-for-large-up">
    <div class="small-6 columns">
        <a class="side-menu-toggle link-icon" data-side="left">
            <span class="fa fa-bars"></span>
        </a>
    </div>
</div>

<div id="admin-blogposts" class="container">
    <div class="post-preview">
        <h3 class="title">{!! HTML::linkRoute("admin-work-posts", "Blog Posts") !!} <span class="fa fa-angle-right"></span> Live Preview</h3>
        <br />
        
        <div class="post-block ui-block">
            <h2 class="post-title">{!! $post["title"] !!}</h2>
            
            <hr />
            
            <div class="post-content">{!! $post["description"] !!}</div>
        </div>
    </div>
</div>

@stop