@extends('layouts.app')

@section('content')
<div class="container pl-5 pr-5">
    <div class="row justify-content-center">
            <div class="col-3 p-4">
            <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle" style="width: 150px;height: 150px;">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                        <h2>{{ $user->username }}</h2>
                    @if( Auth::user()->id  !== $user->id)
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endif
            </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-3"><strong>{{ $postCount }}</strong> posts</div>
            <div class="pr-3"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-3"><strong>{{ $followingCount }}</strong> following</div>
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
