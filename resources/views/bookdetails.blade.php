<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('details') }}
        </h2>
    </x-slot>
    <!--BOOK details style -->
     <style>
        .card-body{
            float:right;
            margin:2rem;

        }
        .book-information{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 40px;
            padding: 100px 0 120px;

        }
        .book-image{
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #979797;
            padding: 30px;
            text-align: center;
            height: 400px;
            
            

            img {
                
                opacity: 0;
                transition: opacity .10s ease-in-out;
                max-height: 100%;
            }

            img.active {
                opacity: 1;
            }
        }
        .card-img-top{
            
            width: 100%;
            height:100%;
            object-fit:contain;
        }
    @media only screen and (max-width: 327px) {
        .book-information{
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 10px;
            padding: 10px 0 12px;

        }

    }

    </style>

    <!--  BOOK DETAILS -->
    <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Emprunter</button>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="book-information">
                    <div class="book-image">
                        <img class="card-img-top" src="{{ asset('storage/'.$oeuvre->image) }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h1 class="product-section-title" ><b>Titre : </b>{{ $oeuvre->titre }}</h1></a>
                        <p class="card-text"><b>Auteur : </b>{{ $oeuvre->auteur }}</p></a>
                        <p class="card-text" style="color: #9e9a75 ;font-family: 'Quicksand';"><i>{{ $oeuvre->description }}</i></p></a>
                        <br>
                        <p class="card-text"><span style=" border :2px solid lightgrey ; display:inline;" >Quantité : {{ $oeuvre->qt }}</span></p></a>

                    </div>
                    
                </div>
            </div>  
        </div>
    </div>
<!-- MODAL -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informations de l'emprunteur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="code" class="col-form-label">code Nationale d'étudiant :</label>
            <input type="text" class="form-control" id="code">
          </div>
          <div class="mb-3">
            <label for="cin" class="col-form-label">CIN :</label>
            <input type="text" class="form-control" id="cin">
          </div>
          <div class="mb-3">
            <label for="filiere" class="col-form-label">Filière :</label>
            <input type="text" class="form-control" id="filiere">
          </div>
          <div class="mb-3">
            <label for="filiere" class="col-form-label">numéro de télèphone :</label>
            <input type="text" class="form-control" id="filiere">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Envoyer message</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal END -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</x-app-layout>