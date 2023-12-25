@extends('website.layout')

@section('content')
<div class="s003">
    <form class="d-none">
      <div class="inner-form">
    
        <div class="input-field second-wrap">
          <input id="search" type="text" placeholder="Enter Keywords?" />
        </div>
        <div class="input-field third-wrap">
          <button class="btn-search" type="button">
            <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
            </svg>
          </button>
        </div>
        <div class="input-field first-wrap">
          <div class="input-select">
            <select data-trigger="" name="choices-single-defaul">
              <option>Photos</option>
              <option>Videos</option>
              <option>Music</option>
            </select>
          </div>
        </div>
      </div>
    </form>
  </div>
  <section class="shop spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 d-none">
          <div class="shop__sidebar">
            <div class="sidebar__categories">
              <div class="section-title" style="background: black;height: 50px;">
                <h3 style="color: white;padding: 7px;">Filters</h3>
              </div>

              {{-- <div class="categories__accordion">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-heading active">
                      <a data-toggle="collapse" data-target="#collapseOne" style="font-size: 18px;font-weight: bold;">Photoes</a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                      <div class="sidebar__sizes">
                      
                        <div class="size__list" style="margin-top: 10px;">
                          <label for="xxs">
                            xyz
                            <input type="checkbox" id="xxs"/>
                            <span class="checkmark"></span>
                          </label>
                          <label for="xs">
                            xyz
                            <input type="checkbox" id="xs"/>
                            <span class="checkmark"></span>
                          </label>
                          <label for="xss">
                            xxx
                            <input type="checkbox" id="xss"/>
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
            <div class="sidebar__filter">
              <div class="section-title">
                <h4>Shop by price</h4>
              </div>
              <div class="filter-range-wrap">
                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                  data-min="33" data-max="99"></div>
                <div class="range-slider">
                  <div class="price-input">
                    <p>Price:</p>
                    <input type="text" id="minamount">
                    <input type="text" id="maxamount">
                  </div>
                </div>
              </div>
            </div>
            <div class="sidebar__sizes">
              <div class="section-title">
                <h4>Shop by Reviews</h4>
              </div>
              <div class="size__list">
                <label for="xxs">
                  <div class="review-star mt-3"> 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="">(222)</span>
                  </div>
                  <input type="checkbox" id="xxs">
                  <span class="checkmark"></span>
                </label>
                <label for="xs">
                  <div class="review-star "> 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="">(22)</span>
                  </div>
                  <input type="checkbox" id="xs">
                  <span class="checkmark"></span>
                </label>
                <label for="xss">
                  <div class="review-star mt-3"> 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="">(2)</span>
                  </div>
                  <input type="checkbox" id="xss">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <div class="sidebar__color d-none">
              <div class="section-title">
                <h4>Shop by size</h4>
              </div>
              <div class="size__list color__list">
                <label for="black">
                  Blacks
                  <input type="checkbox" id="black">
                  <span class="checkmark"></span>
                </label>
                <label for="whites">
                  Whites
                  <input type="checkbox" id="whites">
                  <span class="checkmark"></span>
                </label>
                <label for="reds">
                  Reds
                  <input type="checkbox" id="reds">
                  <span class="checkmark"></span>
                </label>
                <label for="greys">
                  Greys
                  <input type="checkbox" id="greys">
                  <span class="checkmark"></span>
                </label>
                <label for="blues">
                  Blues
                  <input type="checkbox" id="blues">
                  <span class="checkmark"></span>
                </label>
                <label for="beige">
                  Beige Tones
                  <input type="checkbox" id="beige">
                  <span class="checkmark"></span>
                </label>
                <label for="greens">
                  Greens
                  <input type="checkbox" id="greens">
                  <span class="checkmark"></span>
                </label>
                <label for="yellows">
                  Yellows
                  <input type="checkbox" id="yellows">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="row">
            
            <div class="col-lg-4 col-md-6">
              <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="">
                  <a href="{{url('cart_details')}}">
                  <img src="{{asset('images/z2.jpg')}}" alt="" />
                </a>    
                  <div class="label new">New</div>
                  <ul class="product__hover">
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                  </ul>
                </div>
                 <div class="product__item__text">
                  <h6><a href="#">Cat Image 4K</a></h6>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="product__price">$ 59.0</div>
                </div> 
              </div>
            </div>
               
            <div class="col-lg-4 col-md-6">
              <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="">
                  <img src="images/z1.jpg" alt="" />
                 
                  <ul class="product__hover">
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                  </ul>
                </div>
                <div class="product__item__text">
                  <h6><a href="#">Cat Image 4K</a></h6>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="product__price">$ 23.0</div>
                </div>
              </div>
            </div>           
             <div class="col-lg-4 col-md-6">
              <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="">
                  <img src="images/z2.jpg" alt="" />
                  <div class="label new">New</div>
                  <ul class="product__hover">
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                  </ul>
                </div>
                <div class="product__item__text">
                  <h6><a href="#">Cat Image 4K</a></h6>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="product__price">$ 59.0</div>
                </div>
              </div>
            </div>            
            <div class="col-lg-4 col-md-6">
              <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="">
                  <img src="images/z1.jpg" alt="" />
                  <div class="label new">New</div>
                  <ul class="product__hover">
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                  </ul>
                </div>
                <div class="product__item__text">
                  <h6><a href="#">Cat Image 4K</a></h6>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="product__price">$ 59.0</div>
                </div>
              </div>
            </div>           
             <div class="col-lg-4 col-md-6">
              <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="">
                  <img src="images/z2.jpg" alt="" />
                
                  <ul class="product__hover">
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                  </ul>
                </div>
                <div class="product__item__text">
                  <h6><a href="#">Cat Image 4K</a></h6>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="product__price">$ 59.0</div>
                </div>
              </div>
            </div>            
            <div class="col-lg-4 col-md-6">
              <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="">
                  <img src="images/z1.jpg" alt="" />
                  <div class="label new">New</div>
                  <ul class="product__hover">
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                  </ul>
                </div>
                <div class="product__item__text">
                  <h6><a href="#">Cat Image 4K</a></h6>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="product__price">$ 59.0</div>
                </div>
              </div>
            </div>            
            <div class="col-lg-4 col-md-6">
              <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="">
                  <img src="images/z2.jpg" alt="" />
                
                  <ul class="product__hover">
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                  </ul>
                </div>
                <div class="product__item__text">
                  <h6><a href="#">Cat Image 4K</a></h6>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="product__price">$ 59.0</div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 text-center">
              <div class="pagination__option">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection