@extends('layouts.app') @section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="row shadow p-5 w-100">
        <div class="col-7">
            <img
                src="{{$post->user->profile->profileImage()}}"
                height="600px"
                class="w-100"
                alt=""
            />
        </div>
        <div class="col-5">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img
                            src="{{$post->user->profile->profileImage()}}"
                            style="max-width: 40px"
                            class="w-100 rounded-circle"
                        />
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}">
                                <span
                                    class="text-dark"
                                    >{{$post->user->username}}</span
                                >
                            </a>
                            <a href="" class="pl-3">Follow</a>
                        </div>
                    </div>
                </div>
                <hr />
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                            <span
                                class="text-dark"
                                >{{$post->user->username}}</span
                            >
                        </a>
                    </span>
                    {{$post->caption}}
                </p>
            </div>

            <div></div>
        </div>
    </div>
</div>
@endsection
