<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>បន្ថែមសៀវភៅថ្មី - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            overflow-x: hidden;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            transition: all 0.3s;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.75);
            padding: 0.8rem 1rem;
            margin: 0.2rem 0.5rem;
            border-radius: 0.375rem;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .main-content {
            flex-grow: 1;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .footer {
            margin-top: auto;
        }
    </style>
</head>
<body class="bg-light">

    <div class="d-flex">
        <div class="sidebar bg-dark text-white d-none d-md-flex flex-column p-3">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="bi bi-book-half me-2 fs-4 text-warning"></i>
                <span class="fs-5 fw-bold">បន្ទប់សៀវភៅ</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('books.ui') }}" class="nav-link">
                        <i class="bi bi-speedometer2 me-2"></i> ផ្ទាំងគ្រប់គ្រង (Dashboard)
                    </a>
                </li>
                <li>
                    <a href="{{ route('books.ui') }}" class="nav-link active">
                        <i class="bi bi-journal-bookmark-fill me-2"></i> គ្រប់គ្រងសៀវភៅ
                    </a>
                </li>
                   <li>
                    <a href="{{ route('authors.create') }}" class="nav-link">
                        <i class="bi bi-person-badge me-2"></i> អ្នកនិពន្ធ
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.create') }}" class="nav-link">
                        <i class="bi bi-tags me-2"></i> ប្រភេទសៀវភៅ
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-5 me-2"></i>
                    <strong>អ្នកប្រើប្រាស់</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">ប្រវត្តិរូប</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">ចាកចេញ</a></li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            
            <nav class="navbar navbar-expand-lg navbar-white bg-white border-bottom sticky-top shadow-sm">
                <div class="container-fluid px-4">
                    <span class="navbar-brand d-md-none fw-bold text-primary">
                        <i class="bi bi-book-half me-2"></i>ប្រព័ន្ធសៀវភៅ
                    </span>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex my-2 my-lg-0 me-auto" role="search">
                            <div class="input-group">
                                <input class="form-control bg-light border-0 small" type="search" placeholder="ស្វែងរកសៀវភៅ..." aria-label="Search">
                                <button class="btn btn-primary" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                        
                        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                            <li class="nav-item me-3">
                                <a class="nav-link position-relative" href="#">
                                    <i class="bi bi-bell fs-5 text-secondary"></i>
                                    <span class="position-absolute top-1 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">៣</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin Account
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> ប្រវត្តិរូប</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> ការកំណត់</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i> ចាកចេញ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid px-4 py-5">
                
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7">
                        
                        <div class="mb-3">
                            <a href="{{ route('books.ui') }}" class="text-decoration-none text-secondary small fw-semibold">
                                <i class="bi bi-arrow-left me-1"></i> ត្រឡប់ទៅបញ្ជីសៀវភៅ
                            </a>
                        </div>

                        <div class="card shadow border-0 rounded-3">
                            <div class="card-header bg-success text-white py-3 border-0">
                                <h5 class="mb-0 fw-bold"><i class="bi bi-plus-circle me-2"></i>បន្ថែមសៀវភៅថ្មីចូលប្រព័ន្ធ</h5>
                            </div>
                            
                            <div class="card-body p-4">
                                <form action="{{ route('books.store') }}" method="POST">
                                    @csrf
                                    
                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-secondary">ចំណងជើងសៀវភៅ (Title)</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light text-muted"><i class="bi bi-journal-text"></i></span>
                                            <input type="text" name="title" class="form-control" required placeholder="បញ្ចូលចំណងជើងសៀវភៅ...">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-secondary">ជ្រើសរើសអ្នកនិពន្ធ (Author)</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light text-muted"><i class="bi bi-person"></i></span>
                                            <select name="author_id" class="form-select" required>
                                                <option value="">-- ជ្រើសរើសអ្នកនិពន្ធ --</option>
                                                @foreach($authors as $author)
                                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-bold text-secondary">ជ្រើសរើសប្រភេទសៀវភៅ (Category)</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light text-muted"><i class="bi bi-tags"></i></span>
                                            <select name="category_id" class="form-select" required>
                                                <option value="">-- ជ្រើសរើសប្រភេទ --</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between pt-2 border-top">
                                        <a href="{{ route('books.ui') }}" class="btn btn-light px-4 fw-semibold border text-secondary">ត្រឡប់ក្រោយ</a>
                                        <button type="submit" class="btn btn-success px-4 fw-bold shadow-sm">
                                            <i class="bi bi-check-lg me-1"></i> រក្សាទុក
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <footer class="footer bg-white border-top py-3 text-center text-muted shadow-sm">
                <div class="container-fluid">
                    <span class="small">&copy; ២០២៦ រក្សាសិទ្ធិគ្រប់យ៉ាងដោយ <a href="#" class="text-decoration-none fw-semibold">ប្រព័ន្ធគ្រប់គ្រងសៀវភៅ</a></span>
                </div>
            </footer>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>