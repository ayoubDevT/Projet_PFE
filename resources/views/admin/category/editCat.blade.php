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
                                <label for="exampleInputText1">Sub category</label>
                                <input value="{{ $sub->name }}" type="text" class="form-control"
                                    id="exampleInputText1" name="name">
                                @error('title')
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