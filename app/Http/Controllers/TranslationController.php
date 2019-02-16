<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Translate\TranslateClient;

class TranslationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function translate(Request $request)
    {
        $params = $request->all();
        if ($params['translation'] === null) {
            $request->session()->flash('alert', '本音を入力してください');
            return redirect(route('index'));
        }

        //Google APIの「プロジェクトID」
        $projectId = env('GOOGLE_PROJECT_ID');

        //「Google Cloud Translation API」の「APIキー」
        $apiKey = env('GOOGLE_API_KEY');

        //「TranslateClient」クラスを呼び出し
        $translate = new TranslateClient([
            'projectId' => $projectId,
            'key' => $apiKey,
        ]);

        $targetLanguages = $translate->languages();
        // 翻訳対象になりうる言語から日本語を取り除く
        $targetLanguages = array_diff($targetLanguages, array('ja'));

        // 翻訳対象の言語設定
        $targetLanguage = $targetLanguages[array_rand($targetLanguages, 1)];

        //翻訳開始
        $result = $translate->translate($params['translation'], [
            'target' => $targetLanguage,
        ]);

        $inputText = $result['input'];
        $resultText = $result['text'];

        return redirect(route('result', compact('inputText', 'resultText')));
    }

    public function result(Request $request)
    {
        $inputText = $request->get('inputText');
        $resultText = $request->get('resultText');
        return view('result', compact('inputText', 'resultText'));
    }
}
