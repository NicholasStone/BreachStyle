<?php

namespace App\Http\Controllers\Frontend\User;

use Fenos\Notifynder\Models\Notification;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotifyController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = \Auth::user();
    }

    public function read($id)
    {
        Notification::find($id)->update(['read'=>1]);

        return redirect()->back();
    }

    public function unread($id)
    {
        Notification::find($id)->update(['read'=>0]);

        return redirect()->back();
    }
}
