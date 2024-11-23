<div>
    <h1>Edit Student Info </h1>

    <form action="/edit-Student/{{$data->Id}}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="Name"  value="{{$data->Name}}" placeholder="Name"> <br>
        <input type="number" name="Roll" value="{{$data->Roll}}"  placeholder="Roll"> <br>
        <input type="email" name="Email" value="{{$data->Email}}"  placeholder="Email"> <br>
        <button>Update User</button>
    </form>
</div>
