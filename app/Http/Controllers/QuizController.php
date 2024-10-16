<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Import model Post
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    // Method untuk menangani form submission
    public function postForm(Request $request)
    {
        // Mendefinisikan aturan validasi
        $validator = Validator::make($request->all(), [
            'username'        => 'required|string|max:255',
            'result'          => 'required|string',
            'interest_major'  => 'required|string|max:255',
            'grade'           => 'required|string|max:255',
            'school'          => 'required|string|max:255',
            'email_address'   => 'required|email|max:255',
            'phone_number'    => 'required|string|max:15',
            'date_time'       => 'nullable|date',
        ]);

        // Memeriksa jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Membuat post
        $post = Post::create([
            'username'        => $request->username,
            'result'          => $request->result,
            'interest_major'  => $request->interest_major,
            'grade'           => $request->grade,
            'school'          => $request->school,
            'email_address'   => $request->email_address,
            'phone_number'    => $request->phone_number,
            'date_time'       => $request->date_time,
        ]);

        // Mengembalikan respon atau redirect ke halaman lain
        return view('result')->with('success', 'Data berhasil disimpan!')->with('data', $post);
    }
}
