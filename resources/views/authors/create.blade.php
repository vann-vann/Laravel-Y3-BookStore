<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>បន្ថែមអ្នកនិពន្ធថ្មី - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; overflow-x: hidden; }
        .sidebar { min-width: 250px; max-width: 250px; min-height: 100vh; }
        .sidebar .nav-link { color: rgba(255, 255, 255, 0.75); padding: 0.8rem 1rem; margin: 0.2rem 0.5rem; border-radius: 0.375rem; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { color: #fff; background-color: rgba(255, 255, 255, 0.1); }
        .main-content { flex-grow: 1; min-height: 100vh; display: flex; flex-direction: column; }
        .footer { margin-top: auto; }
    </style>
</head>
<body class="bg-light">
    <div class="d-flex">
        <div class="sidebar bg-dark text-white d-none d-md-flex flex-column p-3">
            <a href="{{ route('books.ui') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="bi bi-book-half me-2 fs-4 text-warning"></i>
                <span class="fs-5 fw-bold">បន្ទប់សៀវភៅ</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li><a href="{{ route('books.ui') }}" class="nav-link"><i class="bi bi-speedometer2 me-2"></i> ផ្ទាំងគ្រប់គ្រង</a></li>
                <li><a href="{{ route('books.ui') }}" class="nav-link"><i class="bi bi-journal-bookmark-fill me-2"></i> គ្រប់គ្រងសៀវភៅ</a></li>
                <li><a href="#" class="nav-link active"><i class="bi bi-person-badge me-2"></i> អ្នកនិពន្ធ</a></li>
                <li><a href="{{ route('categories.create') }}" class="nav-link "><i class="bi bi-tags me-2"></i> ប្រភេទសៀវភៅ</a></li>
            </ul>
        </div>

        <div class="main-content">
            <nav class="navbar navbar-white bg-white border-bottom sticky-top shadow-sm py-3 px-4">
                <span class="fw-bold text-dark"><i class="bi bi-person-plus me-2"></i>ការគ្រប់គ្រងអ្នកនិពន្ធ</span>
            </nav>

            <div class="container-fluid px-4 py-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <a href="{{ route('books.ui') }}" class="text-decoration-none text-secondary small fw-semibold">
                                <i class="bi bi-arrow-left me-1"></i> ត្រឡប់ទៅផ្ទាំងដើម
                            </a>
                        </div>
                        <div class="card shadow border-0 rounded-3">
                            <div class="card-header bg-primary text-white py-3 border-0">
                                <h5 class="mb-0 fw-bold"><i class="bi bi-person-fill-add me-2"></i>បង្កើតអ្នកនិពន្ធថ្មី (Create Author)</h5>
                            </div>
                            <div class="card-body p-4">
                                <form action="{{ route('authors.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label fw-bold text-secondary">ឈ្មោះអ្នកនិពន្ធ (Author Name)</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light text-muted"><i class="bi bi-person-gear"></i></span>
                                            <input type="text" name="name" class="form-control" required placeholder="ឧទាហរណ៍៖ ភីរុណ ម៉ារ៉ា...">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label fw-bold text-secondary">អ៊ីមែលអ្នកនិពន្ធ (Author Email)</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light text-muted"><i class="bi bi-envelope"></i></span>
                                            <input type="email" name="email" class="form-control" required placeholder="ឧទាហរណ៍៖ author@gmail.com">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2 border-top">
                                        <a href="{{ route('books.ui') }}" class="btn btn-light border text-secondary px-4">បោះបង់</a>
                                        <button type="submit" class="btn btn-primary px-4 fw-bold shadow-sm">រក្សាទុកទិន្នន័យ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer bg-white border-top py-3 text-center text-muted shadow-sm">
                <span class="small">&copy; ២០២៦ រក្សាសិទ្ធិគ្រប់យ៉ាងដោយ ប្រព័ន្ធគ្រប់គ្រងសៀវភៅ</span>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>