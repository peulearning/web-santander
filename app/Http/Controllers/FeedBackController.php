<?php
namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks.index', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $feedback = Feedback::create($request->all());
        return redirect()->route('feedbacks.index');
    }

    public function destroy($id)
    {
        Feedback::destroy($id);
        return redirect()->route('feedbacks.index');
    }
};
