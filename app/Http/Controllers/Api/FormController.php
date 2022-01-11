<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactMe;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /**
     * get all data from FORM
     *
     * @return array
     */
    public function index(): array
    {
        return Form::latest()->paginate(10);
    }

    /**
     * Store data from FORM
     *
     * @param Request $request
     * @return Form
     */
    public function store(Request $request): Form
    {
        $data = $request->validate([
            'first_name'  => 'required|string',
            'last_name'   => 'required|string',
            'age'         => 'required|int',
            'city'        => 'required|string',
            'phone'       => 'required|string',
            'email'       => 'required|email',
            'description' => 'string',
            'comment'     => 'string'
        ]);

        Mail::to('akhmedovmirik@gmail.com')->send(new ContactMe($data));

        return Form::create($data);
    }
}
