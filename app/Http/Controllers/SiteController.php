<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;
use Config;

class SiteController extends Controller
{
    protected $dartType = 1;

    public function __construct(Request $request, Redirector $redirect)
    {
    	$this->middleware(function ($request, $next) {
    		if($request->lang) {
    			Session::put('LANG', $request->lang);
    		} else {
    			if(!Session::has('LANG')) {
    				Session::put('LANG', strtolower(strtok(strip_tags($request->server('HTTP_ACCEPT_LANGUAGE')), ',')));
    			}
    		}
    		return $next($request);
    	});
    }


	public function index(Request $request)
    {
    	app()->setLocale(Session::get('LANG'));
    	$texts = json_encode(trans('text'));
    	return view('app', compact('texts'));
    }
}