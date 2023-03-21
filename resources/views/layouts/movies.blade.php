@extends('welcome')
@section('content')
@include('modals.create')

@if(session()->has('message'))
    <div class="alert alert-success">
        <strong>{{ session('message') }}</strong>
    </div>
@elseif(session()->has('delete'))
    <div class="alert alert-danger">
        <strong>{{ session('delete') }}</strong>
    </div>
@elseif(session()->has('edit'))
    <div class="alert alert-info">
        <strong>{{ session('edit') }}</strong>
    </div>
 @endif
    <div class="container">
        <a class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#create">New Movie</a>
    </div>
        <table class="table">
            <thead>
                <tr>
                    <th class="w-50">Title</th>
                    <th class="w-25">Actor/Actress</th>
                    <th class="w-25">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $item)
                    <tr>
                        <td class="w-50">{{$item->title}}</td>
                        <td class="w-25">
                            @if (empty($item->actor))
                            @include('modals.add')
                            <a data-bs-toggle="modal" data-bs-target="#add{{$item->id}}" class="btn btn-primary btn-sm">Add</a>
                            @else
                            {{$item->actor}}
                            @endif
                            
                        </td>
                        <td class="w-25">
                            <div class="form-group inline-block row align-center">
                                <div class="col-sm-3">
                                @include('modals.edit')
                                <a data-bs-toggle="modal" data-bs-target="#edit{{$item->id}}" class="btn btn-success btn-sm">EDIT</a>
                            </div>
                            <div class="col-sm-3">
                            <form method="POST" action="{{url('delete/'.$item->id)}}" for="delete"> 
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">DELETE</button>
                            </form>
                            </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection