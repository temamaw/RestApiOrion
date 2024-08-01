<?php

namespace App\Http\Requests;

 
use Orion\Http\Requests\Request;

class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }


    public function commonRules() : array
    {
        return [
            'title' => 'required'
        ];
    }

    public function storeRules() : array
    {
        return [
            'body' => 'required'
        ];
    }

 
}

 

 
