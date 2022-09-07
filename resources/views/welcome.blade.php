@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        @include('partials.navbar')
        <div class="row">
            <div class="col-md-4">
               <ul class="list-group">
                <li class="list-group-item">Section</li>
                <li class="list-group-item dropdown">
                   <a class="dropdown-toggle nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Department
                   </a>
                    <ul class="dropdown-menu">
                        @foreach ($departments as $item)
                            <li class="dropdown-item">{{$item->name}}</li>
                        @endforeach
                    </ul>
                </li>
                <li class="list-group-item">Office</li>
                <li class="list-group-item dropdown">
                   <a class="dropdown-toggle nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hall
                   </a>
                    <ul class="dropdown-menu">
                        @foreach ($halls as $item)
                            <li class="dropdown-item">{{$item->name}}</li>
                        @endforeach
                    </ul>
                </li>
                <li class="list-group-item dropdown">
                   <a class="dropdown-toggle nav-link"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    People
                   </a>
                    <ul class="dropdown-menu">
                        
                      <li class="dropdown-item" role="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">Add People</li>
                    
                    </ul>
                </li>
              </ul>
            </div>
            <div class="col-md-8">
                <h3 class="text-center text-primary">All The peoples</h3>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Department</th>
                    <th scope="col">Hall</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peoples as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->designation}}</td>
                            <td>{{$item->department->name}}</td>
                            <td>{{$item->hall->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    @include('partials.footer')
   @include('partials.modal')
@endsection