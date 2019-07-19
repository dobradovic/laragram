@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{$user->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">Title</label>


                        <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title') ?? $user->profile->title}}" required autocomplete="title" autofocus>

                        @error('title')
                        <strong>{{ $message }}</strong>
                        @enderror

                    </div>


                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Description</label>


                        <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror"
                               value="{{ old('description') ?? $user->profile->description}}" required autocomplete="description" autofocus>

                        @error('description')
                        <strong>{{ $message }}</strong>
                        @enderror

                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">URL</label>


                        <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror"
                               value="{{ old('url') ?? $user->profile->url}}" required autocomplete="url" autofocus>

                        @error('url')
                        <strong>{{ $message }}</strong>
                        @enderror

                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Post image</label>

                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror

                        <div class="pt-4">
                            <button class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>

                </div>
            </div>
        </
    </div>
@endsection
