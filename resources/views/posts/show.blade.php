@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <a href="{{ route('post.index') }}" class="btn btn-success btn-sm mt-5"> <i class="bi bi-arrow-left"></i> Back
                to
                my post</a>

            <h2 class="my-3">{{ $posts['title'] }}</h2>

            @if ($posts->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts->image) }}" class="card-img-top mt-3" alt="{{ $posts->title }}" height="600px">
                </div>
            @else
                <img src="{{ asset('/img/blog-bg.jpg') }}" alt="Avatar" width="100%">
            @endif

            <article>
                {!! $posts->body !!}
            </article>
        </section>
    </div>    
@endsection
