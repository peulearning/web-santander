<?php
namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index', compact('enrollments'));
    }

    public function store(Request $request)
    {
        $enrollment = Enrollment::create($request->all());
        return redirect()->route('enrollments.index');
    }

    public function destroy($id)
    {
        Enrollment::destroy($id);
        return redirect()->route('enrollments.index');
    }
};
