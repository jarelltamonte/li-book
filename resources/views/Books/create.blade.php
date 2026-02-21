@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="index-div">
    <div class="book-edit">
        <h1 class="index-heading">Add Book</h1>
        <form id="bookForm" action="{{ route('books.store') }}" method="POST">
            @csrf
            Title: <input class="input" type="text" name="title"><br>
            Author: <input class="input" type="text" name="author"><br>
            Genre: <input class="input" type="text" name="genre"><br>
            Published Year: <input class="input" type="number" name="published_year"><br>
            <button class="edit-button" type="submit">Save</button>
        </form>
    </div>

</div>

<script>
    document.getElementById('bookForm').addEventListener('submit', function(e) {
        const inputs = this.querySelectorAll('.input');
        let isEmpty = false;

        inputs.forEach(input => {
            if (!input.value.trim()) isEmpty = true;
        });

        if (isEmpty) {
            e.preventDefault(); // Stop form submission
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: 'Please fill in all details',
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
</script>