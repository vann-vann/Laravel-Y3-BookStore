<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>បញ្ជីសៀវភៅ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">ប្រព័ន្ធគ្រប់គ្រងសៀវភៅ</h2>
            <a href="{{ route('books.create') }}" class="btn btn-success">+ បន្ថែមសៀវភៅថ្មី</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow border-0">
            <div class="card-body p-4">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>ចំណងជើងសៀវភៅ</th>
                            <th>អ្នកនិពន្ធ</th>
                            <th>ប្រភេទសៀវភៅ</th>
                            <th>ការពិពណ៌នា</th>
                            <th class="text-center">សកម្មភាព</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td class="fw-bold text-secondary">{{ $book->title }}</td>
                            <td><span class="badge bg-info text-dark">{{ $book->author->name ?? 'មិនមានទិន្នន័យ' }}</span></td>
                            <td><span class="badge bg-secondary">{{ $book->category->name ?? 'មិនមានទិន្នន័យ' }}</span></td>
                            <td class="text-muted small">{{ $book->bookDetail->description ?? 'មិនមានការពិពណ៌នា' }}</td>
                            <td class="text-center">
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm me-2">កែប្រែ</a>

                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('តើអ្នកពិតជាចង់លុបមែនទេ?')">លុប</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>