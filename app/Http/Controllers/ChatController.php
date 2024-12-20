<?php

namespace App\Http\Controllers;

use App\Models\product;
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
            $products = product::with('category')->get();
            
            // Format data produk untuk konteks
            $productContext = "Berikut adalah data produk yang tersedia:\n\n";
            foreach ($products as $product) {
                $productContext .= "Produk: {$product->product}\n";
                $productContext .= "Kategori: {$product->category->name}\n";
                $productContext .= "Ukuran: {$product->size}\n";
                $productContext .= "Warna: {$product->warna}\n";
                $productContext .= "Harga: Rp " . number_format($product->harga, 0, ',', '.') . "\n";
                $productContext .= "Stok: {$product->stok}\n";
                $productContext .= "Deskripsi: {$product->deskripsi}\n\n";
            }

            // Memeriksa apakah pesan berisi produk dan menyimpan produk yang disebutkan dalam session
            $mentionedProduct = $this->getMentionedProduct($request->message, $products);
            if ($mentionedProduct) {
                // Menyimpan produk yang disebutkan dalam session
                $discussedProducts = session()->get('discussed_products', []);
                $discussedProducts[] = $mentionedProduct; // Menyimpan produk yang disebutkan
                session()->put('discussed_products', $discussedProducts);
            }

            // Buat prompt yang lengkap
            $fullPrompt = "
                            Kamu adalah asisten AI yang membantu pelanggan memilih produk pakaian yang sesuai dengan kebutuhan mereka. Berikut adalah cara kamu menjawab pertanyaan berdasarkan kategori yang relevan. Jawabanmu harus spesifik untuk pertanyaan yang diajukan dan hanya memberikan rekomendasi yang relevan.

                            1. **Pahami konteks pertanyaan terlebih dahulu**: Identifikasi kategori utama dari pertanyaan. Kategori tersebut bisa berupa:
                            - Musim (misalnya: musim panas, musim dingin)
                            - Aktivitas (misalnya: olahraga, pesta formal)
                            - Jenis pakaian (misalnya: jaket, celana)
                            - Acara atau kebutuhan khusus (misalnya: acara formal, kasual)
                            - Harga (misalnya: 100.000, 100 ribu)

                            2. **Berdasarkan kategori, pilih produk yang relevan**: Hanya tampilkan produk yang sesuai dengan kategori yang diinginkan. Jangan memberikan produk yang tidak relevan dengan konteks.

                            3. **Format jawaban**: Berikan jawaban dalam format **list** yang jelas dan terstruktur. Gunakan format poin-poin agar mudah dibaca, dan pastikan untuk mencetak **bold** pada nama produk yang disarankan.

                            **Instruksi Tambahan:**
                            - Hanya jawab dengan produk yang relevan berdasarkan kategori pertanyaan.
                            - Jangan mencampurkan informasi yang tidak relevan. Jika pertanyaan berkaitan dengan musim panas, jawab hanya dengan produk untuk cuaca panas, bukan produk untuk cuaca dingin.
                            - Gunakan **bold** untuk menyoroti nama produk yang disarankan.
                            - Buat daftar produk yang disarankan agar terlihat rapi, dengan menjelaskan produk secara singkat.
                            - Jangan menyertakan produk yang tidak cocok dengan konteks pertanyaan.
                            " .
                            "Gunakan data berikut untuk menjawab pertanyaan:\n\n" .
                             $productContext . "\n" .
                            "Pertanyaan pelanggan: '{$request->message}'. " ;
                            


            // Kirim ke Gemini API dengan konteks produk
            $generatedText = Gemini::generateText($fullPrompt);

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

    // Fungsi untuk memeriksa apakah pesan mengandung nama produk yang telah disebutkan
    public function getMentionedProduct($message, $products)
    {
        foreach ($products as $product) {
            // Jika nama produk disebutkan dalam pesan, kembalikan nama produk
            if (stripos($message, $product->product) !== false) {
                return $product->product;
            }
        }
        return null;
    }

    public function getPrice(Request $request)
    {
        // Ambil produk yang dibahas sebelumnya dari session
        $discussedProducts = session()->get('discussed_products', []);

        if (empty($discussedProducts)) {
            return response()->json([
                'error' => 'Tidak ada produk yang dibahas sebelumnya. Harap sebutkan produk terlebih dahulu.'
            ], 400);
        }

        // Mencocokkan produk yang disebutkan dalam pertanyaan dengan produk yang disimpan dalam session
        $productName = $request->message;
        $matchedProduct = null;

        foreach ($discussedProducts as $discussedProduct) {
            if (stripos($productName, $discussedProduct) !== false) {
                $matchedProduct = $discussedProduct;
                break;
            }
        }

        if ($matchedProduct) {
            // Cari harga produk yang cocok
            $product = Product::where('product', $matchedProduct)->first();

            if ($product) {
                return response()->json([
                    'product' => $product->product,
                    'price' => 'Rp ' . number_format($product->harga, 0, ',', '.'),
                ]);
            } else {
                return response()->json([
                    'error' => 'Produk tidak ditemukan.',
                ], 404);
            }
        } else {
            return response()->json([
                'error' => 'Produk tidak disebutkan dalam percakapan sebelumnya.',
            ], 400);
        }
    }


}
