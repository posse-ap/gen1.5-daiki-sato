<?php

namespace App\Http\Controllers\Api;

use AntiPatternInc\Saasus\Sdk\Auth\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function update(UpdateUserRequest $request, string $uuid): JsonResponse
    {
        $userinfo = $request['userinfo'];

        $attributes = [
            'birthday' => $request->input('birthday'),
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'nickname' => $request->input('nickname'),
            'course_type' => (int)$request->input('course_type'),
            'gender_id' => (int)$request->input('gender_id'),
            'prefecture' => $request->input('prefecture'),
            'is_experienced' => $request->input('is_experienced'),
            'parent_last_name' => $request->input('parent_last_name'),
            'parent_first_name' => $request->input('parent_first_name')
        ];

        $tenant_id = getenv('SAASUS_SAIKAN_TENANT_ID');
        $api = new Api($request->headers->get('Authorization'));

        try {
            $api->createUser($userinfo['email'], "", $tenant_id);
        } catch (\Throwable $e) {
        }

        $user = $api->getUser($tenant_id, $uuid);
        if (empty($user['envs'][0]['roles'][0]['role_name'])) {
            $api->createUserRole($uuid, 'student', $tenant_id);
        }

        try {
            $api->updateUser($tenant_id, $uuid, $attributes);
        } catch (\Throwable $e) {
            return response()->json('Internal Server Error', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(['message' => 'ユーザー情報が更新されました。'], Response::HTTP_OK);
    }

    public function list(Request $request): JsonResponse
    {
        $api = new \AntiPatternInc\Saasus\Sdk\Auth\Api($request->headers->get('Authorization'));
        $users = $api->getUsers();

        $usersData = [];
        foreach ($users['users'] as $index => $user) {
            $usersData[$index] = [
                'id' => $index + 1,
                'roles' => $user['envs'][0]['roles'] ?? [],
                'first_name' => isset($user['attributes']['first_name']) ? $user['attributes']['first_name'] : null,
                'last_name' => isset($user['attributes']['last_name']) ? $user['attributes']['last_name'] : null,
                'nickname' => isset($user['attributes']['nickname']) ? $user['attributes']['nickname'] : null,
                'course_id' => isset($user['attributes']['course_id']) ? $user['attributes']['course_id'] : null,
                'email' => isset($user['email']) ? $user['email'] : null,
                'gender_id' => isset($user['attributes']['gender_id']) ? $user['attributes']['gender_id'] : null,
                'birthday' => isset($user['attributes']['birthday']) ? $user['attributes']['birthday'] : null,
                'prefecture' => isset($user['attributes']['prefecture']) ? $user['attributes']['prefecture'] : null,
                'is_experienced' => isset($user['attributes']['is_experienced']) ? $user['attributes']['is_experienced'] : null,
                'parent_first_name' => isset($user['attributes']['parent_first_name']) ? $user['attributes']['parent_first_name'] : null,
                'parent_last_name' => isset($user['attributes']['parent_last_name']) ? $user['attributes']['parent_last_name'] : null
            ];
        }

        $filteredUsersData = array_filter($usersData, function (array $userData) {
            return isset($userData['first_name']);
        });

        $userDataArray = [];
        foreach ($filteredUsersData as $filteredUserData) {
            array_push($userDataArray, $filteredUserData);
        }

        return response()->json(
            $userDataArray,
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function userinfo(Request $request): JsonResponse
    {
        $userinfo = $request['userinfo'];

        // 仮登録の場合
        if (empty($userinfo['tenants'])) {
            return response()->json([
                'roles' => [],
                'id' => $userinfo['uuid'],
                'last_name' => null,
                'first_name' => null,
                'nickname' => null,
                'course_type' => null,
                'email' => $userinfo['email'],
                'gender_id' => null,
                'birthday' => null,
                'prefecture' => null,
                'is_experienced' => null,
                'parent_last_name' => null,
                'parent_first_name' => null,
                'completed_sign_up' => false
            ], Response::HTTP_OK);
        }

        $tenant_id = getenv('SAASUS_SAIKAN_TENANT_ID');
        $api = new Api($request->bearerToken());
        $res = $api->getUser($tenant_id, $userinfo['uuid']);

        if ($res === false) {
            return response()->json('Internal Server Error', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $response_data = [
            'roles' => $userinfo['tenants'][0]['envs'][0]['roles'],
            'id' => $userinfo['uuid'],
            'last_name' => $res['attributes']['last_name'],
            'first_name' => $res['attributes']['first_name'],
            'nickname' => $res['attributes']['nickname'],
            'course_type' => $res['attributes']['course_type'],
            'email' => $userinfo['email'],
            'gender_id' => $res['attributes']['gender_id'],
            'birthday' => $res['attributes']['birthday'],
            'prefecture' => $res['attributes']['prefecture'],
            'is_experienced' => $res['attributes']['is_experienced'],
            'parent_last_name' => $res['attributes']['parent_last_name'],
            'parent_first_name' => $res['attributes']['parent_first_name'],
            'completed_sign_up' => $userinfo['tenants'][0]['completed_sign_up']
        ];

        return response()->json(
            $response_data,
            Response::HTTP_OK,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
