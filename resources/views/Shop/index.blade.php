@extends('home')
@section('content')
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       <!-- {{dump($jeus)}}-->
      
      @foreach($jeus as $jeus)
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img class="bd-placeholder-img card-img-top" width="100%" height="225"  src="{{  $jeus->photo_principale}}"/>
            <div class="card-body">
              <p  class="lead text-muted">{{$jeus->nom}}</p>
              <p class="card-text"> {{$jeus->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <p> Publié le {{date('jS M Y', strtotime($jeus->updated_at))}}</p>
                <div class="btn-group">
                  <a href="/jeu/{{ $jeus->slug }}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                  @if (isset(Auth::user()->id) && Auth::user()->id == $jeus->user_id)
                  <a type="button" class="btn btn-sm btn-outline-secondary" href="/jeu/{{ $jeus->slug}}/edit">Edit</a>
                  <span>
                    <form
                      action="/jeu/{{ $jeus->slug}}"
                      method="POST">
                      @csrf
                      @method('delete')
                      <button
                      type="SUBMIT" class="btn btn-sm btn-outline-secondary">
                        Suppr
                      </button>
                    </form>
                  </span>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection