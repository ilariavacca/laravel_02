<x-layout>

    <x-navbar />
   <p></p>
   <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 18rem;">
                <img src="{{ Storage::url($song->img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $song->name }}</h5>
                  <h5 class="card-title">{{ $song->year}}</h5>

                  <a href="{{ route('songs.index') }}" class="btn btn-primary">torna alla home</a>

                </div>
              </div>
        </div>
    </div>
   </div>
    </x-layout>
