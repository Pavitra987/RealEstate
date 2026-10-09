<?php

namespace App\Http\Controllers;
use App\Models\Agents;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
       $agents = Agents::all();

        return view('agents', compact('agents'));
}

}
