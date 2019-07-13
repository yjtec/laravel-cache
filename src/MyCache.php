<?php 
namespace Yjtec\MC;
use Cache;
use Carbon\Carbon;
class MyCache{
    public function set($key, $value, $expire = '')
    {
        if(is_array($value)){
            $value = json_encode($value);
        }
        if ($value && $expire) {
            $expiresAt = Carbon::now()->addMinutes($expire);
            Cache::put($key,$value,$expiresAt);
        }
        if($value && !$expire){
            Cache::forever($key,$value);
        }
    }

    public function get($key){
        $value = Cache::get($key);
        $tmp = json_decode($value,true);
        if(is_array($tmp)){
            return $tmp;
        }
        return $value;
    }

    public function remove($key){
        Cache::forget($key);
    }
}
?>