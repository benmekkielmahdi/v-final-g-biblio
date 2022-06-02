
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Admin Dashboard</title>
</head>
<body>
    
</body>
</html>

@if(auth::user()->role==1)

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.all.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
<div class="col-md-12">

<a href="{{ url('/dashboard') }}"><button  class="btn btn-secondary" ><i class="fa fa-home" aria-hidden="true"></i>
Accueil</button></a>
<h1>Liste des ouvrages disponibles</h1>
<a href="{{ url('Oeuvre/create') }}"><button  class="btn btn-primary" ><i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter Oeuvre</button></a>
<a href="{{ url('Category') }}"><button  class="btn btn-primary" > Liste Categories</button></a>

<hr>
<div class="card-body">
    <div class="table table-responsive">
        <table id="datatable" class="table-bordred">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>auteur</th>
                    <th>date de publication</th>
                    <th>description</th>
                    <th>category</th>
                    <th>qt</th>
                </tr>
            </thead>
            <tbody>
                @foreach($oeuvre as $oeuvre)
                <tr>
                    <td>{{ $oeuvre->id }}</td>
                    <td>{{ $oeuvre->titre }}</td>
                    <td>{{ $oeuvre->auteur }}</td>
                    <td>{{ $oeuvre->annee }}</td>
                    <td>{{ $oeuvre->description }}</td>
                    <td>{{ $oeuvre->category_id}}</td>
                    <td>{{ $oeuvre->qt }}</td>
                    <td>
                        <form action="{{ route('Oeuvre.destroy',$oeuvre) }}" method="POST">
                            @csrf
                            @method("DELETE")

                            <button type="submit" onclick="return confirm('voulez-vous vraiment supprimer?')"  class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        <a type="button"  href="{{ route('Oeuvre.edit',$oeuvre)}}"   class="btn btn-warning btn-sm " ><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>

                        </form>

                    </td>
                    <td>
                        @if(auth::user()->role==1)
                        
                        <!--data-toggle="modal" data-target="#exampleModal"-->
                        
                        @endif
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endif

