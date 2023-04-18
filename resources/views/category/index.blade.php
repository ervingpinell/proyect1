<style>
.button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display:inline-table;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #f44336;}
.button3 {background-color: #4CAF50;}

</style>
<h4> CATEGORY MENU </h4>
<a href="{{ url('category/create')}}" class = "button button3" >Create</a>
</br>
<table>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                </tr>

@foreach($categories as $category)

<tr>
<td>
        <h4> {{$category->id}}&nbsp</h4>
    </td>

    <td>
        <h4> {{$category->description}}</h4>
    </td>

    <td>
        <h4> {{$category->created_at}}</h4>
    </td>

    <td>
        <h4> || {{$category->updated_at}} || </h4>
    </td>

    <td>
    <a href="{{ url('category/'.$category->id.'/edit')}}"  class ="button">Edit</a>

    </td>
    <td>

    <form method="POST" action="{{ url('category/'.$category->id) }}">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $category->id }}">
    <button type="submit" class="button button2">Delete</button>
    </form>

    </td>

<br>
    </tr>


@endforeach
</table>
