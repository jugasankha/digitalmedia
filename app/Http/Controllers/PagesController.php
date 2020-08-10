<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {
        $data = array(
            'title' => 'App Alley | Home'
        );
        return view('pages.index')->with($data);
    }

    public function services() {
        $data = array(
            'title' => 'App Alley | Services'
        );
        return view('pages.services')->with($data);
    }

    public function about() {
        $data = array(
            'title' => 'App Alley | About'
        );
        return view('pages.about')->with($data);
    }

    public function team() {
        $data = array(
            'title' => 'App Alley | Team'
        );
        return view('pages.team')->with($data);
    }

    public function contact() {
        $data = array(
            'title' => 'App Alley | Contact'
        );
        return view('pages.contact')->with($data);
    }

    public function privacy() {
        $data = array(
            'title' => 'App Alley | Privacy'
        );
        return view('pages.privacy')->with($data);
    }

    //service pages
    public function service($service){
        $data = array(
            'display'=> array(
                'service_title'=> 'DISPLAY | MAINSTREAM',
                'content'=> '<p>Our campaigns inspire a trigger of response by keeping our displays informative and interactive.
                With our equilibrium of creative experts and domain strategy specialists, our creative suite of interactive Video, Rich Media and Native meets intelligent targeting. </p><p> Our In-house Technology Platform & Partner integrations with Exchanges & DSPs allows us to target Quality Audience with Worldwide (QAWR) to achieve the right Branding objectives.</p>'
            ),
            'social'=> array(
                'service_title'=> 'SOCIAL',
                'content'=> '<p>Our focus is not limited to network and exchanges, we walk a mile further into data consolidation and optimization with social media platforms. With the growing use of social, the audience size is humongous.</p>
                <p>The use-case therefore becomes implied. With our subject matter experts and actionable insights from our brand researchers, we are enabled to optimize the social platforms and monetize returns. We support objectives like “likes, installs, shares, engagements” and use them to drive Growing ROI on Ad Spends (GRAS) for our campaigns.</p>'
            ),
            'messaging'=> array(
                'service_title'=> 'EMAIL / SMS / VOICE / SHORT CODES / CMS',
                'content'=> '<p>With our team of specialists & technology, we have integrated SMS, emails, Voices, short codes with various ERP systems. Not only can we automate alerts on transactions, we can also help you set reminders and engaging tools for your customers. </p><p>Ours specialists work hard to provide you customized reports with insights of your campaigns. </p><p>We offer dashboard access to each and every client with admin and multiple user login. We also, through our integrated solution over sms email voices short codes and virtual mobile numbers provide our clients to run various marketing and promotional /contests/etc. campaigns across India seamlessly.</p>'
            ),
            'mobile'=> array(
                'service_title'=> 'MOBILE SUBSCRIPTIONS',
                'content'=> '<p>With an intent to increase the average revenue per telecom user beyond the calls and messages, Mobile Subscriptions or Value Added Services were introduced. With a focus on the end customer, aims to optimize customer experience with the use of right communication, context and rich creative experience. </p><p> We offer customer demographic specific packages to improve the utility and transactional value on your Mobile Subscriptions, be it CPA, CPS, CPAS, CPL & others.</p> <p>With our thousands of existing Mobile Subscription campaigns, we have been successful in decreasing the cost of User Acquisition & Growing ROI on Ad Spends (GRAS).</p>'
            )
            );
        $data = $data[$service];
        $data['title'] = "App Alley | ".$data['service_title'];
        $data['img'] = $service;
        return view('pages.service')->with($data);
    }
}
