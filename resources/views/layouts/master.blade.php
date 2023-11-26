<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>@yield('title','Index')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
        .main{
        display:flex;
        }
        .main > .side-left{
        background-color: #cff;
        flex:1;
        }
        .main > .content{
        flex: 6;
        }
        </style>
    </head>
    <body>
    <div class="wrapper">
        @include('layouts.navbar')
        <div class="main">
            <div class="side-left">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Employees</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                            <a class="nav-link" href="/employees">Employee List</a>
                            </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/employees/create">New Employee</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Department</button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/departments">Department List</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/departments/create">New Department</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            <div class="content">
                @yield('main')
                    </div>
                </div>
                <div class="footer">
            </div>
        </div>   
    </body>
</html>