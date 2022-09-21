@extends('backend.layout')
@section('content')
<div class="container mt-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
        <div class="col-md-12 grid-margin">
                    <h2 class="text-center text-success">Employee Information</h2>
                    <div class="table-responsive">
                        <a href="{{ route('employees.create') }}" class="btn btn-success btn-sm"
                            title="Add new Customer">
                            Add New Employee
                        </a>
                        <hr class="bg-primary">
                        <br><br>
                        <table id="table" class="dataTable table table-responsive text-center multi-table table dt-table-hover w-100" style="white-space: nowrap; width:100%  text-overflow:ellipsis;">
                            <thead>
                                <tr>

                                    <th class="text-center">SL</th>
                                    <th class="text-center">First Name</th>
                                    <th class="text-center">Last Name</th>
                                    <th class="text-center">Company</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $employee->firstName }}</td>
                                        <td class="text-center">{{ $employee->lastName }}</td>
                                        <td class="text-center">{{ $employee->companyName }}</td>
                                        <td class="text-center">{{ $employee->email }}</td>
                                        <td class="text-center">{{ $employee->phone }}</td>
                                        <td class="text-center">
                                            <div class="d-flex content-justify-center ms-5">
                                            <a href="{{ route('employees.edit', $employee->id) }}"
                                                class="btn btn-success btn-sm me-1"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <form method="post" action="{{ route('employees.destroy', $employee->id) }}">
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
