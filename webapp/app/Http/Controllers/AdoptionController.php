<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use App\Models\Cat; 

class AdoptionController extends Controller
{
    public function showApplyForm($cat_id)
    {
        $cat = Cat::find($cat_id);

        if (!$cat) {
            return redirect()->route('cats.index')->with('error', 'Cat not found.');
        }

        return view('adopt.apply', compact('cat'));
    }

    
    public function adminQueue()
    {
        $applications = Adoption::with(['user', 'cat'])->where('status', 'pending')->get();

        return view('adopt.admin_queue', compact('applications'));
    }

    
    public function applicationStatus()
    {
        $userApplications = Adoption::where('user_id', auth()->id())->get();

        return view('adopt.status', compact('userApplications'));
    }

    
    public function updateStatus(Request $request, $id)
    {
        $application = Adoption::findOrFail($id);
        
        if ($request->action == 'approve') {
            $application->status = 'Approved';
            
            $cat = Cat::find($application->cat_id);
            if ($cat) {
                $cat->status = 'Adopted';
                $cat->save();
            }
        } else {
            $application->status = 'Rejected';
        }

        $application->save();

        return redirect()->back()->with('success', 'Application status updated successfully!');
    }
}
