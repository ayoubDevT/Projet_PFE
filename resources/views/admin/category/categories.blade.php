<x-layout>
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Ajouter trip</h6>
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="js-example-basic-single w-100" name="category_id" data-width="100%">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText1">Sub-Category</label>
                                <input value="{{ old('name') }}" type="text" class="form-control" id="exampleInputText1"
                                    name="name">
                                @error('name')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <input name="sub" type="submit" value="Ajouter"
                                class="btn btn-primary btn-icon-text mb-2  mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tous les Sub-category</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sub-category</th>
                                        <th>Category</th>
                                        <th>Modification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategories as $subcategory)

                                    <tr>
                                        <td>{{ $subcategory->name }}</td>
                                        <td>{{ $subcategory->category->name }}</td>

                                        <td>
                                            @foreach ($pages as $page)

                                            @if ($page->slug == $subcategory->slug)
                                            
                                            <a class="btn btn-danger btn-icon-text mb-2  mt-2"
                                                href="{{ route('category.delete', ['ids'=>$subcategory->id ,'idp'=>$page->id]) }}">Supprimer</a>
                                            <a class="btn btn-primary btn-icon-text mb-2  mt-2"
                                                href="{{ route('category.update',['id'=>$subcategory->id]) }}">Modifier</a>
                                            @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</x-layout>