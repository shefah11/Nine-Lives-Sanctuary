<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use App\Models\Cat; 

class AdoptionController extends Controller
{
    /**
     * 1. Display the Adoption Application Form for a specific cat
     */
    public function showApplyForm($cat_id)
    {
        $cat = Cat::find($cat_id);

        if (!$cat) {
            return redirect()->route('cats.index')->with('error', 'Cat not found.');
        }

        // CHANGED: Changed 'adopt.apply' to 'adoptions.apply'
        return view('adoptions.apply', compact('cat'));
    }

    /**
     * 2. Display the Admin Pending Requests List Queue
     */
    public function adminQueue()
    {
        $applications = Adoption::with(['user', 'cat'])->where('status', 'pending')->get();

        return view('adoptions.admin_queue', compact('applications'));
    }

    /**
     * 3. Display the User's Tracking Page for their application status
     */
    public function applicationStatus()
    {
        $userApplications = Adoption::where('user_id', auth()->id())->get();

        return view('adoptions.status', compact('userApplications'));
    }

    /**
     * 4. Admin Action: Approve or Reject Application
     */
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
