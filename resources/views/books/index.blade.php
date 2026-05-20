<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Catalogue</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-12 px-4 sm:px-6 lg:px-8">

    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-extrabold text-gray-900 text-center mb-8 tracking-tight">
            📚 Bookstore Digital Catalogue
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($books as $book)
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 flex flex-col justify-between p-6 transition duration-300 hover:shadow-xl">
                    
                    <div>
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-semibold bg-indigo-100 text-indigo-800 mb-3">
                            {{ $book->category->name ?? 'Uncategorized' }}
                        </span>

                        <h2 class="text-xl font-bold text-gray-900 mb-1 tracking-tight">
                            {{ $book->title }}
                        </h2>

                        <p class="text-sm font-medium text-gray-500 mb-4">
                            by <span class="text-gray-800 font-semibold">{{ $book->author->name ?? 'Unknown Author' }}</span>
                        </p>

                        <hr class="border-gray-100 my-3">

                        <p class="text-sm text-gray-600 italic line-clamp-4">
                            "{{ $book->bookDetail->description ?? 'No description available for this edition.' }}"
                        </p>
                    </div>

                    <div class="mt-4 pt-3 border-t border-gray-50 text-right">
                        <span class="text-xs text-gray-400 font-mono">ID: #{{ $book->id }}</span>
                    </div>

                </div>
            @endforeach
        </div>
        
    </div>

</body>
</html>