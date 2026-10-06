<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // READ (daftar) + BONUS: pencarian & filter kategori
    public function index(Request $request)
    {
        $books = Book::with('category')
            ->when($request->search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                      ->orWhere('author', 'like', "%{$search}%");
                });
            })
            ->when($request->category_id, fn ($query, $id) => $query->where('category_id', $id))
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('books.index', [
            'books'      => $books,
            'categories' => Category::orderBy('name')->get(),
        ]);
    }

    // CREATE (form)
    public function create()
    {
        return view('books.create', ['categories' => Category::orderBy('name')->get()]);
    }

    // CREATE (simpan)
    public function store(Request $request)
    {
        Book::create($this->validated($request));

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    // DETAIL
    public function show(Book $book)
    {
        $book->load('category');
        return view('books.show', compact('book'));
    }

    // UPDATE (form)
    public function edit(Book $book)
    {
        return view('books.edit', [
            'book'       => $book,
            'categories' => Category::orderBy('name')->get(),
        ]);
    }

    // UPDATE (simpan)
    public function update(Request $request, Book $book)
    {
        $book->update($this->validated($request));

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    // DELETE
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'title'       => ['required', 'string', 'max:255'],
            'author'      => ['required', 'string', 'max:255'],
            'publisher'   => ['required', 'string', 'max:255'],
            'year'        => ['required', 'integer', 'min:1900', 'max:' . date('Y')],
            'stock'       => ['required', 'integer', 'min:0'],
        ]);
    }
}
