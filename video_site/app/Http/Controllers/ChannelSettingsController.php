<?php

namespace App\Http\Controllers;
use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelSettingsController extends Controller
{
    //
    public function edit(Channel $channel)
    {
        // dd($channel);
        return view('channel.settings.edit', [
            'channel'=> $channel,
        ]);
    }
    
    public function update()
    {

    }
    
}