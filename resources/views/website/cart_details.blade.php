@extends('website.layout')

@section('content')
<section class="product-details spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="product__details__pic">
            <div class="product__details__slider__content">
              <div class="product__details__pic__slider owl-carousel">
                <img data-hash="product-1" class="product__big__img" src="images/z1.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          {{-- <div style="background: #fffaf7;padding: 10px 20px;">
            <ul style="display: flex;justify-content: space-between;">
              <li style="list-style: none;"><a href="#"><span class="icon_heart_alt"
                    style="font-size: 23px;color: #666666;"></span><span class="view">111</span></a></li>
              <li style="list-style: none;"><a href="#"><span class="icon_heart_alt"
                    style="font-size: 23px;color: #666666;"></span><span class="view">111</span></a></li>
              <li style="list-style: none;"><a href="#"><span class="icon_adjust-horiz"
                    style="font-size: 23px;color: #666666;"></span><span class="view">111</span></a></li>
            </ul>
          </div> --}}
          <br>
          <div style="background: #fffaf7;padding: 10px 20px;">
            <div class="down">
                <a href="{{url('checkout')}}">
              <button type="submit" class="site-btn2">Add to Cart</button></a>
            </div>
          </div>
          <br>
          <div style="background: #fffaf7;padding: 10px 20px;">
            <div class="down">
              <div class="card" style="width: 18rem;">

                <div class="card-body">
                  <h5 class="card-title" style="text-align: center">Product Title</h5>
                </div>
                <hr>
                {{-- <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul> --}}
                <div class="card-body">
                <p>THis is a dummy text description of the product</p>
                </div>
              </div>
            </div>
          </div>
     
        </div>

      </div>
      <div class="row mt-5">
        <div class="col-lg-12 text-center">
          <div class="related__title">
            <h5>RELATED PRODUCTS</h5>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="">
              <img src="images/z1.jpg" alt="" />
              <div class="label new">New</div>
              <ul class="product__hover">
                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="">
              <img src="images/z1.jpg" alt="" />
              <div class="label new">New</div>
              <ul class="product__hover">
                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="">
              <img src="images/z1.jpg" alt="" />
              <div class="label new">New</div>
              <ul class="product__hover">
                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="">
              <img src="images/z1.jpg" alt="" />
              <div class="label new">New</div>
              <ul class="product__hover">
                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection