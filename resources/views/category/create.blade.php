<form action="{{ route('category.store')}}" method="POST">
    @csrf
    <label>description</label>
    <input type="text" name= "description" id="">
    </br>
    </br>
    <input type="submit" value="Send">


</form>
