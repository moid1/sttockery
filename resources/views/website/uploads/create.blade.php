@extends('website.layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom: 70px;margin-top:70px">
                <div class="card-body">
                    <form action="{{ route('upload.file') }}" class="checkout__form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Upload File</h5>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="checkout__form__input">
                                            <label for="upload_file" >Upload File<span>* (Click here)</span></label>
                                            <p class="filename"></p>
                                            <input style="visibility: hidden" id="upload_file" name="upload_file" type="file"
                                                class="form-control @error('upload_file') is-invalid @enderror" name="upload_file"
                                               required autofocus>
                                            @error('upload_file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="checkout__form__input">
                                            <p>Title <span>*</span></p>
                                            <input id="title" type="text"
                                                class="form-control @error('title') is-invalid @enderror" name="title"
                                                value="{{ old('title') }}" required >
                                        </div>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="checkout__form__input">
                                            <p>Tags </p>
                                            <input type="text" name="tags" id="input-tags" class="demo-default" >
                                        </div>

                                      
                                    </div>



                                   


                                    <div class="col-md-12 w-100 text-center" style="width: 100%;margin-top:15px">
                                        <button type="submit" class="site-btn">
                                            {{ __('Upload') }}
                                        </button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    // A $( document ).ready() block.
$( document ).ready(function() {
    $("#upload_file").change(function() {
  filename = this.files[0].name;
  $('.filename').text(filename);
  console.log(filename);
});
});
   
</script>

@section('lastScripts')
<script src="{{asset('website/js/selectize.js')}}"></script>
<script>
   $('#input-tags').selectize({
    delimiter: ',',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        }
    }
});
</script>
@endsection
