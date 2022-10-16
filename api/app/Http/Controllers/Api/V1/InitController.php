<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Models\User;
use AntiPatternInc\Saasus\Sdk\Auth\Api;
use App\Http\Controllers\Controller;
use Exception;

class InitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user_id = $request->input('userinfo')['uuid'];
        $email = $request->input('userinfo')['email'];
        $tenant =  $request->input('userinfo')['tenants'];

        // ログイン
        if(count($tenant) !== 0) {
            return response()->json(
                [
                    "user_id" => $user_id
                ],
                Response::HTTP_OK
            );
        }

        // サインアップ
        $common_tenant_id = getenv('SAASUS_COMMON_TENANT_ID');
        $api = new Api($request->bearerToken());
        $res_user = $api->createUser($email,'',$common_tenant_id);
        // createUserエラーハンドリング
        if ($res_user === false) {
            return response()->json('Internal Server Error: ', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        $res_role = $api->createUserRole($user_id,'user',$common_tenant_id,1);
        if ($res_role === false) {
            return response()->json('Internal Server Error: ', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        // appsデータベースにuuidを追加
        if (User::where('uuid', '=', $user_id)->doesntExist()){
            $user = new User();
            $user->uuid = $user_id;
            $user->save();
        }
        return response()->json(
            [
                "user_id" => $user_id
            ],
            Response::HTTP_OK
        );
    }

}
