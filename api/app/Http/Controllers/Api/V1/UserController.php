<?php

namespace App\Http\Controllers\Api\V1;

use AntiPatternInc\Saasus\Sdk\Auth\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $user_id)
    {
        if (empty(User::where('uuid', '=', $user_id)->first())) {
            return response()->json('Not Found', Response::HTTP_NOT_FOUND);
        }

        $tenant_id = getenv('SAASUS_COMMON_TENANT_ID');

        $api = new Api($request->bearerToken());
        $res = $api->getUser($tenant_id, $user_id);

        if ($res === false) {
            return response()->json('Internal Server Error', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            "id" => $res['id'],
            "email" => $res['email'],
            "last_name" => $res['attributes']['last_name'],
            "first_name" => $res['attributes']['first_name'],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $user_id)
    {
        if (empty(User::where('uuid', '=', $user_id)->first())) {
            return response()->json('Not Found', Response::HTTP_NOT_FOUND);
        }

        $attributes = [
            "last_name" => $request->input("last_name"),
            "first_name" => $request->input("first_name"),
        ];

        $tenant_id = getenv('SAASUS_COMMON_TENANT_ID');
        $api = new Api($request->bearerToken());
        $res = $api->updateUser($tenant_id, $user_id, $attributes);

        if ($res === false) {
            return response()->json('Internal Server Error', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json('ユーザー情報が更新されました', Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
