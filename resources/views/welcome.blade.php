<x-layout>

<x-navbar />
<div class="container">
    <div class="row">
@foreach ($songs as  $song)
{{-- <p>{{ $song->year }}</p> --}}
<div class="col-3">
    <div class="card" style="width:200px">
    <img src="{{ Storage::url($song->img) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $song->name }}</h5>
      <h5 class="card-title">{{ $song->year }}</h5>

      <a href="{{ route('songs.show', compact('song')) }}" class="btn btn-primary">vai al dettaglio</a>
      <a href="{{ route('songs.edit', compact('song')) }}" class="btn btn-warning">modifica</a>
      <form  method="POST"  action="{{ route('songs.delete', compact('song')) }}">
@csrf
@method('delete')
        <button class="btn btn-danger">ceancella</button>


      </form>


    </div>
  </div>
</div>
@endforeach
</div>
</div>
</x-layout>
