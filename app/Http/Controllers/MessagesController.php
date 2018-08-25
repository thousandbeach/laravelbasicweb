<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Message;
use App\Message;

class MessagesController extends Controller
{

    public function submit(Request $request, Message $messages){
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|max:500',
        ]);


        // create new Message めんどくさい書き方
        /*
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        */

        // create new Message $fillableを確認して、$fillableにあるカラムをDBに保存する書き方
        $message = new Message;
        $message->fill($request->all())->save();

        // redirect
        return redirect('/')->with('success', 'メッセージの送信が完了いたしました！');

    }

    // Message::all() はデータベース上に保存されている Message モデルのレコードの一覧を確認
    public function getMessages(){
        //$messages = Message::all(); // 全件取得バージョン
        $messages = Message::latest()->paginate(5); // ペジネーション5件数ずつ 最新のものから順に

        //return view('messages')->with('messages', $messages);
        return view('messages', compact('messages'));
    }


}
