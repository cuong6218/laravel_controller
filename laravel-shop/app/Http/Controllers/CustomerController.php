<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(){
        $customers = [
            '0' => [
                'id'  => 1,
                'name'=> 'customer1',
                'birth' => '1998-09-01',
                'email' => 'customer1@gmail.com'
            ],

            '1' => [
                'id'  => 2,
                'name'=> 'customer2',
                'birth' => '1998-09-01',
                'email' => 'customer2@gmail.com'
            ],

            '2' => [
                'id'  => 3,
                'name'=> 'customer3',
                'birth' => '1998-09-01',
                'email' => 'customer3@gmail.com'
            ]
        ];
        return view('customers.list', compact('customers'));
    }
}
