@extends('backend.layout')

@section('content')
<div class="container-fluid shadow mt-5" >
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 d-flex ">
                        <h2 class=" text-center text-center mt-2">Company Create </h2>
                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area">
                <form id="save_data" class="" action="{{route('companies.store') }}" method="POST"  enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Company Name:</span>
                        <input type="text" id="companyName"
                            class="form-control @error('companyName')
                     is-invalid
                    @enderror"
                            name="companyName" placeholder="Enter Company name">
                        @error('companyName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Email:</span>
                        <input type="text" id="email"
                            class="form-control" name="email" placeholder="Enter a Email">

                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Logo:</span>
                        <input type="file" id="logo"
                            class="form-control" name="logo" placeholder="Enter a logo">

                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Website:</span>
                        <input type="text" id="website"
                            class="form-control" name="website" placeholder="Enter a website">

                    </div>
                    <div class="input-group mb-3 mt-3">
                    <input type="submit" value="save" class="btn btn-success m-1">
                    <button class="btn btn-secondary m-1">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

@endsection
