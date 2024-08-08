<?php
namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        return view('notifications.index', compact('notifications'));
    }

    public function show($id)
    {
        $notification = Notification::find($id);
        return view('notifications.show', compact('notification'));
    }

    public function markAsRead($id)
    {
        $notification = Notification::find($id);
        $notification->update(['read_at' => now()]);
        return redirect()->route('notifications.index');
    }
};
