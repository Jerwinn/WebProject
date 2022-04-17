@extends('layout.frontendLayout')
@section('title',$detail->title)
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">{{$detail->title}}</h5>
                <img src="{{asset('images/fullImg/'.$detail->image)}}" class="card-img-top" alt="{{$detail->title}}">
                <div class="card-body">
                    {{$detail->detail}}
                </div>
            </div>
            <!-- Add Comment -->
            <div class="card my-5">
                <h5 class="card-header">Add Comment</h5>
                <div class="card-body">
                    <textarea class="form-control"></textarea>
                    <input type="submit" class="btn btn-dark mt-2" />
                </div>
            </div>
            <!-- Fetch Comments -->
            <div class="card my-4">
                <h5 class="card-header">Comments <span class="badge badge-dark">{{count($detail->comments)}}</span></h5>
                <div class="card-body">
                    @if($detail->comments)
                        @foreach($detail->comments as $comment)
                            <blockquote class="blockquote">
                                <p class="mb-0">{{$comment->comment}}</p>
                                <footer class="blockquote-footer">Username</footer>
                            </blockquote>
                            <hr/>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!-- Right SIdebar -->
        <div class="col-md-4">
            <!-- Search -->
            <div class="card mb-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <form action="{{url('/')}}">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" />
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button" id="button-addon2">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Recent Posts -->
            <div class="card mb-4">
                <h5 class="card-header">Recent Posts</h5>
                <div class="list-group list-group-flush">
                    @if($recentPost)
                        @foreach($recentPost as $post)
                            <a href="#" class="list-group-item">{{$post->title}}</a>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- Popular Posts -->
            <div class="card mb-4">
                <h5 class="card-header">Popular Posts</h5>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Post 1</a>
                    <a href="#" class="list-group-item">Post 2</a>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
