

<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Portfolio $portfolio */
?>

@section('content')
    
                       
@foreach ($portfolio->pages as $page)
@if($page->id%2 == 0) 
     <!--Header_section--> 
<!--Hero_Section id=home-->

<section id="{{ $page->alias }}"><!--Aboutus-->
<div class="inner_wrapper">
<div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-xs-12" >
                <div class="panel panel-default">
               
                    <div class="panel-heading">Pages for <b>{{ $portfolio->name }}</b></div>

                </div>
            </div>
        </div>
    </div>
  <div class="container">
    <h2>{{ $page->name }}</h2>
      
    <div class="inner_section">
     <div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
          <div class="panel-body">
              <a class="btn btn-info btn-xs col-md-2 col-sm-2 col-xs-2" href="{{ $page->link }}">
                  <i></i> !Go
              </a>
          </div>
       {!! Html::image('assets/img/'.$page->images,'',['class' => 'img-circle delay-03s zoomIn wow animated']) !!}

      </div>
        <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
            <div class=" delay-01s animated fadeInDown wow animated">
           

    
                <div class="panel-body">
                    <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="{{ route('home') }}">
                    <i class="fa fa-backward" aria-hidden="true"></i> back
                    </a>

                       ||
                       {{ link_to_route('pages.create', 'create', [$portfolio->id], ['class' => 'btn btn-info btn-xs']) }}

                        <hr>
                  </div>

            </div>
            {!! $page->text !!} 

            <a href="{{ route('portfolio', array('alias' => $page->alias)) }}" class="contact_btn">My LandingPage_1</a>
            <hr>
            <a href="{{ route('portfolio2', array('alias2' => $page->alias2)) }}" class="contact_btn">My LandingPage_2</a>
            <hr>
            <a href="{{ route('portfolio3', array('alias3' => $page->alias3)) }}" class="contact_btn">My LandingPage_3</a>
            <hr>
            <a href="{{ route('portfolio4', array('alias4' => $page->alias4)) }}" class="contact_btn">My LandingPage_4</a>
            <hr>
            <a href="{{ route('portfolio5', array('alias5' => $page->alias5)) }}" class="contact_btn">My LandingPage_5</a>
            <hr>
            <a href="{{ route('portfolio6', array('alias6' => $page->alias6)) }}" class="contact_btn">My LandingPage_6</a>
            <hr>
            <a href="{{ route('portfolio7', array('alias7' => $page->alias7)) }}" class="contact_btn">My LandingPage_7</a>
            <hr>
            <a href="{{ route('portfolio8', array('alias8' => $page->alias8)) }}" class="contact_btn">My LandingPage_8</a>
            <hr>
            <a href="{{ route('portfolio9', array('alias9' => $page->alias9)) }}" class="contact_btn">My LandingPage_9</a>
            <hr>
            <a href="{{ route('portfolio10', array('alias10' => $page->alias10)) }}" class="contact_btn">My LandingPage_10</a>
            <hr>
            <a href="{{ route('portfolio11', array('alias11' => $page->alias11)) }}" class="contact_btn">My LandingPage_11.</a>
            <hr>
            <a href="{{ route('portfolio12', array('alias12' => $page->alias12)) }}" class="contact_btn">My LandingPage_12</a>

        </div>
      </div>
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 
@else
<section id="{{ $page->alias }}" class="top_cont_outer">
  <div class="hero_wrapper">
  
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-xs-12" >
                <div class="panel panel-default">
               
                    <div class="panel-heading">Pages for <b>{{ $portfolio->name }}</b></div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
      <h2>{{ $page->name }}</h2>

      <div class="inner_section">
        <div class="row">

          <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
              <div class="panel-body">
                  <a class="btn btn-info btn-xs col-md-2 col-sm-2 col-xs-2" href="{{ $page->link }}">
                       !Go<i class="fa fa-shopping-cart" style = "font-size: 30px; padding-bottom: 0px; "></i>
                  </a>
              </div>

       {!! Html::image('assets/img/'.$page->images,'',['class' => ' delay-03s zoomIn wow animated']) !!}
              
      </div>
        <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
            <div class=" delay-01s animated fadeInDown wow animated">
              <div class="panel-body">
                    <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="{{ route('home') }}">
                    <i class="fa fa-backward" aria-hidden="true"></i> back
                    </a>
                       ||
                       {{ link_to_route('pages.create', 'create', [$portfolio->id], ['class' => 'btn btn-info btn-xs']) }}

                        <hr>
                  </div>
               </div>

          {!! $page->text !!}     
          <a href="{{ route('page', array('alias' => $page->alias)) }}" class="read_more2">My LandingPage_1</a>
          <hr>
            <a href="{{ route('page2', array('alias2' => $page->alias2)) }}" class="read_more2">My LandingPage_2</a>
            <hr>
            <a href="{{ route('page3', array('alias3' => $page->alias3)) }}" class="read_more2">My LandingPage_3</a>
            <hr>
            <a href="{{ route('page4', array('alias4' => $page->alias4)) }}" class="read_more2">My LandingPage_4</a>
            <hr>
            <a href="{{ route('page5', array('alias5' => $page->alias5)) }}" class="read_more2">My LandingPage_5</a>
            <hr>
            <a href="{{ route('page6', array('alias6' => $page->alias6)) }}" class="read_more2">My LandingPage_6</a>
            <hr>
            <a href="{{ route('page7', array('alias7' => $page->alias7)) }}" class="read_more2">My LandingPage_7</a>
            <hr>
            <a href="{{ route('page8', array('alias8' => $page->alias8)) }}" class="read_more2">My LandingPage_8</a>
            <hr>
            <a href="{{ route('page9', array('alias9' => $page->alias9)) }}" class="read_more2">My LandingPage_9</a>
            <hr>
            <a href="{{ route('page10', array('alias10' => $page->alias10)) }}" class="read_more2">My LandingPage_10</a>
            <hr>
            <a href="{{ route('page11', array('alias11' => $page->alias11)) }}" class="read_more2">My LandingPage_11</a>
            <hr>
            <a href="{{ route('page12', array('alias12' => $page->alias12)) }}" class="read_more2">My LandingPage_12</a>

        </div>
        </div>

      </div>

    </div>
  </div>

</section>
<!--Hero_Section--> 

@endif
@endforeach
@endsection