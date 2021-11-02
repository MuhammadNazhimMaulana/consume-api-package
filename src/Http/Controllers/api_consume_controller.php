<?php

namespace Bonevian\Consume_Api\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class api_consume_controller extends Controller
{
    //
    function readAll()
    {
        $data =  Http::get('https://jsonplaceholder.typicode.com/posts')->json();

        return view('consume_api::all', ['data'=>$data]);
    }

    function readOne($id)
    {
        $data =  Http::get('https://jsonplaceholder.typicode.com/posts/' . $id)->json();

        return view('consume_api::one', ['data'=>$data]);
    }
    
    public function post_data()
    {
        return view('consume_api::insert');
    }
    
    public function post_data_store(Request $request)
    {
        $data =  Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => $request->userId,
            'title' => $request->title,
            'body' => $request->body,
        ])->json();
        
        return view('consume_api::insert_result', ['data'=>$data]);
    }

    function udpate_data($id)
    {
        $data =  Http::get('https://jsonplaceholder.typicode.com/posts/' . $id)->json();
    
        return view('consume_api::update_data', ['data'=>$data]);
    }
    
    public function update_process(Request $request, $id)
    {
        $data =  Http::put('https://jsonplaceholder.typicode.com/posts/' . $id, [
            'userId' => $request->userId,
            'title' => $request->title,
            'body' => $request->body,
        ])->json();
        
        return view('consume_api::update_result', ['data'=>$data]);
    }
    
    function delete($id)
    {
        $data =  Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
    
        return $data->json();
    }

}
