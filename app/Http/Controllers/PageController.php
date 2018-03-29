<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\People;
use App\PeopleAll;
use App\Portfolio;
use App\PortfolioAll;
use App\Portfolio1;
use App\Service;
use App\SocialPeople;
//use App\SocialPeopleAll;
use App\Logo;
use App\Socialy;
use App\SocialAll;



use DB;
use App\Http\Requests;

class PageController extends Controller
{
    //
    public function execute($alias){
    	if(!$alias){
    		abort(404);
    	}
    	if(view()->exists('site.page1')){
    		$page = Page::where('alias',strip_tags($alias))->first();

    	$pages = Page::all();                   
        $portfolios = Portfolio::all();
        $portfolioAlls = PortfolioAll::all();
        $services = Service::where('id','<',20)->get();
        $peopleAlls = PeopleAll::all();
        $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
        $socialAlls = SocialAll::take(24)->get();
        $logos = Logo::take(1)->get();
        
    		$data = [
    			'title' => $page->name,
    			'page' => $page,
                'services' => $services,
            'portfolioAlls' => $portfolioAlls,
            'portfolios' => $portfolios,
            'peopleAlls' => $peopleAlls,
            'tagMores'=> $tagMores,
            'socialAlls' => $socialAlls,
            //'socialPeopleAlls' => $socialPeopleAlls,
            'pages' => $pages,
            'logos'=> $logos,

    		];
    		return  view('site.page1', $data);
    	}else{
    		abort(404);
    	
    	}

    }
    //////
    public function execute2($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page2')){
            $page = Page::where('alias2',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page2', $data);
        }else{
            abort(404);

        }

    }
    public function execute3($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page3')){
            $page = Page::where('alias3',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page3', $data);
        }else{
            abort(404);

        }

    }
    public function execute4($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page4')){
            $page = Page::where('alias4',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page4', $data);
        }else{
            abort(404);

        }

    }
    public function execute5($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page5')){
            $page = Page::where('alias5',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page5', $data);
        }else{
            abort(404);

        }

    }
    public function execute6($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page6')){
            $page = Page::where('alias6',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page6', $data);
        }else{
            abort(404);

        }

    }
    public function execute7($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page7')){
            $page = Page::where('alias7',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page7', $data);
        }else{
            abort(404);

        }

    }
    public function execute8($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page8')){
            $page = Page::where('alias8',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page8', $data);
        }else{
            abort(404);

        }

    }
    public function execute9($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page9')){
            $page = Page::where('alias9',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page9', $data);
        }else{
            abort(404);

        }

    }
    public function execute10($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page10')){
            $page = Page::where('alias10',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page10', $data);
        }else{
            abort(404);

        }

    }
    public function execute11($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page11')){
            $page = Page::where('alias11',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page11', $data);
        }else{
            abort(404);

        }

    }
    public function execute12($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page12')){
            $page = Page::where('alias12',strip_tags($alias))->first();

            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();

            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.page12', $data);
        }else{
            abort(404);

        }

    }
    /////////////////////////////

     public function executePortfolio($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio')){
            $page = Page::where('alias',strip_tags($alias))->first();
        $pages = Page::all();                   
        $portfolios = Portfolio::all();
        $portfolioAlls = PortfolioAll::all();
        $services = Service::where('id','<',20)->get();
        $peopleAlls = PeopleAll::all();
        $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
        $socialAlls = SocialAll::take(24)->get();
        $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
            'portfolioAlls' => $portfolioAlls,
            'portfolios' => $portfolios,
            'peopleAlls' => $peopleAlls,
            'tagMores'=> $tagMores,
            'socialAlls' => $socialAlls,
            //'socialPeopleAlls' => $socialPeopleAlls,
            'pages' => $pages,
            'logos'=> $logos,

            ];
            return  view('site.portfolio', $data);
        }else{
            abort(404);
        
        }

    }

    public function executePortfolio2($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio2')){
            $page = Page::where('alias2',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio2', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio3($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio3')){
            $page = Page::where('alias3',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio3', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio4($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio4')){
            $page = Page::where('alias4',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio4', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio5($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio5')){
            $page = Page::where('alias5',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio5', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio6($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio6')){
            $page = Page::where('alias6',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio6', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio7($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio7')){
            $page = Page::where('alias7',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio7', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio8($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio8')){
            $page = Page::where('alias8',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio8', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio9($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio9')){
            $page = Page::where('alias9',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio9', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio10($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio10')){
            $page = Page::where('alias10',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio10', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio11($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio11')){
            $page = Page::where('alias11',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio11', $data);
        }else{
            abort(404);

        }

    }
    public function executePortfolio12($alias){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.portfolio12')){
            $page = Page::where('alias12',strip_tags($alias))->first();
            $pages = Page::all();
            $portfolios = Portfolio::all();
            $portfolioAlls = PortfolioAll::all();
            $services = Service::where('id','<',20)->get();
            $peopleAlls = PeopleAll::all();
            $tagMores = DB::table('portfolio_alls')->distinct()->pluck('filter');
            $socialAlls = SocialAll::take(24)->get();
            $logos = Logo::take(1)->get();
            $data = [
                'title' => $page->name,
                'page' => $page,
                'services' => $services,
                'portfolioAlls' => $portfolioAlls,
                'portfolios' => $portfolios,
                'peopleAlls' => $peopleAlls,
                'tagMores'=> $tagMores,
                'socialAlls' => $socialAlls,
                //'socialPeopleAlls' => $socialPeopleAlls,
                'pages' => $pages,
                'logos'=> $logos,

            ];
            return  view('site.portfolio12', $data);
        }else{
            abort(404);

        }

    }
}
