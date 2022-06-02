<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    #gal{
        min-width: 160px;
        max-width: 160px;
        margin: 1rem;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <i class="fas fa-columns"></i>
                                catégories :
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                        @foreach($categories as $category)
                                            <div class="card text-white bg-info mb-3 m-2 p-1">
                                                <a href="{{route('voirparcategorie',['id'=>$category->id])}}" ><b>{{ $category->nom }}</b></a>

                                            </div>  
                                                           
                                        @endforeach


                                </nav>
                            </div>


    
    </x-slot>                
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="card-group">
                  
                 @forelse($oeuvre as $ouvrage)
                
                <div class="card mr-3" id="gal">
                    <a href="{{route('bookdetails', ['id'=>$ouvrage->id])}}"><img class="card-img-top" src="{{ asset('storage/'.$ouvrage->image) }}" alt="Card image cap"></a>
                    <div class="card-body">
                    <a href="{{route('bookdetails', ['id'=>$ouvrage->id])}}"  " ><h5 class="card-title"><b>{{ $ouvrage->titre }}</b></h5></a>
                    <a href="{{route('bookdetails', ['id'=>$ouvrage->id])}}" ><p class="card-text"><i>{{ $ouvrage->auteur }}</i></p></a>
                    </div>
                    
                </div> 
              
                @empty
                    <div>No Item Found!</div>
               
                @endforelse
               
             
            </div>
        </div>
    </div>

    <div class="mt-6 p-4">
        {{$oeuvre->links()}}
    </div>
                   
                           
            

    
  
</x-app-layout>
