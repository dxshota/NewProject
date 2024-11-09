<x-app-layout>
@extends('layouts.app')

@section('content')
    @include('index') <!-- index.blade.phpのヘッダーを読み込む -->

    <div class="container">
        <div class="header-tabs">
            <a href="/strategy">戦略</a>
            <a href="/preset">プリセット</a>
            <a href="/login">ログイン</a>
        </div>
@endsection
        
</x-app-layout>