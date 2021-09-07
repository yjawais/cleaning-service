<?php

namespace App\Http\Controllers\ApiControllers\Configration;

use App\Http\Controllers\ApiControllers\ApiController;
use Illuminate\Http\Request;

class ApiTokenApiController extends ApiController
{
      /**
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function update(Request $request)
    {
        $token = Str::random(80);

        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return ['token' => $token];
    }
} 
