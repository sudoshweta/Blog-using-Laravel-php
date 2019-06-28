@extends('layouts.adminapp')

@section('admincontent')

<div class="container">
    <div class="row justify-content">
        <div class="col-md-16">
            <div class="card">
                  </div>
                        <div><a href="/admin/content/create" class="btn btn-primary" style="float: right;">Create Content</a>
                              
                              @if(count($contents) > 0)
                                  <table class="table table-striped">
                                      <tr>
                                          <th>Content Name</th>
                                          <th>Title</th>
                                          <th>Description</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                      </tr>
                                      @foreach($contents as $content)
                                          <tr>
                                              <td>{{$content->titleid}}</td>
                                              <td><a href="/admin/content/{{$content->id}}">{{$content->title}}</a></td>
                                              <td>{{$content->description}}</td>
                                              
                                              <td><a href="/admin/content/{{$content->id}}/edit" class="btn btn-primary" style="float: left;">Edit Content</a></td>
                                              <td>

                                              {!!Form::open(['action' => ['ContentController@destroy', $content->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                              {{Form::hidden('_method', 'DELETE')}}
                                              {{Form::submit('Delete', ['class' => 'btn btn-danger' ])}}
                                              {!!Form::close()!!}
                                            
                                            </td>
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