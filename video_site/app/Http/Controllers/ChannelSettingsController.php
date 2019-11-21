<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\ChannelUpdateRequest;

class ChannelSettingsController extends Controller
{
    //

    public function edit(Channel $channel) 
    {
        // dd($channel);
        return view('channel.settings.edit', [
            'channel' => $channel
        ]);
    }

    public function update(Channel $channel) 
    {

        dd('update');
        
    }

}
