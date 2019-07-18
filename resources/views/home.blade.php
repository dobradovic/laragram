@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="ol-3 p-5">
            <img src="https://instagram.fbeg1-1.fna.fbcdn.net/vp/28271d64c3c5b8b79b2fa740af8960e2/5DC3A8BB/t51.2885-19/s150x150/40101185_665788620471843_8463166592149094400_n.jpg?_nc_ht=instagram.fbeg1-1.fna.fbcdn.net" class="rounded-circle">
        </divcol-3>
    </div>
    <div class="col-9 pt-5">
        <div>
            <h1>
               {{$user->username}}
            </h1>
            <div class="d-flex">
                <div class="pr-5"><strong>23</strong> posts</div>
                <div class="pr-5"><strong>213</strong> followers</div>
                <div class="pr-5"><strong>following</strong> 196</div>
            </div>

            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}} </div>
            <div><a href="#">{{$user->profile->url ?? 'N/A' }}</a> </div>

        </div>
    </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://instagram.fbeg1-1.fna.fbcdn.net/vp/b35d305c2e73de04b46d1337ddc5766c/5DBAF0A1/t51.2885-15/sh0.08/e35/c0.109.925.925a/s640x640/66170854_402202580395287_1871271487333362373_n.jpg?_nc_ht=instagram.fbeg1-1.fna.fbcdn.net" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://instagram.fbeg1-1.fna.fbcdn.net/vp/59af2b9628378a3aed3092336bba96b1/5DAF8D71/t51.2885-15/sh0.08/e35/c4.0.741.741/s640x640/64675685_210875326548910_7731632172709143956_n.jpg?_nc_ht=instagram.fbeg1-1.fna.fbcdn.net" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://instagram.fbeg1-1.fna.fbcdn.net/vp/fc490bb3cbc0b3c6dab0d305a1d2f867/5DAEFD99/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/37155635_257434654978362_2428655142321520640_n.jpg?_nc_ht=instagram.fbeg1-1.fna.fbcdn.net" class="w-100" alt="">
            </div>
        </div>
</div>
</div>
@endsection
