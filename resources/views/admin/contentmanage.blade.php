@extends('layouts.adminapp')

@section('admincontent')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                  </div>
                        <div><a href="/register" class="btn btn-primary" style="float: right;">Create Content</a>
                              
                              @if(count($contents) > 0)
                                  <table class="table table-striped">
                                      <tr>
                                          <th>Content Name</th>
                                          <th>Title</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                      </tr>
                                      @foreach($contents as $content)
                                          <tr>
                                              <td>{{$content->titleid}}</td>
                                              <td><a href="admin/content/{{$content->id}}">{{$content->title}}</a></td>
                                              <td>{{$content->description}}</td>
                                              
                                              <td><a href="" class="btn btn-primary" style="float: left;">Edit Content</a>
                                          </tr>
                                      @endforeach
                                  </table>
                              @else
                                  <p>You have no Content</p>
                              @endif
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection