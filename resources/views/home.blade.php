@extends('layouts.app')

@section('content')
<div class="container pl-5 pr-5">
    <div class="row justify-content-center">
            <div class="col-3 p-4">
            <img src="/images/brand_logo.jpg" alt="" class="rounded-circle" style="width: 150px;height: 150px;">
        </div>
        <div class="col-9">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-3"><strong>153</strong> posts</div>
                <div class="pr-3"><strong>24k</strong> followers</div>
                <div class="pr-3"><strong>15</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
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
