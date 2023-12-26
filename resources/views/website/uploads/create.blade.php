@extends('website.layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('success'))
            <div class="mt-3 alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                {{Session::get('success')}}
            </div>
            @endif
            <div class="card" style="margin-bottom: 70px;margin-top:70px">
                <div class="card-body">
                    <form action="{{ route('upload.file') }}" class="checkout__form" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Upload File</h5>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="checkout__form__input">
                                            <label for="upload_file">Upload File<span>* (Click here)</span></label>
                                            <p class="filename"></p>
                                            <input style="visibility: hidden" id="upload_file" name="upload_file"
                                                type="file"
                                                class="form-control @error('upload_file') is-invalid @enderror"
                                                name="upload_file" required autofocus>
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
                                                value="{{ old('title') }}" required>
                                        </div>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="checkout__form__input">
                                            <p>Description <span>*</span></p>
                                            <input id="description" type="text"
                                                class="form-control @error('description') is-invalid @enderror" name="description"
                                                value="{{ old('description') }}" required>
                                        </div>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="checkout__form__input">
                                            <p>Category <span>*</span></p>
                                           <select class="select-form-control" name="category_id" required>
                                            <option value="" disabled>Please select category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                           </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="checkout__form__input">
                                            <p>Price <span></span></p>
                                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                                                value="{{ old('price') }}">
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="checkout__form__input">
                                            <p>Tags </p>
                                            <input type="text" name="tags" id="input-tags" class="demo-default">
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