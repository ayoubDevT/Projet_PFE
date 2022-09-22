<x-layout>

    <div class="page-content">
  
      <div class="row">
        <div class="col-md-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Modifier l'image de votre header (1200x400)</h6>
             
  
              @if (!is_null($img))
              <div class="content item m-4">
                <div class="content-overlay"></div> <img
                  src="{{ asset('storage/'.$img->path ) }}  " alt="item-image"
                  class="content-image">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-danger btn-icon-text mb-2  mt-2"
                    href="{{ route('image.delete', ['id'=>$img->id]) }}">Supprimer</a>
                </div>
              </div>
              @else
              <div class="content item m-4">
              <img src="{{ asset('storage/slider/No-Image.png') }}" alt="" >
              </div>
              @endif
  
              <form action="{{ route('image.store', ['page'=>$page->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="path" type="file" id="myDropify" class="border" />
                @error('path')
                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                @enderror
                <input type="text" value="ptm" name="page" hidden>
                <input type="submit" value="Ajouter" class="btn btn-primary btn-icon-text mb-2  mt-2">
              </form>
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
  
  
    </div>
  
  </x-layout>