<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Base;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Base/Index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return Inertia::render('Base/New');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        //$current_user_id = auth()->user()->id;

        
        $base = new Base();
        $base->name = $request->title;
    
        $base->description = $request->description;

        if ($request->has('category_id')) {
            $base->category_id = $request->category_id;
        }

        $base->user_id = auth()->user()->id;

        if ($request->has('event_name')) {
            $base->event_name = $request->event_name;
        }
        if ($request->has('event_date')) {
            $base->event_date = $request->event_date;
        }
        if ($request->has('event_time')) {
            $base->event_time = $request->event_time;
        }
        if ($request->has('event_location')) {
            $base->event_location = $request->event_location;
        }
        if ($request->has('event_description')) {
            $base->event_description = $request->event_description;
        }
        if ($request->has('event_image')) {
            $base->event_image = $request->event_image;
            //More settings for image upload
        }


        if ($request->has('website_name')) {
            $base->website_name = $request->website_name;
        }
        if ($request->has('website_url')) {
            $base->website_url = $request->website_url;
        }
        if ($request->has('website_image')) {
            $base->website_image = $request->website_image;
        }
        if ($request->has('website_description')) {
            $base->website_description = $request->website_description;
        }
        if ($request->has('website_username')) {
            $base->website_username = $request->website_username;
        }
        if ($request->has('website_passcode')) {
            $base->website_passcode = $request->website_passcode;
        }
        if ($request->has('website_email')) {
            $base->website_email = $request->website_email;
        }
        if ($request->has('website_cpanel_url')) {
            $base->website_cpanel_url = $request->website_cpanel_url;
        }
        if ($request->has('website_cpanel_username')) {
            $base->website_cpanel_username = $request->website_cpanel_username;
        }
        if ($request->has('website_cpanel_passcode')) {
            $base->website_cpanel_passcode = $request->website_cpanel_passcode;
        }
        if ($request->has('website_cpanel_email')) {
            $base->website_cpanel_email = $request->website_cpanel_email;
        }
        if ($request->has('website_cpanel_hostname')) {
            $base->website_cpanel_hostname = $request->website_cpanel_hostname;
        }
        if ($request->has('website_cpanel_hostpasscode')) {
            $base->website_cpanel_hostpasscode = $request->website_cpanel_hostpasscode;
        }
        if ($request->has('website_cpanel_hostemail')) {
            $base->website_cpanel_hostemail = $request->website_cpanel_hostemail;
        }
        if ($request->has('website_cpanel_hostusername')) {
            $base->website_cpanel_hostusername = $request->website_cpanel_hostusername;
        }


        if ($request->has('map_location')) {
            $base->map_location = $request->map_location;
        }
        if ($request->has('map_description')) {
            $base->map_description = $request->map_description;
        }
        if ($request->has('map_image')) {
            $base->map_image = $request->map_image;
        }


        if ($request->has('social_name')) {
            $base->social_name = $request->social_name;
        }
        if ($request->has('social_url')) {
            $base->social_url = $request->social_url;
        }
        if ($request->has('social_username')) {
            $base->social_username = $request->social_username;
        }
        if ($request->has('social_passcode')) {
            $base->social_passcode = $request->social_passcode;
        }
        if ($request->has('social_email')) {
            $base->social_email = $request->social_email;
        }


        if ($request->has('task_name')) {
            $base->task_name = $request->task_name;
        }
        if ($request->has('task_description')) {
            $base->task_description = $request->task_description;
        }
        if ($request->has('task_image')) {
            $base->task_image = $request->task_image;
        }
        if ($request->has('task_url')) {
            $base->task_url = $request->task_url;
        }

        if ($request->has('password_username')) {
            $base->password_username = $request->password_username;
        }
        if ($request->has('password_passcode')) {
            $base->password_passcode = $request->password_passcode;
        }
        if ($request->has('password_email')) {
            $base->password_email = $request->password_email;
        }
        if ($request->has('password_description')) {
            $base->password_description = $request->password_description;
        }


        if ($request->has('bank_name')) {
            $base->bank_name = $request->bank_name;
        }
        if ($request->has('bank_description')) {
            $base->bank_description = $request->bank_description;
        }
        if ($request->has('bank_acct_name')) {
            $base->bank_acct_name = $request->bank_acct_name;
        }
        if ($request->has('bank_acct_number')) {
            $base->bank_acct_number = $request->bank_acct_number;
        }
        if ($request->has('bank_acct_type')) {
            $base->bank_acct_type = $request->bank_acct_type;
        }
        if ($request->has('bank_acct_pin')) {
            $base->bank_acct_pin = $request->bank_acct_pin;
        }

        if ($request->has('resources_name')) {
            $base->resources_name = $request->resources_name;
        }
        if ($request->has('resources_description')) {
            $base->resources_description = $request->resources_description;
        }

        if ($request->has('report_name')) {
            $base->report_name = $request->report_name;
        }
        if ($request->has('report_description')) {
            $base->report_description = $request->report_description;
        }
        if ($request->has('report_image')) {
            $base->report_image = $request->report_image;
        }
        if ($request->has('report_url')) {
            $base->report_url = $request->report_url;
        }

        //save the base
        $base->save();

        //get the base id
        $base_id = $base->id;
        
        //Inertia render base with base_id
        return Inertia::render('Base/Show', [
            'base' => Base::find($base_id),
        ]);

        //return redirect('/base/' . $base_id);
        //return inertia('Base/Show', compact('base'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $base = Base::find($id);
        $base_id = $base->id;
        //event date in diff human readable format
        $event_date = Carbon::parse($base->event_date)->diffForHumans();
        //event time in diff human readable format
        //$event_time = Carbon::parse($base->event_time)->diffForHumans();
        //dd($event_time);

        //inertia render base with base_id
        return Inertia::render('Base/Show', [
            'base' => Base::with('category')->find($base_id),
            'event_date' => $event_date,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
