@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Channel Settings</div>

                    <div class="card-body">
                        
                        <form action="/action_page.php">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" value="{{ old('name') ? old('name') : $channel->name }}">
                            </div>

                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" id="slug" value="{{ old('slug') ? old('slug') : $channel->slug }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="password" class="form-control" id="description" value="{{ old('description') ? old('description') : $channel->description }}">
                            </div>

                            <div class="checkbox">
  
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
