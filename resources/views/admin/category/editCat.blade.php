<x-layout>

    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Modifier trip</h6>

                        <form action="{{ route('category.edit', ['slug'=>$sub->slug]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="js-example-basic-single w-100" name="category_id" data-width="100%">
                                    @foreach ($categories as $category)

                                    <option value="{{ $category->id }}" {{ $select=($sub->category_id == $category->id)
                                        ?
                                        'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="name_en">Sub category (en)</label>
                                <input value="{{ $sub->name_en }}" type="text" class="form-control"
                                    id="name_en" name="name_en">
                                @error('name_en')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name_de">Sub category (de)</label>
                                <input value="{{ $sub->name_de }}" type="text" class="form-control"
                                    id="name_de" name="name_de">
                                @error('name_de')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name_fr">Sub category (fr)</label>
                                <input value="{{ $sub->name_fr }}" type="text" class="form-control"
                                    id="name_fr" name="name_fr">
                                @error('name_fr')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            



                            <div class="modal-footer">
                                <a class="btn btn-secondary"
                                    href="{{ route('category.index') }}">Annuler</a>
                                <button type="submit" name="sub" class="btn btn-primary">Modifier</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>