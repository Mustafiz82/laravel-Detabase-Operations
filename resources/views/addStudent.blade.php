<div>
    <h1>Inseert Student Info </h1>

    <form action="add" method="POST">
        @csrf
        <input type="text" name="Name" placeholder="Name"> <br>
        <input type="number" name="Roll" placeholder="Roll"> <br>
        <input type="email" name="Email" placeholder="Email"> <br>
        <button>Add New User</button>
    </form>
</div>
