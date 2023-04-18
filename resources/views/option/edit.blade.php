<style>
input{
    text-align: center;
}
h4{
    text-align: center;
}
form input[type='submit']  {
    display: inline-block;
    width: 70px;
}
</style>

<form action="{{ route('option.update', $option->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" id="id" value='{{$option->id}}'>

    <table>                <tr>
                    <th>ID</th>
                    <th>Option</th>
                    <th>Category_id</th>
                </tr>
                <tr>
                    <td>
    <h4>{{$option->id}}</h4>
    </td>
    <td>
    <input type="text" size="12" name= "option" id="" value='{{$option->option}}'>
    </td>
    <td>
    <input type="integer" size="12" name= "category_id" id="" value='{{$option->category_id}}'>
    </td>
</br>
    </br>

    </tr>
    <td>
    <input type="submit" value="Send">
    </td>

</form>
