<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>កែប្រែទិន្នន័យសៀវភៅ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow border-0">
            <div class="card-header bg-warning text-dark py-3">
                <h4 class="mb-0 fw-bold">កែប្រែទិន្នន័យសៀវភៅ</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">ចំណងជើងសៀវភៅ (Title)</label>
                        <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">ជ្រើសរើសអ្នកនិពន្ធ (Author)</label>
                        <select name="author_id" class="form-select" required>
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                                    {{ $author->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">ជ្រើសរើសប្រភេទសៀវភៅ (Category)</label>
                        <select name="category_id" class="form-select" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('books.ui') }}" class="btn btn-secondary">បោះបង់</a>
                        <button type="submit" class="btn btn-warning px-4">ធ្វើបច្ចុប្បន្នភាព</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>