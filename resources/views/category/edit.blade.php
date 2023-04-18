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
<form action="{{ route('category.update', $category->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" id="id" value='{{$category->id}}'>

    <table>                <tr>
                    <th>ID</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>
    <h4>{{$category->id}}</h4>
    </td>
    <td>
    <input type="text" name= "description" id="" value='{{$category->description}}'>
    </td>
</br>
    </br>

    </tr>
    <td>
    <input type="submit" value="Send">
    </td>

</form>
