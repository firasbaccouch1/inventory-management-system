<?php

namespace App\Http\Controllers\Backend\Business\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeetingRooms extends Controller
{
    public function index()
    {
        return view('backend.business.sites.meeting_rooms');
    }
}
