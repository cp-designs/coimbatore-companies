<?php

namespace App\Controllers\Theme; // Use the correct namespace

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()    {
        // Data to pass to the views
        $data = [
            'title' => 'Coimbatore Companies :: Business Directory',            
            'description' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',
            'keywords' => 'Coimbatore companies, Coimbatore business directory, Coimbatore businesses, Coimbatore companies list',
            'pageType' => 'home',
            'pageId' => 'home',
            'pageClass' => 'home',
            'pageHeading' => 'Welcome to Coimbatore Companies',
            'pageSubHeading' => 'Find Coimbatore businesses, companies, and service providers',
            'pageImage' => 'logo.png',
            'pageImageAlt' => 'Coimbatore Companies Logo',
            'pageContent' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',            

        ];
        
          // Load the header, dashboard, and footer views with data
        return view('theme/header',$data).view('theme/home', $data).view('theme/footer', $data);
    }


    public function aboutus()    {
        // Data to pass to the views
        $data = [
            'title' => 'About Us :: Business Directory',            
            'description' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',
            'keywords' => 'Coimbatore companies, Coimbatore business directory, Coimbatore businesses, Coimbatore companies list',
            'pageType' => 'home',
            'pageId' => 'home',
            'pageClass' => 'home',
            'pageHeading' => 'Welcome to Coimbatore Companies',
            'pageSubHeading' => 'Find Coimbatore businesses, companies, and service providers',
            'pageImage' => 'logo.png',
            'pageImageAlt' => 'Coimbatore Companies Logo',
            'pageContent' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',            

        ];
        
          // Load the header, dashboard, and footer views with data
        return view('theme/header',$data).view('theme/aboutus', $data).view('theme/footer', $data);
    }
    public function add_listing()    {
        // Data to pass to the views
        $data = [
            'title' => 'Dashboard Add Listing :: Business Directory',           
            'description' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',
            'keywords' => 'Coimbatore companies, Coimbatore business directory, Coimbatore businesses, Coimbatore companies list',
            'pageType' => 'home',
            'pageId' => 'home',
            'pageClass' => 'home',
            'pageHeading' => 'Welcome to Coimbatore Companies',
            'pageSubHeading' => 'Find Coimbatore businesses, companies, and service providers',
            'pageImage' => 'logo.png',
            'pageImageAlt' => 'Coimbatore Companies Logo',
            'pageContent' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',            

        ];
        
          // Load the header, dashboard, and footer views with data
        return view('theme/header',$data).view('theme/dashboard-add-listings', $data).view('theme/footer', $data);
    }
    public function business_list()    {
        // Data to pass to the views
        $data = [
            'title' => 'Dashboard Add Listing :: Business Directory',           
            'description' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',
            'keywords' => 'Coimbatore companies, Coimbatore business directory, Coimbatore businesses, Coimbatore companies list',
            'pageType' => 'home',
            'pageId' => 'home',
            'pageClass' => 'home',
            'pageHeading' => 'Welcome to Coimbatore Companies',
            'pageSubHeading' => 'Find Coimbatore businesses, companies, and service providers',
            'pageImage' => 'logo.png',
            'pageImageAlt' => 'Coimbatore Companies Logo',
            'pageContent' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',            

        ];
        
          // Load the header, dashboard, and footer views with data
        return view('theme/header',$data).view('theme/business-list', $data).view('theme/footer', $data);
    }
    public function dashboard()    {
        // Data to pass to the views
        $data = [
            'title' => 'Dashboard Add Listing :: Business Directory',           
            'description' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',
            'keywords' => 'Coimbatore companies, Coimbatore business directory, Coimbatore businesses, Coimbatore companies list',
            'pageType' => 'home',
            'pageId' => 'home',
            'pageClass' => 'home',
            'pageHeading' => 'Welcome to Coimbatore Companies',
            'pageSubHeading' => 'Find Coimbatore businesses, companies, and service providers',
            'pageImage' => 'logo.png',
            'pageImageAlt' => 'Coimbatore Companies Logo',
            'pageContent' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',            

        ];
        
          // Load the header, dashboard, and footer views with data
        return view('theme/header',$data).view('theme/dashboard', $data).view('theme/footer', $data);
    }
    public function my_listings()    {
        // Data to pass to the views
        $data = [
            'title' => 'Dashboard Add Listing :: Business Directory',           
            'description' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',
            'keywords' => 'Coimbatore companies, Coimbatore business directory, Coimbatore businesses, Coimbatore companies list',
            'pageType' => 'home',
            'pageId' => 'home',
            'pageClass' => 'home',
            'pageHeading' => 'Welcome to Coimbatore Companies',
            'pageSubHeading' => 'Find Coimbatore businesses, companies, and service providers',
            'pageImage' => 'logo.png',
            'pageImageAlt' => 'Coimbatore Companies Logo',
            'pageContent' => 'Coimbatore Companies is a business directory for Coimbatore. Find Coimbatore businesses, companies, and service providers.',            

        ];
        
          // Load the header, dashboard, and footer views with data
        return view('theme/header',$data).view('theme/dashboard-my-listings', $data).view('theme/footer', $data);
    }
    
}