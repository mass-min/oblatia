@extends('layouts.base')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4 text-center" style="font-family: 'Kosugi Maru', sans-serif;">そのまま言わなくても、<wbr>いいんだよ。
        </h2>
        {!! Form::open(['url' => route('translate'), 'method' => 'post']) !!}
        <div class="form-group">
            <textarea id="translation" name="translation" class="form-control mb-3"
                      placeholder="言いたいけど言えない本音を入力してください"></textarea>
            <button type="submit" class="btn btn-success">本音をオブラートに包む</button>
            {!! Form::close() !!}
        </div>
@endsection