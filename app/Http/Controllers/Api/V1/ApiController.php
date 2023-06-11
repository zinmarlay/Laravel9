<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ApiController extends Controller
{
    public function index()
    {
        //return ContactForm::all();

        /* Elequent API Resoruce */
        return ContactResource::collection(Task::all());
    }


    public function show(ContactForm $id)
    {
        return ContactResource::make($id);
       
    }
}
