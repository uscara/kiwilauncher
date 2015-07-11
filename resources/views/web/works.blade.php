@extends('../web-layouts.main')


@section("specific-meta")
<meta name="description" content="{!! defaultDescription() !!}" />
<meta property="og:title" content="{!! defaultTitle() !!}" />
<meta property="og:description" content="{!! defaultDescription() !!}" />

@stop


@section("body")

@include("web-layouts.menu")

<div id="works">
    <section id="works-content" class="section-frame">
        <h2 class="section-title">Selected Works</h2>
        
        <ul id="works-list" class="small-block-grid-1 medium-block-grid-2 multi-col-wrapper">
            <li class="has-mg-b">
                <a class="figure-link sltd-work-figure">
                    <!--<img class="figure-img sltd-work-cvimg" src="http://placehold.it/800x450" />-->
                    {!! HTML::image("image/sample/soon-thumb.jpg", "Some app", array(
                        "class" => "figure-img sltd-work-cvimg")
                    ) !!}
                    <div class="figure-layer"></div>
                </a>
                <div class="sltd-work-text has-pd-lr">
                    <h4><a>Some Application</a></h4>
                    <p>iOS Application</p>
                </div>
            </li>
            <li class="has-mg-b">
                <a class="figure-link sltd-work-figure">
                    {!! HTML::image("image/sample/sandawe-1.jpg", "Some web", array(
                        "class" => "figure-img sltd-work-cvimg")
                    ) !!}
                    <div class="figure-layer"></div>
                </a>
                <div class="sltd-work-text has-pd-lr">
                    <h4><a>Some Website</a></h4>
                    <p>Website</p>
                </div>
            </li>
            <li class="has-mg-b">
                <a class="figure-link sltd-work-figure">
                    {!! HTML::image("image/sample/fiat-thumb.jpg", "Some app", array(
                        "class" => "figure-img sltd-work-cvimg")
                    ) !!}
                    <div class="figure-layer"></div>
                </a>
                <div class="sltd-work-text has-pd-lr">
                    <h4><a>Another</a></h4>
                    <p>Website / Branding</p>
                </div>
            </li>
            <li class="has-mg-b">
                <a class="figure-link sltd-work-figure">
                    {!! HTML::image("image/sample/pairi-daiza-thumb.jpg", "Some web", array(
                        "class" => "figure-img sltd-work-cvimg")
                    ) !!}
                    <div class="figure-layer"></div>
                </a>
                <div class="sltd-work-text has-pd-lr">
                    <h4><a>1234567</a></h4>
                    <p>Website / Graphic Design</p>
                </div>
            </li>
        </ul>
    </section>
    
    @include("web-layouts.footer")
</div>

@stop