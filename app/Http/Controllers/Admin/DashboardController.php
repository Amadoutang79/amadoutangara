<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProjets = Projet::count();
        $totalMessages = Message::count();
        $messagesNonLus = Message::nonLu()->count();
        $totalUsers = User::count();
        
        $messagesRecents = Message::latest()->take(5)->get();
        $projetsRecents = Projet::latest()->take(5)->get();
        
        return view('admin.dashboard', compact(
            'totalProjets',
            'totalMessages',
            'messagesNonLus',
            'totalUsers',
            'messagesRecents',
            'projetsRecents'
        ));
    }
}