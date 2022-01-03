<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{ asset('style/global.css') }}" rel="stylesheet">
    @yield('mainstyle')
</head>

<body>
    <div class="wrp-page d-flex flex-wrap">
        <div class="left">
            <!-- sidebar -->
            <div class="wrap-side text-white bg-primer" id="sidebar">
                <div class="d-flex flex-column flex-shrink-0 p-3">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-4">Logo</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link text-white {{ Request::is('/') ? 'active' : '' }}">
                            Data Karyawan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/payroll" class="nav-link text-white {{ Request::is('/payroll') ? 'active' : '' }}">
                            Payroll
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/report" class="nav-link text-white {{ Request::is('/report') ? 'active' : '' }}">
                            Report Payroll
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- sidebar -->
        </div>

        <div class="right">
            <header class="py-3 border-bottom mb-3" id="nav-header">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="flex-shrink-0 dropdown flex-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </header>     
            <!-- content -->
            <div class="wrap-content d-flex flex-column flex-shrink-0" id="content">
                <!-- @stack('before-content') -->
                @yield('main-content')
                <!-- @stack('after-content') -->
            </div>
            <!-- end-content -->
            
            <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Sahrul Aji S 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
        </div> 
    </div>      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>