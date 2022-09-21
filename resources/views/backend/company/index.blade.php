@extends('backend.layout')
@section('content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
        <div class="col-md-12 grid-margin">
                    <h2 class="text-center text-success">Company</h2>
                    <div class="table-responsive">
                        <a href="{{ route('companies.create') }}" class="btn btn-success btn-sm"
                            title="Add new Customer">
                            Add New Company
                        </a>
                        <hr class="bg-primary">
                        <br><br>
                        <table id="table" class="dataTable table table-responsive text-center multi-table table dt-table-hover w-100" style="white-space: nowrap; width:100%  text-overflow:ellipsis;">
                            <thead>
                                <tr>

                                    <th class="text-center">SL</th>
                                    <th class="text-center">Company Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Logo</th>
                                    <th class="text-center">Website</th>
                                    <th class="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $company->companyName }}</td>
                                        <td class="text-center">{{ $company->email }}</td>
                                        {{-- <td class="text-center">{{ $company->logo }}</td> --}}
                                        <td class="text-center">
                                            <img src="{{ asset('storage/'. $company->logo) }}" width= '100' height='100' class="img img-responsive" />
                                        </td>
                                        <td class="text-center">{{ $company->website }}</td>
                                        <td class="text-center">
                                            <div class="d-flex content-justify-center ms-5">
                                            <a href="{{ route('companies.edit', $company->id) }}"
                                                class="btn btn-success btn-sm me-1"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <form method="post" action="{{ route('companies.destroy', $company->id) }}">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-info btn-sm me-1 btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
