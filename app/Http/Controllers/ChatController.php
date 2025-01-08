<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use GeminiAPI\Laravel\Facades\Gemini;

class ChatController extends Controller
{
    public function index()
    {
        return view('chatbot');
    }

    public function ask(Request $request)
    {
        // Validasi input
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        try {
            // Ambil data produk dari database
            $products = Product::with('category')->get();

            // Periksa apakah pesan mengacu pada produk tertentu
            $mentionedProduct = $this->getMentionedProduct($request->message, $products);

            if ($mentionedProduct) {
                // Simpan produk dalam session
                session()->put('last_product', $mentionedProduct);
            } else {
                // Ambil produk terakhir yang disebutkan dari session jika ada
                $mentionedProduct = session()->get('last_product');
            }

            // Format data produk untuk konteks
            $productContext = $this->formatProductContext($products);

            // Ambil riwayat percakapan dari session
            $conversationHistory = session()->get('conversation_history', []);
            
            // Format riwayat percakapan
            $conversationContext = $this->formatConversationHistory($conversationHistory);

            // Buat prompt untuk API Gemini
            $fullPrompt = "
                Kamu adalah asisten AI yang membantu pelanggan memilih produk. 
                Gunakan data berikut untuk menjawab pertanyaan:\n\n" .
                $productContext .
                "\n" . $conversationContext .
                "\nPertanyaan pelanggan: '{$request->message}'" .
                ($mentionedProduct ? "\nProduk yang sedang dibahas: {$mentionedProduct->product}" : "");

            // Kirim prompt ke API Gemini
            $generatedText = Gemini::generateText($fullPrompt);

            // Simpan riwayat percakapan
            $this->saveConversation($request->message, $generatedText);

            return response()->json([
                'message' => $request->message,
                'generated_text' => $generatedText,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to generate text: ' . $e->getMessage()
            ], 500);
        }
    }

    private function getMentionedProduct($message, $products)
    {
        foreach ($products as $product) {
            if (stripos($message, $product->product) !== false) {
                return $product;
            }
        }
        return null;
    }

    private function formatProductContext($products)
    {
        $context = "Berikut adalah data produk yang tersedia:\n\n";
        foreach ($products as $product) {
            $context .= "Produk: {$product->product}\n";
            $context .= "Kategori: {$product->category->name}\n";
            $context .= "Warna: {$product->warna}\n";
            $context .= "Deskripsi: {$product->deskripsi}\n";
            $context .= "Harga: Rp " . number_format($product->harga, 0, ',', '.') . "\n";
            $context .= "Stok: {$product->stok}\n\n";
        }
        return $context;
    }

    private function formatConversationHistory($conversationHistory)
    {
        if (empty($conversationHistory)) {
            return "Belum ada percakapan sebelumnya.";
        }

        $formattedHistory = "Riwayat percakapan sebelumnya:\n";
        foreach ($conversationHistory as $chat) {
            $formattedHistory .= "Pelanggan: {$chat['user']}\n";
            $formattedHistory .= "AI: {$chat['bot']}\n";
        }
        return $formattedHistory;
    }

    private function saveConversation($userMessage, $botResponse)
    {
        $conversationHistory = session()->get('conversation_history', []);
        $conversationHistory[] = [
            'user' => $userMessage,
            'bot' => $botResponse,
        ];
        session()->put('conversation_history', $conversationHistory);
    }
}
