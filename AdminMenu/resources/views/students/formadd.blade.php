@extends('layout.main')

@section('content')
    <h3> Your Admin</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('student')}}' ">
                <i class="fa-solid fa-circle-plus"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('student') }}">
                @csrf
                    <div class="row mb-3">
                        <label for="txtid" class="col-sm-2 col-form-label">ID Product</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('txtid') is-invalid @enderror" id="txtid" name="txtid" value="{{ old('txtid') }}">
                        @error('txtid')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <label for="txtfullname" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="txtfullname" name="txtfullname">
                        </div>
                    </div>

                    {{-- <div class="row mb-3">
                        <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm" name="textgender">
                                <option value="" selected>-Pilih-</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="txtaddress" id="txtaddress" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="txtemail" name="txtemail">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtphone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="txtphone" name="txtphone">
                        </div>
                    </div> --}}

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-sm btn-success">
                                Save
                            </button>
                        </div>
                    </div>

            </form>
        </div>
    </div>
@endsection