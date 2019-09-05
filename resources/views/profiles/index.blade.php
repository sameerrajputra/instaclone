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
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-3"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-3"><strong>24k</strong> followers</div>
                <div class="pr-3"><strong>15</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                 <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
            @endforeach
        </div>
      </div>
</div>
@endsection
