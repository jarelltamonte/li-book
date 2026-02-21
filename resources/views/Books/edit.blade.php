@vite(['resources/css/app.css', 'resources/js/app.js'])


<div class="index-div">
    <div class="book-edit">
        <h1 class="index-heading">Edit Book</h1>
        <form id="bookForm" action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            Title: <input class="input" type="text" name="title" value="{{ $book->title }}"><br>
            Author: <input class="input" type="text" name="author" value="{{ $book->author }}"><br>
            Genre: <input class="input" type="text" name="genre" value="{{ $book->genre }}"><br>
            Published Year: <input class="input" type="number" name="published_year"
                value="{{ $book->published_year }}"><br>
            <div class="buttons">

                <button class="edit-button" type="submit">Update</button>
            </div>
        </form>
    </div>

</div>