@extends('admin.layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.category.index') }}">Category</a>
    </li>
    <li class="breadcrumb-item active">Edit Category</li>
@endsection
@section('content')


<form action="{{ route('admin.category.update',$data->id) }}" class="form" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <b>Edit Category</b>
            </div>
            <div class="float-right">
                
            </div>
            
        </div>

        <div class="card-body">
            
            
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required placeholder="Name" value="{{ old('name',$data->name) }}">
                </div>
              

                <div class="form-group">
                    <button class="btn btn-success" name="status" value="Publish">
                        Save
                    </button>
                </div>
        </div>
    </div>
</form>
@endsection

