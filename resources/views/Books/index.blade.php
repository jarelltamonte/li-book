@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="index-div">

    <div class="title-div">
        <h1 class="index-heading">Books List</h1>
        <button class="add-button">
            <a href="{{ route('books.create') }}">+</a>
        </button>
    </div>

    <form method="GET" action="{{ route('books.index') }}" class="search-wrapper">
        <span class="search-icon">&#9906;</span>
        <input
            type="text"
            name="search"
            class="search-input"
            placeholder="Search by title, author, or genre…"
            value="{{ $query ?? '' }}"
            autocomplete="off"
        >
    </form>

    @if(isset($query) && $query && $books->isEmpty())
        <p class="no-results" style="display:block">No books match your search.</p>
    @endif

    <div class="book-list">
        @foreach($books as $book)
            <div class="book-item">
                <div>
                    <p class="title">{{ $book->title }}</p>
                    <p class="year">{{ $book->published_year }}</p>
                </div>

                <div class="lower-info">
                    <span class="sub-title">{{ $book->genre }}</span>
                    <p class="author">Written by {{ $book->author }}</p>
                </div>

                <div class="description">
                    <p class="description-info">{{ $book->description }}</p>
                </div>

                <div class="buttons">
                    <button class="edit-button">
                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                    </button>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="delete-button" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</div>