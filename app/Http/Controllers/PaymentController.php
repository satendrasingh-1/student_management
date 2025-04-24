<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $payments = Payment::all();
        // $payments = Payment::with('enrollment')->get();
        // return view ('payments.index')->with('payments', $payments);
        // public function index()
        // {
            $payments = Payment::with('enrollment')->get();  // Ensure this loads the payments with enrollments.
            return view('payments.index', compact('payments'));
        // }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $enrollments=Enrollment::pluck('enroll_no','id');
        return view('payments.create',compact('enrollments'));
        // $enrollments = Enrollment::pluck('enroll_no', 'id');
        // return view('payments.create', compact('enrollments'));
        
    }

    /**
     * Store a newly created resource in storage.
     */

    //  public function store(Request $request)
    //     {
    //         // Validate the incoming request
    //         $request->validate([
    //             'enrollment_id' => 'required|exists:enrollments,id',  // Ensure valid enrollment ID
    //             'paid_date' => 'required|date',
    //             'amount' => 'required|numeric',
    //             'join_date' => 'required|date',  // Ensure join_date is provided
    //         ]);

    //         // Get the form data
    //         $input = $request->all();

    //         // If 'join_date' is not provided, set it to the current date
    //         if (!isset($input['join_date'])) {
    //             $input['join_date'] = now()->toDateString(); // Set today's date
    //         }

    //         // Create a new payment
    //         Payment::create($input);

    //         // Redirect with a success message
    //         return redirect('payments')->with('flash_message', 'Payment Added!');
    //     }


    //  public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'enrollment_id' => 'required|exists:enrollments,id',
    //         'paid_date' => 'required|date',
    //         'amount' => 'required|numeric',
    //     ]);

    //     Payment::create($validated);

    //     return redirect('payments')->with('flash_message', 'Payment Added!');
    // }

    public function store(Request $request)
    {
        //
        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message', 'payment Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $payments = Payment::find($id);
        return view('payments.show')->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
        $payments = Payment::find($id);
        $enrollments=Enrollment::pluck('enroll_no','id');
        return view('payments.edit',compact('payments','enrollments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $payments = Payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'payment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'batch deleted!');
    }
}
