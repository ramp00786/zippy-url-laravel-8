<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Jenssegers\Agent\Facades\Agent;


class ContactsController extends Controller
{
    public function store(Request $request){

        $validator = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        

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

        contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'message' => $request->message,
            'ip_address' => $request->ip(),
            'browser' => $browser.' | '.$version,
            'os' => Agent::platform(),
            'device' => $device,
        ]);
  
        return response()->json(['success' => 'Post created successfully.']);

        




        dd($request);
    }
}
