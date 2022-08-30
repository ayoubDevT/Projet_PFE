<x-layout>

  <div class="page-content">

    
    
      <div class="stretch-card">
        <div class="card">
          <div class="card-body">
            
            <div class="table-responsive">
              
              <div>
                <form action="{{ route('page.store')}}" method="post">
                  @csrf
                <textarea name="body" id="editor" cols="30" rows="10"></textarea>
               <input type="submit" value="submit" class="btn btn-primary btn-icon-text mb-2  mt-2">
              </form>
              </div>
              <div>
                {!! App\Models\Page::latest()->first()->body !!}
              </div>

            </div>
          </div>
        </div>
      </div>
    

  </div>

</x-layout>