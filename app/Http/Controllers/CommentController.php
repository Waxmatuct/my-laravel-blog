<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeComment(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'comment' => 'required|min:5',
        ]);

        $comment = Comment::create([
            'username' => $request->get('username'),
            'comment' => $request->get('comment'),
            'website' => $request->get('website'),
            'post_id' => $request->get('post_id'),
        ]);
        
        $post = Post::where('id', $comment->post_id)->first();

        $error = true;
        $secret = env('RECAPTCHA_SECRET');
        
        if (!empty($_POST['g-recaptcha-response'])) {

            $curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, 'secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
            $out = curl_exec($curl);
            curl_close($curl);
        
            $out = json_decode($out);
            if ($out->success == true) {
                $error = false;
            } 
        }    
         
        if ($error) {
            echo 'Ошибка заполнения капчи.';
        }

        return redirect()->route('getPost', $post->slug)
        ->with('success', 'Комментарий успешно добавлен');

    }

    public function onlineComment(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->online = $request->online;
        $comment->save();

        if ($request->online) {
            return redirect()->route('comments.index')
            ->with('success', 'Коммент «'.$comment->id.'» включен');
        } else {
            return redirect()->route('comments.index')
            ->with('success', 'Коммент «'.$comment->id.'» выключен');
        }
    }
}
