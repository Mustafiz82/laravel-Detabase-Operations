<div>
    <h1>Inseert Student Info </h1>

    <form action="add" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="Name" placeholder="Name"> <br>
        <input type="number" name="Roll" placeholder="Roll"> <br>
        <input type="email" name="Email" placeholder="Email"> <br>
        <input type="file" name="image" > <br> <br>
        <button>Add New User</button>
    </form>
</div>
