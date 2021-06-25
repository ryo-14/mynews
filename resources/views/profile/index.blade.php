@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($profiles as $profiles)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="name">
                                    {{ $profiles->name, 150 }}
                                </div>
                                <div class="gender">
                                    {{ str_limit($profiles->gender, 150) }}
                                </div>
                                <div class="hobby mt-3">
                                    {{ str_limit($profiles->hobby, 150) }}
                                </div>
                            </div>
                                <div class="introduction mt-4">
                                    {{ str_limit($profiles->introduction, 1500) }}
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection