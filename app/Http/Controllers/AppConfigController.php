<?php

namespace App\Http\Controllers;

use App\Models\AppConfig;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppConfigController extends Controller
{

    public function getColor() {
        $primaryColor = config('colors.primaryColor');
        $secondaryColor = config('colors.secondaryColor');

        $color = AppConfig::where('user_id', Auth::id())
            ->first(['primary_color', 'secondary_color']);
        if(!is_null($color)){
            $primaryColor = $color->primary_color;
            $secondaryColor = $color->secondary_color;
        }
        return response()->json([
            'primaryColor' => $primaryColor,
            'secondaryColor' => $secondaryColor
        ]);
    }

    public function setColor(Request $request) {
        if(!Auth::check()) return response()->json(['error' => 'Não autorizado'], 401);

        /** @var User $user */
        $user = Auth::user();
        $validated = $request->validate([
            'primary_color' => 'string',
            'secondary_color' => 'string',
        ]);

        $newColor = $user->color()->updateOrCreate(
            $validated
        );

        return response()->json([
            'primaryColor' => $newColor->primary_color,
            'secondaryColor' => $newColor->secondary_color,
        ]);
    }

    public function appColors() {
        return response()->json([
            'primaryColor' => config('colors.primaryColor'),
            'secondaryColor' => config('colors.secondaryColor'),
        ]);
    }
}
