@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Channel</div>

                <div class="card-body">
                    
                    <form action="/channel/{{ $channel->slug }}/update" method="post">


                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ? old('name') : $channel->name }}">

                        @if ($errors->has('name'))
                            <div class="help-block">
                                {{ $errors->first('name') }}
                            </div>
                        @endif   

                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    
                        <label for="name">Unique URL</label>

                        <div class="input-group">
                            <div class="input-group-addon">{{ config('app.url') }}</div>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('slug') ? old('slug') : $channel->slug }}">
                        </div>

                        @if ($errors->has('slug'))
                            <div class="help-block">
                                {{ $errors->first('slug') }}
                            </div>
                        @endif   

                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    
                        <label for="description">description URL</label>

                        <textarea name="description" id="" cols="30" rows="1">{{ old('description') ? old('description') : $channel->description }}</textarea>

                        @if ($errors->has('description'))
                            <div class="help-block">
                                {{ $errors->first('description') }}
                            </div>
                        @endif   

                    </div>
                        <!-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        
                        <label for="name">Username</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('name') ? old('name') : $channel->name }}">
                            
                                @if ($errors->has('name'))
                                    <div class="help-block">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif  
                            </div>



                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        
                            <label for="name">Unique URL</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">{{ config('app.url') }}</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ old('slug') ? old('slug') : $channel->slug }}">
                            </div>
                            
                            @if ($errors->has('slug'))
                                <div class="help-block">
                                    {{ $errors->first('slug') }}
                                </div>
                            @endif   

                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">With textarea</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea">{{ old('description') ? old('description') : $channel->description }}</textarea>
                            </div>
                            @if ($errors->has('description'))
                                <div class="help-block">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif   

                        </div> -->


                        <button class="btn button-default">Update</button>



                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
