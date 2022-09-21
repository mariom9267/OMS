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
                <form id="save_data" class="" action="{{route('employees.store') }}" method="POST"  enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">First Name:</span>
                        <input type="text" id="firstName"
                            class="form-control @error('firstName')
                     is-invalid
                    @enderror"
                            name="firstName" placeholder="Enter First Name">
                        @error('firstName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Last Name:</span>
                        <input type="text" id="lastName"
                            class="form-control @error('lastName')
                     is-invalid
                    @enderror"
                            name="lastName" placeholder="Enter last Name">
                        @error('lastName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Email:</span>
                        <input type="text" id="email"
                            class="form-control" name="email" placeholder="Enter a Email">

                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light text-black font-weight-bold">Phone:</span>
                        <input type="text" id="phone"
                            class="form-control" name="phone" placeholder="Enter a phone">

                    </div>
                    <div class="input-group mb-3">
                        <select type="text" id="id"
                            class="form-control" name="id" >
                            <option value="">select Company Name</option>
                            @foreach ($companies as $company )
                                <option value="{{ $company->id }}">{{ $company->companyName}}</option>
                            @endforeach

                        </select>

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
