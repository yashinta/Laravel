@extends('layout')
@section('title')
Beranda
@endsection
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @if($buku->count())
    @foreach($buku as $buku)
    <tr>
    	<td>
    		{{$buku->id}}
    	</td>
    	<td>
    		{{$buku->judul}}
    	</td>
    	<td>
    		{{$buku->penerbit}}
    	</td>
    	<td>
    		{{$buku->pengarang}}
    	</td>
    	<td>
    		{{$buku->tahun_terbit}}
    	</td>
    	<td>
    		<a href="/update">Update</a>
    	</td>
    	<td>
    		<form action="destroy/$buku->id" method="GET">
    			{{csrf_field()}}
    			<input type="submit" name="" value="Delete">
    		</form>
    	</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection