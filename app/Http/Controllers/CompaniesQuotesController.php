<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\CompanyQuote;
use App\Models\CompanyQuoteDetail;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CompaniesQuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = CompanyQuote::with('companies','users')->get();
        return view('companies.quotes.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Companies::all();
        return view('companies.quotes.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $company_quote = CompanyQuote::create($request->all());
        $company_quote_details = new CompanyQuoteDetail();
        foreach ($request->description_details as $key => $value) {
             $arrayData = array(
                'description' => $request->description_details[$key],
                'quantity' => $request->quantity[$key],
                'unit_price' => $request->unit_price[$key],
                'amount' => $request->amount_details[$key],
                'quote_company_id' => $company_quote->id,
              );
              $cq_details = CompanyQuoteDetail::insert($arrayData);
        }
        return redirect()->route('quotes_company.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function pdf(string $id)
    {
        $data = CompanyQuote::find($id)->toArray();
    
        // return $company;
        // return view('pdf.quotes_company');
        // $pdf = Pdf::loadView('pdf.quotes_company');
        return PDF::loadView('pdf.quotes_company', $data)
        ->stream('archivo.pdf');
     // return $pdf->download('invoice.pdf');
    //     return pdf('pdf.quotes_company', [
    //         'invoiceNumber' => '1234',
    //         'customerName' => 'Grumpy Cat',
    //     ]);
     }

}
