<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shortenUrl;
use App\Models\clickedUrl;
use App\Models\counter;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Str;



class ShortenUrlController extends Controller
{
    public function index(){
        $shortenUrls = shortenUrl::where('status', 1)->orderBy('id', 'DESC')->take(1)->get();
        $counter = counter::first();
        return view('welcome')->with(['shortenUrls' => $shortenUrls, 'counter' => $counter]);
        
    }

    public function getUniqueId(){
        //return md5(uniqid(rand(), true));
        return Str::random(10);
    }

    public function store(Request $request){

        // -----Counter----
        $counter = counter::first();
        $counter->total_shortened = $counter->total_shortened + 1;
        $counter->save();
        // -----Counter----


        $shortenUrl = new shortenUrl;

        $browser = Agent::browser();
        $version = Agent::version($browser);

        if (Agent::isMobile()) {
            $device = 'Mobile.';
        }else if (Agent::isDesktop()) {
            $device = 'Desktop.';
        }else if (Agent::isTablet()) {
            $device = 'Tablet.';
        }else if (Agent::isPhone()) {
            $device = 'Phone.';
        }


        $shortenUrl->original_url = $request->url; 
        $shortenUrl->shortened_url = $this->getUniqueId();
        $shortenUrl->status = 1;
        $shortenUrl->ip_address = $request->ip();
        $shortenUrl->browser = $browser.' | '.$version;
        $shortenUrl->device = $device;
        $shortenUrl->os = Agent::platform();
        $shortenUrl->save();
        return redirect(url('/#result'));
        
    }

    public function redirect_url(Request $request){
        //dd($request->slug);
        $shortenUrl = shortenUrl::where('shortened_url', $request->slug)->where('status', 1)->first();
        if($shortenUrl){

            // -----Counter----
            $counter = counter::first();
            $counter->total_clicked = $counter->total_clicked + 1;
            $counter->save();
            // -----Counter----

            $clickedUrl = new clickedUrl;

            $browser = Agent::browser();
            $version = Agent::version($browser);

            if (Agent::isMobile()) {
                $device = 'Mobile';
            }else if (Agent::isDesktop()) {
                $device = 'Desktop';
            }else if (Agent::isTablet()) {
                $device = 'Tablet';
            }else if (Agent::isPhone()) {
                $device = 'Phone';
            }

            $clickedUrl->url_id = $request->slug;
            $clickedUrl->ip_address = $request->ip();
            $clickedUrl->browser = $browser.' | '.$version;
            $clickedUrl->device = $device;
            $clickedUrl->os = Agent::platform();
            $clickedUrl->save();

            return redirect($shortenUrl->original_url);
        }
        else{
            echo "<h1>Invalid Or Inactive url.</h1>";
            echo "<a href='/'>Home</a>";
        }
        
    }
}
