@extends('website.layout')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3"></script>

@section('content')
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h5>Billing detail</h5>
                <div class="row">
                    <div class="card-body p-5">
                        {{-- <span style="float: right">
                            <i class="fa fa-credit-card "></i> Credit Card
                        </span> --}}
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-tab-card">
                                @foreach (['danger', 'success'] as $status)
                                @if(Session::has($status))
                                <p class="alert alert-{{$status}}">{{ Session::get($status) }}</p>
                                @endif
                                @endforeach
                                <form method="POST" id="card-form" action="{{ route('payment.store')}}">
                                    @csrf
                                    <input type="hidden" name="product_id" id="" value="{{$upload->id}}">
                                    <div class="">
                                        <input type="text" id="fullName" class="form-control" name="fullName" placeholder="Full Name">
                                    </div>
                                    <div id="card-element" style="margin-top: 20px;margin-bottom:20px;border:1px solid grey;padding:10px">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                    <button class="site-btn subscribe btn btn-primary btn-block" type="submit"> Pay
                                        Now </button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-4">
                <div class="checkout__order">
                    <h5>Your order</h5>
                    <div class="checkout__order__product">
                        <ul>
                            <li>
                                <span class="top__text">Product</span>
                                <img src="{{asset($upload->file_path)}}" alt="" />

                            </li>
                            <li>01. <span>$ {{$upload->price}}</span></li>

                        </ul>
                    </div>
                    <div class="checkout__order__total">
                        <ul>
                            <li>Subtotal <span>$ {{$upload->price}}</span></li>
                            <li>Total <span>$ {{$upload->price}}</span></li>
                        </ul>
                    </div>

                    {{-- <button type="submit" class="site-btn">Place order</button> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('lastScripts')
<script>
    let stripe = Stripe('{{ env("STRIPE_KEY") }}')
    console.log(stripe);
    const elements = stripe.elements()
    const cardElement = elements.create('card', {
        style: {
            base: {
                fontSize: '16px'
            }
        }
    })
    const cardForm = document.getElementById('card-form')
    const cardName = document.getElementById('fullName')
    cardElement.mount('#card-element')
    cardForm.addEventListener('submit', async (e) => {
        e.preventDefault()
        const { paymentMethod, error } = await stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
            billing_details: {
                name: cardName.value
            }
        })
        if (error) {
            console.log(error)
        } else {
            let input = document.createElement('input')
            input.setAttribute('type', 'hidden')
            input.setAttribute('name', 'payment_method')
            input.setAttribute('value', paymentMethod.id)
            cardForm.appendChild(input)
            cardForm.submit()
        }
    })
</script>

@endsection