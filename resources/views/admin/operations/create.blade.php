
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ajouter Oeuvre</title>
        
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
        
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success')}}
                                    </div>
                                @endif
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ajouter Oeuvre</h3></div>
                                    <div class="card-body">
                                       
                                        <form  action="{{ route('Oeuvre.store') }}" enctype="multipart/form-data" method="POST">
                                            @csrf

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="titre" type="text" placeholder="titre" />
                                                       
                                                        <label for="titre">Titre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="auteur" type="text" placeholder="auteur" />
                                                        <label for="auteur">Auteur</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="annee"  type="date" placeholder="date" />
                                                <label for="annee">Date publication</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <textarea
                                                        name="description" 
                                                        class="form-control" 
                                                        
                                                        placeholder="Enter desc">
                                                       
                                                        
                                                    </textarea>                    
                                                    <label for="description">Description</label>
                                                    </div>
                                                </div>
                                                <div class="form group">
                                                    <label for="photo">Image</label>
                                                    <input class="form-control" type="file" name="image" >
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="categorie">
                                                        <label for="category_id">Categorie</label>
                                                        <select class="form-control" 
                                                            id="category_id" 
                                                            name="category_id" 
                                                            value="">
                                                            @foreach($categories as $cat)
                                                                <option value="{{$cat->id}}">{{$cat->nom}}</option>
                                                            @endforeach 
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="qt" type="number" placeholder=" qt" />
                                                        <label for="qt">Qt</label>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                                <button type="submit"  class="btn btn-primary">Ajouter</button>
                                            
                                        </form>
                                        
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ url('Oeuvre') }}">Retour</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
    </body>
</html>
