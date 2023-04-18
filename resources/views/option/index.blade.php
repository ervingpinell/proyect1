<style>
.button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #f44336;}
.button3 {background-color: #4CAF50;}

</style>
<h4> OPTION MENU </h4>
<a href="{{ url('option/create')}}" class = "button button3" >Create</a>
</br>
<table>
                <tr>
                    <th>ID</th>
                    <th>Option</th>
                    <th>Category ID</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                </tr>

@foreach($options as $option)

<tr>
<td>
        <h4> {{$option->id}}</h4>
    </td>

    <td>
        <h4> {{$option->option}}</h4>
    </td>
    <td>
        <h4>&emsp; {{$option->category_id}}</h4>
    </td>
    <td>
        <h4> {{$option->created_at}}</h4>
    </td>

    <td>
        <h4> || {{$option->updated_at}} || </h4>
    </td>

    <td>
    <a href="{{ url('option/'.$option->id.'/edit')}}"  class ="button">Edit</a>

    </td>
    <td>
</br>
    <form method="POST" action="{{ url('option/'.$option->id) }}">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $option->id }}">
    <button type="submit" class="button button2">Delete</button>
</form>

    </td>

<br>
    </tr>


@endforeach
</table>
