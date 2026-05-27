<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ប្រព័ន្ធគ្រប់គ្រងសៀវភៅ - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        /* រៀបចំរចនាប័ទ្មបន្ថែមសម្រាប់ទម្រង់ Dashboard */
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
                    <a href="#" class="nav-link active">
                        <i class="bi bi-speedometer2 me-2"></i> ផ្ទាំងគ្រប់គ្រង (Dashboard)
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
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
                    <li><a class="dropdown-menu-item dropdown-item" href="#">ប្រវត្តិរូប</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-menu-item dropdown-item" href="#">ចាកចេញ</a></li>
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
                                    <span class="position-absolute top-1 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
                                        ៣
                                    </span>
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

            <div class="container-fluid px-4 py-4">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2 class="text-dark fw-bold mb-0">ប្រព័ន្ធគ្រប់គ្រងសៀវភៅ</h2>
                        <p class="text-muted small mb-0">ផ្ទាំងគ្រប់គ្រង និងទិន្នន័យស្ថិតិសៀវភៅទាំងអស់នៅក្នុងប្រព័ន្ធ</p>
                    </div>
                    <a href="{{ route('books.create') }}" class="btn btn-success px-4 py-2 shadow-sm fw-semibold">
                        <i class="bi bi-plus-lg me-1"></i> បន្ថែមសៀវភៅថ្មី
                    </a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow border-0 rounded-3">
                    <div class="card-header bg-white py-3 border-0">
                        <h5 class="mb-0 text-secondary fw-bold"><i class="bi bi-table me-2"></i>បញ្ជីសៀវភៅដែលមានស្រាប់</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light text-secondary">
                                    <tr>
                                        <th class="ps-4">ID</th>
                                        <th>ចំណងជើងសៀវភៅ</th>
                                        <th>អ្នកនិពន្ធ</th>
                                        <th>ប្រភេទសៀវភៅ</th>
                                        <th>ការពិពណ៌នា</th>
                                        <th class="text-center pe-4">សកម្មភាព</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                    <tr>
                                        <td class="ps-4 text-muted fw-semibold">{{ $book->id }}</td>
                                        <td class="fw-bold text-dark">{{ $book->title }}</td>
                                        <td><span class="badge bg-info-subtle text-info px-3 py-2 border border-info-subtle rounded-pill">{{ $book->author->name ?? 'មិនមានទិន្នន័យ' }}</span></td>
                                        <td><span class="badge bg-secondary-subtle text-secondary px-3 py-2 border border-secondary-subtle rounded-pill">{{ $book->category->name ?? 'មិនមានទិន្នន័យ' }}</span></td>
                                        <td class="text-muted small text-truncate" style="max-width: 200px;">{{ $book->bookDetail->description ?? 'មិនមានការពិពណ៌នា' }}</td>
                                        <td class="text-center pe-4">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-outline-warning btn-sm px-3">
                                                    <i class="bi bi-pencil-square me-1"></i> កែប្រែ
                                                </a>
                                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm px-3" onclick="return confirm('តើអ្នកពិតជាចង់លុបមែនទេ?')">
                                                        <i class="bi bi-trash me-1"></i> លុប
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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