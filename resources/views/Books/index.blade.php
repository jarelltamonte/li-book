@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="index-div">

    <div class="title-div">
        <h1 class="index-heading">Books List</h1>
        <button class="add-button">
            <a href="{{ route('books.create') }}">+</a>
        </button>
    </div>

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