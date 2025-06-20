<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/2cb32d2197.js" crossorigin="anonymous"></script>
    <title>Online Book Reading</title>
    <link rel="stylesheet" href="{{ asset('css/book.css') }}" />
    <style>
        .book-card {
            display: block;
        }

        .hidden {
            display: none !important;
        }

        .cat-btn.active {
            background-color: #555;
            color: #fff;
        }

        .center-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 30px auto;
        }

        .search-bar {
            display: flex;
            margin-bottom: 20px;
            max-width: 500px;
            width: 100%;
            justify-content: center;
        }

        .search-bar input {
            flex: 1;
            padding: 10px 14px;
            font-size: 16px;
            border: 2px solid #f8caca;
            border-right: none;
            border-radius: 8px 0 0 8px;
            background-color: #f0f6ff;
            outline: none;
        }

        .search-btn {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #f8caca;
            color: #fff;
            border: 2px solid #f8caca;
            border-radius: 0 8px 8px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-btn:hover {
            background-color: #f5bcbc;
        }

        .category-buttons {
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .cat-btn {
            padding: 8px 14px;
            border: none;
            border-radius: 6px;
            background-color: #eee;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .cat-btn:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header>
        <div class="navigation container_width">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <span>ReadME</span>
            </div>
            <nav class="navbar">
                <a href="{{ url('/') }}">Home</a>
                <a href="#about">About Us</a>
                <a href="#contact">Contact Us</a>
                <a href="{{ url('/book') }}">Book</a>

            </nav>
        </div>
    </header>

    <!-- Search and category buttons -->
    <div class="search-buttons-container center-container">
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search books..." />
            <button type="button" class="search-btn" onclick="searchBooks()">Search</button>
        </div>
        <div class="category-buttons">
            <button class="cat-btn active" onclick="filterByCategory('all')">All</button>
            @foreach($categories as $category)
            <button class="cat-btn" onclick="filterByCategory('{{ $category->name }}')">{{ $category->name }}</button>
            @endforeach
        </div>
    </div>

    <!-- Books Section -->
    <section class="book-section" id="booksSection">
        @foreach($books as $categoryName => $bookCollection)
        <div class="category-block" data-category="{{ $categoryName }}">
            <h2 class="category-title">{{ $categoryName }}</h2>
            <div class="book-grid">
                @foreach($bookCollection as $book)
                <div class="book-card" data-title="{{ strtolower($book->title) }}" data-category="{{ $categoryName }}">
                    <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" />
                    <h3 class="book-title">{{ $book->title }}</h3>
                    <p class="book-detail">{{ $book->description }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="details-btn">Details</a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </section>

    <footer class="footer" style="background-color: #f8d7da; padding: 40px 20px 20px 20px; color: white;">
        <div class="footer-container d-flex flex-wrap justify-content-between align-items-start mb-4">
            <div class="footer-about" style="max-width: 300px;">
                <h3 style="font-weight: bold;">ReadZone</h3>
                <p>
                    Your digital companion to discover, read, and enjoy books from
                    anywhere, anytime.
                </p>
            </div>

            <div class="footer-links" style="min-width: 150px;">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="#hero" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="#about" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="#books" class="text-white text-decoration-none">Books</a></li>
                    <li><a href="#contact" class="text-white text-decoration-none">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-social" style="min-width: 150px;">
                <h4 style="font-weight: bold;">Follow Us</h4>
                <div class="social-icons d-flex gap-3 mt-2">
                    <!-- Facebook -->
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook"
                        style="display: inline-block; width: 40px; height: 40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"
                            fill="#3b5998">
                            <path
                                d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.407.593 24 1.324 24h11.495V14.708h-3.13v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.464.099 2.796.143v3.24l-1.919.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.59l-.467 3.622h-3.123V24h6.116C23.407 24 24 23.407 24 22.676V1.324C24 .593 23.407 0 22.676 0z" />
                        </svg>
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter"
                        style="display: inline-block; width: 40px; height: 40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"
                            fill="#1da1f2">
                            <path
                                d="M24 4.557a9.846 9.846 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.723 9.865 9.865 0 0 1-3.127 1.195 4.916 4.916 0 0 0-8.38 4.482A13.948 13.948 0 0 1 1.671 3.149a4.917 4.917 0 0 0 1.523 6.573 4.9 4.9 0 0 1-2.228-.616c-.054 2.281 1.582 4.415 3.949 4.89a4.935 4.935 0 0 1-2.224.084 4.92 4.92 0 0 0 4.59 3.417A9.867 9.867 0 0 1 .96 19.539a13.93 13.93 0 0 0 7.548 2.212c9.057 0 14.01-7.496 14.01-13.986 0-.213-.005-.425-.014-.636A10.012 10.012 0 0 0 24 4.557z" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://instagram.com" target="_blank" aria-label="Instagram"
                        style="display: inline-block; width: 40px; height: 40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"
                            fill="#e4405f">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.34 3.608 1.314.975.975 1.252 2.243 1.314 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.339 2.633-1.314 3.608-.975.975-2.243 1.252-3.608 1.314-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.339-3.608-1.314-.975-.975-1.252-2.243-1.314-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.849c.062-1.366.34-2.633 1.314-3.608.975-.975 2.243-1.252 3.608-1.314C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.736 0 8.332.012 7.052.07 5.78.128 4.544.405 3.513 1.436 2.481 2.467 2.204 3.703 2.146 4.975.87 8.332.87 15.668 2.146 19.025c.058 1.272.335 2.508 1.367 3.539 1.03 1.031 2.266 1.308 3.538 1.366C8.332 23.988 8.736 24 12 24s3.668-.012 4.948-.07c1.272-.058 2.508-.335 3.539-1.366 1.031-1.03 1.308-2.266 1.366-3.538.128-1.283.14-1.687.14-4.961s-.012-3.678-.07-4.948c-.058-1.272-.335-2.508-1.366-3.539C19.456.405 18.22.128 16.948.07 15.668.012 15.264 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright Bottom -->
        <div class="footer-bottom text-center mt-4" style="border-top: 1px solid white; padding-top: 10px;">
            <p class="mb-0" style="color: white;">&copy; 2025 ReadZone. All rights reserved.</p>
        </div>
    </footer>


    <!-- JavaScript -->
    <script>
        function searchBooks() {
            const input = document.getElementById('searchInput').value.toLowerCase().trim();
            const cards = document.querySelectorAll('.book-card');
            const blocks = document.querySelectorAll('.category-block');
            let found = false;

            cards.forEach(card => {
                const title = card.getAttribute('data-title');
                if (title.includes(input)) {
                    card.classList.remove('hidden');
                    found = true;
                } else {
                    card.classList.add('hidden');
                }
            });

            blocks.forEach(block => {
                const visibleBooks = block.querySelectorAll('.book-card:not(.hidden)');
                if (visibleBooks.length === 0) {
                    block.classList.add('hidden');
                } else {
                    block.classList.remove('hidden');
                }
            });

            if (!found && input !== '') {
                alert("No books found matching your search.");
            }
        }

        function filterByCategory(category) {
            const buttons = document.querySelectorAll('.cat-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            const cards = document.querySelectorAll('.book-card');
            const blocks = document.querySelectorAll('.category-block');

            blocks.forEach(block => block.classList.add('hidden'));
            cards.forEach(card => {
                const bookCategory = card.getAttribute('data-category');
                if (category === 'all' || bookCategory === category) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });

            if (category === 'all') {
                blocks.forEach(block => block.classList.remove('hidden'));
            } else {
                document.querySelectorAll(`.category-block[data-category="${category}"]`).forEach(block => {
                    block.classList.remove('hidden');
                });
            }
        }
    </script>
</body>

</html>