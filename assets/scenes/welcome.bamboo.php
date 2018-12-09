@extends('layouts.default')

@stage('content')

<div class="welcome">
    <img src="{{ config('phanda.url') }}/images/phanda-logo.png">
    <h1>Welcome to the <span>phanda</span>framework</h1>
    <h2>Hello, {{ $name ?? "World" }}!</h2>
    <div class="help-links">
        <a href="https://phandaframework.com" target="_blank">Phanda Website</a>
        <a href="https://phandaframework.com/docs" target="_blank">Documentation</a>
        <a href="https://phandaframework.com/news" target="_blank">News</a>
        <a href="https://gitlab.com/phanda/framework" target="_blank">Source Code</a>
    </div>
</div>

@endstage