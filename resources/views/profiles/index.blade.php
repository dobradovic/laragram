@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="ol-3 p-5">
            <img src="https://instagram.fbeg1-1.fna.fbcdn.net/vp/28271d64c3c5b8b79b2fa740af8960e2/5DC3A8BB/t51.2885-19/s150x150/40101185_665788620471843_8463166592149094400_n.jpg?_nc_ht=instagram.fbeg1-1.fna.fbcdn.net" class="rounded-circle">
        </divcol-3>
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>
               {{$user->username}}
            </h1>
            <a href="/p/create">Add New Post</a>

        </div>
        @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
        @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>213</strong> followers</div>
                <div class="pr-5"><strong>following</strong> 196</div>
            </div>

            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}} </div>
            <div><a href="#">{{$user->profile->url ?? 'N/A' }}</a> </div>

        </div>
    </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                   <a href="/p/{{$post->id}}">
                       <img src="/storage/{{$post->image}}" class="w-100" alt="">
                   </a>
                </div>
            @endforeach

        </div>
</div>
</div>
@endsection
