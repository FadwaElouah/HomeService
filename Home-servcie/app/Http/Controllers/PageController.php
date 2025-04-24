<?php

// app/Http/Controllers/PageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.home', [
            'title' => 'Home',
            'appName' => 'Laravel App',
            'companyName' => 'Your Company'
        ]);
    }

    /**
     * Display the features page
     *
     * @return \Illuminate\View\View
     */
    public function features()
    {
        return view('pages.features', [
            'title' => 'Features',
            'appName' => 'Laravel App',
            'companyName' => 'Your Company'
        ]);
    }

    /**
     * Display the about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about', [
            'title' => 'About Us',
            'appName' => 'Laravel App',
            'companyName' => 'Your Company'
        ]);
    }

    /**
     * Display the contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact', [
            'title' => 'Contact Us',
            'appName' => 'Laravel App',
            'companyName' => 'Your Company'
        ]);
    }

    /**
     * Process contact form submission
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Here you would process the contact form
        // For example: Mail::to('admin@example.com')->send(new ContactFormMail($validated));

        return redirect()->route('contact')->with('status', 'Thank you for your message! We will get back to you soon.');
    }
}
