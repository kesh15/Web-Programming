@extends('layout.main')

@section('content')
    <h3>Data Product</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('student/add')}}' ">
                <i class="fa-solid fa-circle-plus"></i> Add Product
            </button>
        </div>
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong>{{ session('msg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Product</th>
                        <th>Product Name</th>
                        {{-- <th>Genre</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>#</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->idstudent }}</td>
                            <td>{{ $row->fullname }}</td>
                            {{-- <td>{{ ($row->genre=='M') ? 'Male' : 'Female' }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->emailaddress }}</td>
                            <td>{{ $row->phone }}</td> --}}
                            <td></td>
                        </tr>
                            <button onclick="window.location= {{ url('students/'.$row->idstudent) }}"
                            type="button" class="btn btn-sm btn-info" title="Edit Data">
                                <i class="fas fa-edit"></i>
                            </button>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection