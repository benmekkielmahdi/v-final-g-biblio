<x-app-layout>
      
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Categories</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
               
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Oeuvres</div>
                            <a class="nav-link" href="{{ url('/Oeuvre') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                                Oeuvres
                            </a>
                          
                            <div class="sb-sidenav-menu-heading">Tasks</div>
                            <a class="nav-link" href="{{ url('Category') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-bars"></i></div>
                                Categories
                            </a>
                             
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Categories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <a href="{{ url('Category/create') }}"><button  class="btn btn-success" ><i class="fa fa-plus-circle" aria-hidden="true"></i> Ajouter Category</button></a>

                      <br>
                      <br>
                           
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                            <table id="datatablesSimple" class="table-bordred">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nom</th>
                                    <th>actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->nom }}</td>
                                    
                                    

                                    </td>
                                    <td>
                                    <form action="{{ route('Category.destroy',$cat) }}" method="POST">
                                        @csrf
                                        @method("DELETE")

                                        <button type="submit" onclick="return confirm('voulez-vous vraiment supprimer?')"  class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                        <a type="button"  href="{{ route('Category.edit',$cat)}}"   class="btn btn-warning btn-sm " ><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>

                                    </form>  

                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; BibliothequeENS 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
</x-app-layout>
      