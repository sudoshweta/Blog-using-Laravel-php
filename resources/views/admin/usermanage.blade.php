@extends('layouts.adminapp')

@section('admincontent')
<div class="container">
    <div class="row justify">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                    <div><a href="/register" class="btn btn-primary" style="float: right;">Create User</a>
                          
                          @if(count($users) > 0)
                              <table class="table table-striped">
                                  <tr>
                                      <th>Name</th>
                                      <th>Gender</th>
                                      <th>Email</th>
                                      <th>Contact</th>
                                      <th>State</th>
                                      <th>Action</th>
                                  </tr>
                                  @foreach($users as $user)
                                      <tr>
                                          <td>{{$user->name}} {{$user->last_name}}</td>
                                          <td>{{$user->gender}}</td>
                                          <td>{{$user->email}}</td>
                                          <td>{{$user->contact}}</td>
                                          <td>{{$user->state}}</td>

                                          <td><a href="" class="btn btn-primary" style="float: left;">Edit User</a><a href="" class="btn btn-primary" style="float: right;">Delete User</a></td>
                                         
                                      </tr>
                                  @endforeach
                              </table>
                          @else
                              <p>You have no Users</p>
                          @endif
                
            </div>
        </div>
    </div>
</div>
@endsection