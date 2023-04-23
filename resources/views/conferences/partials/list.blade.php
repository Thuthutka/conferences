<h1><b>Title: </b>{{ $conference['title'] }}</h1>
<p><b>Content: </b>{{ $conference['content'] }}</p>
<p><b>Date: </b>{{ $conference['date'] }}</p>
<p><b>Address: </b>{{ $conference['address'] }}</p>
<br>
@guest
@else
    <a href="{{route('conferences.edit', ['conference'=>$conference['id']]) }}"><button type="button">Edit</button></a>
    <form action="{{ route('conferences.destroy', ['conference' => $conference['id']])  }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endguest
