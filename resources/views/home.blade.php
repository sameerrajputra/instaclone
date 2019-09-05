@extends('layouts.app')

@section('content')
<div class="container pl-5 pr-5">
    <div class="row justify-content-center">
            <div class="col-3 p-4">
            <img src="/images/brand_logo.jpg" alt="" class="rounded-circle" style="width: 150px;height: 150px;">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-3"><strong>153</strong> posts</div>
                <div class="pr-3"><strong>24k</strong> followers</div>
                <div class="pr-3"><strong>15</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                 <img src="https://instagram.fktm8-1.fna.fbcdn.net/vp/3180f51c4f5946120960673955dd4805/5E067E92/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/69875934_3278854528798972_69605946931405030_n.jpg?_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=104" class="w-100">
            </div>
            <div class="col-4">
                 <img src="https://instagram.fktm8-1.fna.fbcdn.net/vp/3180f51c4f5946120960673955dd4805/5E067E92/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/69875934_3278854528798972_69605946931405030_n.jpg?_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=104" class="w-100">
            </div>
            <div class="col-4">
                 <img src="https://instagram.fktm8-1.fna.fbcdn.net/vp/3180f51c4f5946120960673955dd4805/5E067E92/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/69875934_3278854528798972_69605946931405030_n.jpg?_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=104" class="w-100">
            </div>
        </div>
      </div>
</div>
@endsection
