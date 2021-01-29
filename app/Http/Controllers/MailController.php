<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Inquiry;
use Validator;

class MailController extends Controller
{
   //バリデーション定義
    const INQUIRY_VALIDATIONS = [
　　      'full_name' => 'required|string|max:5',
       'email' => 'required|email|max:255'
    ];


    public function inquiry(Request $request)
    {
        // バリデーション実行
        $validator = Validator::make($request->only('full_name', 'email'), self::INQUIRY_VALIDATIONS);

        // 失敗時
        if ($validator->fails()) {
            return response()->json([
                'result' => false,
                'errors' => self::formatErrors($validator->errors())
            ]);
        }
        // 成功時
        Mail::to($request->input('email'))->send(new Inquiry());
        return response()->json([
            'result' => true,
            'errors' => []
        ]);
    }
}
