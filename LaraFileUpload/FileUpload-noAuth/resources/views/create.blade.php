@extends('layout')
@section('content')
    <div class="container mt-5">
    <form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <div class="card-title ">
                            <h4> Laravel 6 Form Upload </h4>
                        </div>                       
                    </div>
 
                    <div class="card-body">
 
                    <!-- print success message after file upload  -->
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
 
                            <div class="form-group" {{ $errors->has('filename') ? 'has-error' : '' }}>
                                
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="name@example.com">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="city">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="County" class="form-control" placeholder="County">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="country" class="form-control" placeholder="country">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="PostCode" class="form-control" placeholder="PostCode">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="desiredPay" class="form-control" placeholder="Desired pay £ : 3.000">
                                    </div>
                                    <div class="form-group">
                                        <input type="url" name="weblink" class="form-control" placeholder="weblink">
                                    </div>
                                    <div class="form-group">
                                        <input type="url" name="linkedin" class="form-control" placeholder="linkedin">
                                    </div>
                                    <select name="job_id" class="form-control">
                                        <option value="1">Web Developer</option>
                                        <option value="2">Linux Admin</option>
                                        <option value="3">WinX Admin</option>
                                        <option value="4">Support Level 3</option>
                                        <option value="5">Support Level 2</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Date Available</label>
                                        <input type="date" name="dateAvailable" class="form-control" placeholder="dateAvailable">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" name="filename" id="exampleFormControlFile1" class="form-control">
                                    </div>
                                    <span class="text-danger"> {{ $errors->first('filename') }}</span>
                            </div>
                    </div>
 
                    <div class="card-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-md"> Upload </button>
                        </div>
                        {{ csrf_field() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection