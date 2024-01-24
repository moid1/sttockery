@extends('website.layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<style>
  video {
  width: 100%;
  height: auto;
}
</style>
@section('content')

  <div id="content" class="text">
  
    <div class="bg-dark">
      <h1 style="padding: 10% 0px 0px 0px;">Your Uploads</h1>
    </div>
    <section class="product spad" id="tags-index">
      <div class="container">
       
       
        <div class="row marginT25">
          <div class="col-lg-12">
            <div class="row property__gallery">
              @if(!empty($uploads) && count($uploads))
                @foreach ($uploads as $upload)
                <div class="col-lg-4 col-md-6 col-sm-6 mix women">
                  <div class="product__item">
                    <div style="min-height: 250px" class="product__item__pic set-bg" data-setbg="">
                      <a href="{{route('product.detail', $upload->id)}}">
                    @if($upload->format_type == 'image')
                        <img src="{{asset($upload->file_path)}}" alt="" />
                        @elseif($upload->format_type == 'video')
                        <video id="videoPlayer" controls controlsList="nodownload" height="300px" width="270px">
                            <source src="{{asset($upload->file_path)}}" id="preview-vid">
                            Your browser does not support HTML5 video.
                        </video>
                        @elseif($upload->format_type == 'audio')
                        <audio controls="controls" id="audioPreview">
                            <source src="{{asset($upload->file_path)}}" type="audio/mp4" />
                        </audio>
                        @endif
                      </a>
                      {{-- <div class="label new">New</div> --}}
                      {{-- <ul class="product__hover">
                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                      </ul> --}}
                    </div>
                    <div class="" style="margin-top:10px;display: flex;justify-content:space-between">
                        <p><span style="font-weight: bold"> Title: </span>{{$upload->title}}</p>
                        <p style="text-align: right"><span style="font-weight: bold"> Price: </span> ${{$upload->price}}</p>
                    </div>
                    <p style="text-align: left"><span style="font-weight: bold;"> Details: </span>{{$upload->description}}</p>
                   
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