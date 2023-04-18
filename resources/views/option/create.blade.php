<form action="{{ route('option.store')}}" method="POST">
    @csrf
    <label>Description</label>
    <input type="text" name= "option" id="">
    </br>
    <label>category_id</label>
    <input type="integer" name= "category_id" id="">
    </br>
    <input type="submit" value="Send">


</form>
