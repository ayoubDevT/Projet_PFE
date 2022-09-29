<x-layout>
  <div class="page-content">
    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Ajouter une image a votre slider min(1200x600)</h6>
            <form action="{{ route('aboutimg.store', ['page'=>$page->id]) }}" method="post"
              enctype="multipart/form-data">
              @csrf
              <input name="path" type="file" id="myDropify" class="border" />
              @error('path')
              <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
              @enderror
              <input type="text" value="about" name="page" hidden>
              <input type="submit" value="Ajouter" class="btn btn-primary btn-icon-text mb-2  mt-2">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">

      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Modifier votre slider</h6>

            <div class="owl-carousel owl-theme owl-mouse-wheel">
              @foreach ($imgs as $image)

              <div class="content item">
                <div class="content-overlay"></div> <img src="{{asset('storage/' . $image->path) }}" alt="item-image"
                  class="content-image">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-danger btn-icon-text mb-2  mt-2"
                    href="{{ route('aboutimg.delete', ['id'=>$image->id]) }}">Supprimer</a>


                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-icon-text mb-2  mt-2" data-toggle="modal"
                    data-target="#exampleModal{{ $image->id }}">
                    Modifier
                  </button>

                </div>
              </div>
              @endforeach


            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="stretch-card  mt-5">
      <div class="card">
        <div class="card-body">

          <div class="table-responsive">

            <div>
              <form action="{{ route('page.store', ['page'=>$page->id])}}" method="post">
                @csrf
                @method('PUT')
                <div class="p-3">
                  <h6 class="card-title">Modifier le texte de la page (en)</h6>
                  <textarea name="body_en" id="editor_en" cols="30"
                    rows="10">{!!  $page->body_en == null ? 'no code' : $page->body_en !!}</textarea>
                </div>
                <div class="p-3">
                  <h6 class="card-title">Modifier le texte de la page (de)</h6>
                  <textarea name="body_de" id="editor_de" cols="30"
                    rows="10">{!!  $page->body_de == null ? 'no code' : $page->body_de !!}</textarea>
                </div>
                <div class="p-3">
                  <h6 class="card-title">Modifier le texte de la page (fr)</h6>
                  <textarea name="body_fr" id="editor_fr" cols="30"
                    rows="10">{!!  $page->body_fr == null ? 'no code' : $page->body_fr !!}</textarea>
                </div>
                <input type="submit" value="submit" class="btn btn-primary btn-icon-text mb-2  mt-2">
              </form>
            </div>
            <hr>
            <!--<div style="border: 1px solid;" class="p-3">
                {!!  $page->body_en == null ? 'no code' : $page->body_en !!}
              </div>-->

          </div>
        </div>
      </div>
    </div>


    @foreach ($imgs as $image)
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $image->id }}" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modifier votre image</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('aboutimg.edit', ['id'=>$image->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input name="path" type="file" id="myDropify" class="border" />
            @error('path')
            <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
            @enderror
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <button type="submit" name="sub" class="btn btn-primary">Modifier</button>

            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</x-layout>