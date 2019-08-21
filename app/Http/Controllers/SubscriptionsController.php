<?php

// this is  to show laravels transaction function, it rollbacks on exception f.e if user cannot be created or payment isnt done properly


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use DB;
use App\User;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    //

    public function store(Bilalble $billable){

    	DB::transaction(function() use ($billable){

    		$customer=$bilalble->createCustomer('token');

    		$user=User::register('yadayada');
    	});

    }
}
