<x-app-layout>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
 <link rel="icon" href="globe.png">

<style>
    #gal{
        min-width: 170px;
        max-width: 170px;
        margin: 1rem;
    }
    .card-img-top{
        width: 140px;
        height : 140px;
    }
    .card-body{
      object-fit:contain;
    }
    
</style>


    <div class="py-12">
    
    <button style="margin:1rem"  type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter Rapport</button>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="card-group">
                  
                 @forelse($rapport as $ouvrage)
                
                <div class="card mr-3" id="gal">
                  <iframe src="/storage/{{$ouvrage->versionpdf}}"  frameborder="0" scrolling="no" style="height:140px;width:166px;border:none;"   ></iframe></a>
                    <div class="card-body">
                      <a href="#"><h5 class="card-title"><b>{{ $ouvrage->title }}</b></h5></a>
                      <p class="card-text" style="color: #9e9a75 ;font-family: 'Quicksand';"><i>{{ $ouvrage->etudiant }}</i></p>
                      @if(Auth::user()->id == $ouvrage->user_id) 
          
                      <form action="{{ route('Rapport.destroy',$ouvrage) }}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button  style="float:left;" type="submit" onclick="return confirm('voulez-vous vraiment supprimer ce rapport?')"  class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                      </form>
                      @endif
                      <a href="{{ route('Rapport.show',$ouvrage) }}"><button type="submit"  style="float:right;" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button></a>
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
        <form id="creq" action="{{ action('RapportController@store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
          <div class="mb-3">
            <label for="title" class="col-form-label">Sujet :</label>
            <input type="text" class="form-control" name="title">
          </div>
         
          <div class="mb-3">
            <label for="filiere" class="col-form-label">Filière :</label>
            <input type="text" class="form-control" name="filiere">
          </div>
          <div class="mb-3">
            <label for="typerapport" class="col-form-label">Type de rapport:</label>
            <select class="form-control" 
              id="typerapport" 
              name="typerapport" 
              value="">
                <option value="Fin d'étude">Fin d'étude</option>
                <option value="Stage">Stage</option>
              </select>
          </div>
          <div class="mb-3">
            <label for="etudiant" class="col-form-label">Nom étudiant:</label>
            <input type="text" class="form-control" name="etudiant" value="{{Auth::user()->name}}">
          </div>
          <div class="mb-3">
            <label for="desc" class="col-form-label">Description:</label>
            <textarea
                name="desc" 
                class="form-control" 
                placeholder="Enter description">
            </textarea>  
          </div>
          <div class="mb-3">
            <label for="date" class="col-form-label">Date:</label>
            <input type="date" class="form-control" name="date">
          </div>
          
          <div class="mb-3">
            <label for="versionpdf" class="col-form-label">version PDF:</label>
            <input type="file" class="form-control" name="versionpdf">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" onClick="event.preventDefault();
        document.getElementById('creq').submit();">Ajouter le rapport</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal END -->
    
  
</x-app-layout>
