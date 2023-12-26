@extends('website.layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<style>
  video {
  width: 100%;
  height: auto;
}
</style>
@section('content')
<nav id="slide-menu">

    <ul class="sid">

      <li class="active timeline sid2" data-filter="*">All</li>

      <li class="timeline sid2" data-filter=".women">Images</li>
      <ul class="sid-sub">
        <li class="timeline sid2">Png</li>
        <li class="timeline sid2">Jpeg</li>
        <li class="timeline sid2">Background</li>
      </ul>
      <li class="events sid2" data-filter=".men">Illustration</li>
      <li class="calendar sid2" data-filter=".kid">Video</li>
      <ul class="sid-sub">
        <li class="timeline sid2">Mp4</li>
        <li class="timeline sid2">3gp</li>
      </ul>
      <li class="sep settings sid2" data-filter=".accessories">Icon</li>
      <li class="sep settings sid2" data-filter=".accessories">Sounds</li>

      <li class="sep settings sid2" data-filter=".accessories">Calender</li>

    </ul>
  </nav>
  <div id="content" class="text">
    <div class="menu-trigger">
      <img src="images/3.png" alt="" style="width: 20px;margin-top: 7px;">
    </div>
    <div class="bg-dark">
      <h1 style="padding: 10% 0px 0px 0px;">Sell your vision, buy your inspiration</h1>
      <h4> Sttockry.com</h4>
      <div class="s003">
        <form style="max-width: 874PX;" class="searchForm" method="GET" action="{{route('search')}}">
          <div class="inner-form">

            <div class="input-field second-wrap">
              <input id="search" name="query" type="text" placeholder="Enter Keywords?" />
            </div>
            <div class="input-field third-wrap">
              <button class="btn-search" type="button">
                <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search"
                  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                  </path>
                </svg>
              </button>
            </div>

          </div>
        </form>
      </div>
    </div>
    <section class="product spad" id="tags-index">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-offset-2 multitag" id="multitag">
            <div class="round">
              <span>Time</span>
            </div>
            <div class="list d-none" id="recentOnes">
              <ul>
                <li><a href="">The Most Recent</a> </li>
                <li>The Oldest</li>
                <li>A Week Now</li>
                <li>A Month Ago</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2 col-offset-2 multitag">
            <div class="round">
              <span>Tags</span>
            </div>
            <div class="list d-none">
              <ul>
                @foreach ($tags as $tag)
                <li> <input type="checkbox"/> {{$tag}}</li>
                @endforeach
              </ul>
            </div>
          </div>


          <div class="col-lg-2 col-offset-2 multitag">
            <div class="round">
              <span>Most Popular</span>
            </div>
            <div class="list d-none">
              <ul>
                <li> <input type="checkbox"/> Most Viewed</li>
                <li><input type="checkbox"/> Most Appriciate</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
              <ul class="filter__controls" >
                <div class="sidebar__filter" >
                  <div class="filter-range-wrap">
                    <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                      data-min="0" data-max="5000"></div>
                    <div class="range-slider">
                      <div class="price-input">
                        <p>Price:</p>
                        <input type="text" id="minamount">
                        <input type="text" id="maxamount">
                      </div>
                    </div>
                  </div>
                </div>
              </ul>


          </div>
          <div class="col-lg-2">
            <div class="round">
              <span>Search</span>
            </div>
          </div>





        </div>
       
        <div class="row marginT25">
          <div class="col-lg-12">
            <div class="row property__gallery">
              @if(!empty($uploads) && count($uploads))
                @foreach ($uploads as $upload)
                <div class="col-lg-4 col-md-6 col-sm-6 mix women">
                  <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="">
                      <a href="{{route('product.detail', $upload->id)}}">
                        <img src="{{asset($upload->file_path)}}" alt="" />
                      </a>
                      {{-- <div class="label new">New</div> --}}
                      {{-- <ul class="product__hover">
                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                      </ul> --}}
                    </div>
                  </div>
                </div>
                @endforeach
                @endif

              {{-- <div class="col-lg-4 col-md-6 col-sm-6 mix men">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="">
                    <video  class="hover-to-play w-100"  src="{{asset('videos/demo.mp4')}}" type="video/mp4" >
                    </video>                   
                  </div>

                </div>
              </div> --}}
            </div>
          </div>
        </div>

      </div>
    </section>




@endsection

<script>
  $( document ).ready(function() {
  const clip = document.querySelectorAll(".hover-to-play");
  console.log(clip);
for (let i = 0; i < clip.length; i++) { clip[i].addEventListener("mouseenter", function (e) { clip[i].play();
  }); clip[i].addEventListener("mouseout", function (e) { clip[i].pause(); }); }


$('.btn-search').on('click', function(){
  $(".searchForm").submit();
 });
});

 

</script>