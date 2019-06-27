@extends('layouts.front')
@section('title', 'プロフィール情報')

@section('content')
    <div class="container">
      <div class="row">
            <h2>プロフィール情報</h2>
      </div>
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="title">
                                    {{ $post->name }}
                                </div>
                                <div class="gender">
                                    {{ $post->gender }}
                                </div>
                                <div class="introduction">
                                    {{ str_limit($post->introduction, 200) }}
                                </div>
                                <div class="hobby">
                                    {{ str_limit($post->hobby, 100) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
@endsection