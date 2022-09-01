<x-layout>
    
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Modifier trip</h6>
                        
                        <form action="{{ route('trips.edit', ['id'=>$trip->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputText1">Titre</label>
                                <input value="{{ $trip->title }}" type="text" class="form-control"
                                    id="exampleInputText1" name="title">
                            </div>
                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="js-example-basic-single w-100" name="category_id" data-width="100%">
                                    @foreach ($categories as $category)

                                    <option value="{{ $category->id }}" {{ $select=($trip->category_id == $category->id)
                                        ?
                                        'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control"
                                    id="exampleFormControlTextarea1" name="overview" rows="5">{{ $trip->overview }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText1">Jours</label>
                                <input value="{{ $trip->days }}" type="text" class="form-control" id="exampleInputText1"
                                    name="days" placeholder="Number Days">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText1">Min Age</label>
                                <input value="{{ $trip->min_age }}" type="text" class="form-control"
                                    id="exampleInputText1" name="min_age" placeholder="Number Years+">
                            </div>
                            <div class="form-group">
                                <label for="tags">Les mois</label>
                                <input value="{{ $trip->months }}" name="months" id="tags"
                                    value="January, February, March, April, May, June, July, August, September, October, November, December" />
                            </div>
                            <div class="form-group">
                                <label for="myDropify">Thumbnail</label><br>
                                <label for="old">Ancienne image</label>
                                <img src="{{ asset('storage/'.$trip->thumbnail) }}" id="old" alt="old image" width="400px" class="mb-4">
                                <label for="myDropify">Nouvelle image</label>
                                <input value="{{ $trip->thumbnail }}" name="thumbnail" type="file" id="myDropify"
                                    class="border" />

                            </div>



                            <div class="modal-footer">
                                <a class="btn btn-secondary" href="{{ route('trips.index',['trips' => $trips , 'categories' => $categories]) }}">Annuler</a>
                                <button type="submit" name="sub" class="btn btn-primary">Modifier</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>