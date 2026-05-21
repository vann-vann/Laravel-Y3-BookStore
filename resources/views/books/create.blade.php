<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>បន្ថែមសៀវភៅថ្មី</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow border-0">
            <div class="card-header bg-success text-white py-3">
                <h4 class="mb-0 fw-bold">បន្ថែមសៀវភៅថ្មី</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">ចំណងជើងសៀវភៅ (Title)</label>
                        <input type="text" name="title" class="form-control" required placeholder="បញ្ចូលចំណងជើងសៀវភៅ...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">ជ្រើសរើសអ្នកនិពន្ធ (Author)</label>
                        <select name="author_id" class="form-select" required>
                            <option value="">-- ជ្រើសរើសអ្នកនិពន្ធ --</option>
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">ជ្រើសរើសប្រភេទសៀវភៅ (Category)</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">-- ជ្រើសរើសប្រភេទ --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('books.ui') }}" class="btn btn-secondary">ត្រឡប់ក្រោយ</a>
                        <button type="submit" class="btn btn-success px-4">រក្សាទុក</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>