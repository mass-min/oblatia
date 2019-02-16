@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="card mt-3 mb-4">
            <div class="card-header">
                <p>
                    {{ $inputText }}<br>
                    をオブラートに包みました！いかがでしょう？
                </p>
            </div>
            <div class="card-body">
                <h2 id="targetText">{{ $resultText }}</h2>
            </div>
        </div>
        <a href="{{ route('index') }}" class="btn btn-outline-secondary">別のオブラートで包む</a>
        <a href="#" id="copy" class="btn btn-success">包んだ結果をコピーする</a>
    </div>

    <script>
        function execCopy(string) {
            let temp = document.createElement('textarea');

            temp.value = string;
            temp.selectionStart = 0;
            temp.selectionEnd = temp.value.length;

            document.body.appendChild(temp);
            temp.focus();
            let result = document.execCommand('copy');
            temp.blur();
            document.body.removeChild(temp);
            // true なら実行できている falseなら失敗か対応していないか
            return result;
        }

        let textarea = document.getElementById('targetText');
        let button = document.getElementById('copy');

        button.onclick = function () {
            if (execCopy(textarea.innerText)) {
                alert('コピーしました！');
            } else {
                alert('このブラウザでは対応していません');
            }
        };
    </script>
@endsection