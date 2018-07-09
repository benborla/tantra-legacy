<?php
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

if (!function_exists('get_time_diff_in_mins')) {
    function get_time_diff_in_mins($time)
    {
        $time = strtotime($time);
        $now = strtotime(now());
        $diff = floor(abs($now - $time) / 60);

        return $diff;
    }
}

if (!function_exists('is_today')) {
    function is_today($time)
    {
        if (get_time_diff_in_mins($time) > 3600) {
            return true;
        }

        return false;
    }
}

if (!function_exists('auth_user')) {
    /**
     * @return \App\User|null
     */
    function user(): ?User
    {
        /** @var \App\User|null $user */
        $user = auth()->user();

        return $user;
    }

}

if (!function_exists('get_current_route')) {
    function get_current_route()
    {
        return Route::getCurrentRoute()->getName();
    }
}