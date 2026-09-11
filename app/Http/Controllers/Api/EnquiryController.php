<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'contact_info' => ['required', 'string', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'service_type' => ['nullable', 'string', 'max:255'],
            'quantity' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string'],
        ]);

        $enquiry = Enquiry::create($data);

        return response()->json([
            'message' => 'Enquiry submitted successfully.',
            'enquiry' => $enquiry,
        ], 201);
    }
}