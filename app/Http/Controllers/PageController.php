<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Homepage
	public function home(){
		return view('home.index');
	}

	//  Contact Us
	public function contact(){
		return view('contact.contact-us');
	}

	// About Us
	public function about(){
		return view('about.about');
	}

	// Our Services
	public function services(){
		return view('services.services');
	}

	// Our services – E-commerce
	public function commerce(){
		return view('commerce.commerce');
	}

	// Our services - E-commerce - Own Site
	public function ownsite(){
		return view('commerce.own-site');
	}

	// Our services - E-commerce - Marketplace
	public function marketplace(){
		return view('commerce.marketplace');
	}

	// Our services - E-commerce - Cross boarder
	public function crossborder(){
		return view('commerce.cross-border');
	}

	// Our services - Payment solution
	public function payment(){
		return view('services.payment');
	}

	// Our Insights
	public function insights(){
		return view('insights.insights');
	}

	// Our Insights Uniqueness of China ecommerce 
	public function ChinaEcommerce(){
		return view('insights.uniqueness-of-China-e-commerce');
	}

	// Our Insights cross-border e-commerce
	public function crossBorderEcommerce(){
		return view('insights.cross-border-e-commerce');
	}

	// Our Insights growth-of-mobile-payment-solutions
	public function growthOfMobilePaymentSolutions(){
		return view('insights.growth-of-mobile-payment-solutions');
	}

	// Our Insights social media
	public function socialMedia(){
		return view('insights.social-media');
	}

	// Our Insights social media
	public function trademark(){
		return view('insights.trademark-in-China');
	}

	// Our Insights Website optimization
	public function websiteOptimization(){
		return view('insights.website-optimization');
	}

	// Our Insights WeChat Mini Program
	public function wechatMiniProgram(){
		return view('insights.wechat-mini-program');
	}

	// Our Insights WeChat Mini Program
	public function biggestECommercePlatformsInChina(){
		return view('insights.the-biggest-eCommerce-platforms-in-China');
	}

	// Our Insights singles Day
	public function singlesDay(){
		return view('insights.new-singles-day-record-set-by-alibaba');
	}

	// Our Insights social media
	public function liveStreaming(){
		return view('insights.live-streaming-a-natural-part-of-your-eCommerce-strategy');
	}
}
