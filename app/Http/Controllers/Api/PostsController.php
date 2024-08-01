<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Orion\Http\Controllers\Controller;

 use Orion\Concerns\DisablePagination;
 use Orion\Concerns\DisableAuthorization;
 use Illuminate\Support\Facades\Auth;
class PostsController extends Controller
{
    use DisablePagination;
    use DisableAuthorization;  //disable enable

    

   /**
     * Fully-qualified model class name
     */
    protected $model = Post::class; // or "App\Models\Post"

    //   /**
    //  * The name of the field used to fetch a resource from the database.
    //  *
    //  * @return string
    //  */
    // protected function keyName(): string
    // {
    //     return 'slug';
    // }


        /**
     * Retrieves currently authenticated user based on the guard.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function resolveUser()
    {
        return Auth::guard('sanctum')->user();
    }

 
}
 

 
