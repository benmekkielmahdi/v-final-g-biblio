<x-app-layout>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />


<style>
    #gal{
        min-width: 160px;
        max-width: 160px;
        margin: 1rem;
    }
    .card-img-top{
        width: 160px;
        height : 210px;
    }
</style>


    <div class="py-12">
    <button style="margin:1rem"  type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter Rapport</button>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="card-group">
                  
                 @forelse($rapport as $ouvrage)
                
                <div class="card mr-3" id="gal">
                    <a href="#"><img class="card-img-top" src="{{ asset('storage/'.$ouvrage->image) }}" alt="Card image cap"></a>
                    <div class="card-body">
                    <a href="#"><h5 class="card-title"><b>{{ $ouvrage->title }}</b></h5></a>
                    <a href="#" ><p class="card-text"><i>{{ $ouvrage->etudiant }}</i></p></a>
                    </div>
                    
                </div> 
              
                @empty
                    <div>No Item Found!</div>
               
                @endforelse
               
             
            </div>
        </div>
    </div>

    <div class="mt-6 p-4">
        {{$rapport->links()}}
    </div>
                   
                           
            
<!-- MODAL -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Rapport</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('Rapport.store') }}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="mb-3">
            <label for="title" class="col-form-label">sujet :</label>
            <input type="text" class="form-control" id="title">
          </div>
         
          <div class="mb-3">
            <label for="filiere" class="col-form-label">Filière :</label>
            <input type="text" class="form-control" id="filiere">
          </div>
          <div class="mb-3">
            <label for="typerapport" class="col-form-label">type de rapport:</label>
            <input type="text" class="form-control" id="typerapport">
          </div>
          <div class="mb-3">
            <label for="etudiant" class="col-form-label">Nom étudiant:</label>
            <input type="text" class="form-control" id="etudiant">
          </div>
          <div class="mb-3">
            <label for="desc" class="col-form-label">description:</label>
            <input type="text" class="form-control" id="desc">
          </div>
          <div class="mb-3">
            <label for="date" class="col-form-label">date:</label>
            <input type="date" class="form-control" id="date">
          </div>
          
          <div class="mb-3">
            <label for="versionpdf" class="col-form-label">versionpdf:</label>
            <input type="file" class="form-control" id="versionpdf">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Ajouter le rapport</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal END -->
    
  
</x-app-layout>
