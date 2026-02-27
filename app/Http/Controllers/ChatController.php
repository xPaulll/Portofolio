<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    /**
     * Ambil daftar pesan (JSON) untuk live chat (frontend).
     */
    public function index()
    {
        $messages = DB::table('messages')
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }

    /**
     * Simpan pesan baru dari kolom chat.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => ['required', 'string', 'max:1000'],
            'name'    => ['nullable', 'string', 'max:100'],
        ]);

        $id = DB::table('messages')->insertGetId([
            'name'       => $validated['name'] ?? null,
            'content'    => $validated['content'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $message = DB::table('messages')->where('id', $id)->first();

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Message sent successfully',
                'data'    => $message,
            ], 201);
        }

        return redirect()
            ->route('chat.admin')
            ->with('status', 'Pesan terkirim.');
    }

    /**
     * Halaman Obrolan (admin) - lihat semua pesan.
     */
    public function admin()
    {
        $messages = DB::table('messages')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('chat-admin', [
            'messages' => $messages,
        ]);
    }

    /**
     * Hapus satu pesan dari halaman Obrolan.
     */
    public function destroy(int $id)
    {
        DB::table('messages')->where('id', $id)->delete();

        return redirect()
            ->route('chat.admin')
            ->with('status', 'Pesan berhasil dihapus.');
    }
}