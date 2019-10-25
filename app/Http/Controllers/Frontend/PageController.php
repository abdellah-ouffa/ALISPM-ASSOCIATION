<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Partner;
use App\Project;
use App\Field;
use App\Service;
use App\Hiring;
use Mail;
use App\Mail\ContactMail;

class PageController extends Controller
{
    public function home()
    {
    	$sliders = Slider::all();
    	$partners = Partner::all();
    	$recentProjects = Project::latest()->paginate(8);
    	return view('frontend.pages.home', [
    		'sliders' => $sliders,
    		'partners' => $partners,
    		'recentProjects' => $recentProjects
    	]);

    }

    public function projects()
    {
        $fields = Field::all();
        $projects = Project::latest()->get();

        return view('frontend.pages.projects', [
            'fields' => $fields,
            'projects' => $projects
        ]);
    }

    public function projectDetails($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $partners = Partner::all();
        
        return view('frontend.pages.projects_details', [
            'project' => $project,
            'partners' => $partners
        ]);
    }

    public function services()
    {
        $services = Service::latest()->get();

        return view('frontend.pages.services', [
            'services' => $services
        ]);
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function sendMail(Request $request)
    {
        $mailTo = setting('site.company_email');
        $mailRequest = [
            'senderName' => $request->fname . ' ' . $request->lname,
            'senderMail' => $request->email,
            'message' => $request->message
        ];

        Mail::to($mailTo)->send(new ContactMail($mailRequest));

        session()->flash('success', 'Votre email a été bien envoyé !');

        return redirect()->route('site.contact');
    }

    public function hiring()
    {
        return view('frontend.pages.hiring');
    }

    public function saveHiring(Request $request)
    {
        // Store cv
        $storedFile = $request->hasFile('images') ? null : saveFile($request->file('cv'), 'hirings');
        
        // Save hiring
        $hiring = new Hiring();
        $hiring->full_name = $request->full_name;
        $hiring->gender = $request->gender;
        $hiring->email = $request->email;
        $hiring->tel = $request->tel;
        $hiring->education_level = $request->education_level;
        $hiring->message = $request->message;
        $hiring->cv = $storedFile;
        $hiring->save();
    
        session()->flash('success', 'Votre candidature a été bien envoyé !');

        return redirect()->route('site.hiring');
    }
  
}
