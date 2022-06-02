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
    

</x-app-layout>