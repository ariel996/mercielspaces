<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    public function homepage(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $banners = Banner::query()->where('active', '!=', 0)->get();
        $partners = Partner::query()->get();
        $faqs = Faq::query()->get();
        $features = Feature::query()->get();
        return view('welcome', compact('banners',  'partners', 'faqs', 'features'));
    }

    public function about()
    {
        $partners = Partner::query()->get();
        $teams = Team::query()->get();
        $about = About::query()->first();
        return view('about', compact('partners', 'teams','about'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function send_message(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ]);
        if($validate->fails()){
            Toastr::error('message', 'Une erreur est survenue. Veuillez reessayer');
            return redirect()->back()->withErrors($validate);
        } else {
            Message::query()->create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'telephone' => $request->input('telephone'),
                'content' => $request->input('comments'),
            ]);
            Toastr::success('message', 'Message envoye avec succes !!!');
            return back();
        }
    }
}
