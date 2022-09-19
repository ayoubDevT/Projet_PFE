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

            <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input name="path" type="file" id="myDropify" class="border" />
              @error('path')
              <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
              @enderror
              <input type="text" value="osp" name="page" hidden>
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
              <form action="{{ route('page.store')}}" method="post">
                @csrf
                <textarea name="body" id="editor" cols="30" rows="10"></textarea>
                <input type="text" value="osp" name="name" hidden>
                <input type="submit" value="submit" class="btn btn-primary btn-icon-text mb-2  mt-2">
              </form>
            </div>
            <hr>
            <div style="border: 1px solid;" class="p-3">
              {!! App\Models\Page::where('name','osp')->get()[0]->body ?? 'no code' !!}
            </div>

          </div>
        </div>
      </div>
    </div>


  </div>

</x-layout>