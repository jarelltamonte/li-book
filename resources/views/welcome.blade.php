@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="welcome-page">
    <p class="sub-heading">Welcome to</p>
    <h1 class="index-heading">LiBook</h1>
    <p class="welcome-text">Manage your book collection with ease. Add, edit, and delete books as you like.</p>
    <button class="welcome-button">
        <a href="{{ route('books.index') }}">View Books</a>
    </button>
</div>