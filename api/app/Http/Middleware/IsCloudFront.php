<?php

namespace App\Http\Middleware;

use Closure;
use \Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class IsCloudFront
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $cloud_front_custom_header = getenv('CLOUD_FRONT_CUSTOM_HEADER');

        // CloudFrontで設定したカスタムヘッダが存在することをチェック
        if ($request->headers->get('IsCloudFront') != $cloud_front_custom_header) {
            return response()->json('Unauthorized', Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
