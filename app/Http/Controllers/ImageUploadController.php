<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ImageUploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function storeFile(Request $request)
    {
       $data = "File ".$request->file('file')->getClientOriginalName()." uploaded successfully. ";
        $request->file('file')->store('store-file');
        session()->flash('message', $data);
        return redirect('/');
    }
}
