<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InvoiceController extends Controller
{
    public function generate_pdf($id)
    {        
        // $pendingOrder = Order::where('id', $id)->where('status', 0)->first();
        // if ($pendingOrder) {
        //     return redirect()->back()->with('pendingMsg' , 'This Order is still pending, Not Confirmed Yet...!!') ;
        // } 
        
        $orders = Order::where('id', $id)->where('status', 1)->get();
        // if ($orders->isEmpty()) {
        //     return redirect()->back()->with('errorMsg' , 'No confirmed orders found for this ID');
        // }

        // $pdf = Pdf::loadView('frontend.invoice', compact('orders'));
        // return $pdf->stream('invoice');
        return Inertia::render('Invoice', compact('orders')) ;
    }


    
}

