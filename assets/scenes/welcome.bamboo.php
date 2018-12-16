@extends('layouts.default')

@presenter('linkPresenter', \App\Presenter\PhandaLinkPresenter::class)

@stage('content')

<div class="welcome">
    <img src="{{ url('images/phanda-logo.png') }}">
    <h1>Welcome to the <span>phanda</span>framework</h1>
    <h2>Hello, {{ $name ?? "World" }}!</h2>
    <div class="help-links">
        {{* this is an example of using the presenters. *}}
        @present('linkPresenter', 'getLinks')
        @foreach($this->links as $title => $link)
            <a href="{{ $link }}" target="_blank">{{ $title }}</a>
        @endforeach
    </div>
</div>

@endstage