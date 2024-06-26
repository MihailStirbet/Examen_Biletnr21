@extends('admin.layouts.app')


@section('breadcrumb')
    <li class="breadcrumb-item active">Page</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="float-left">
            <b>
                Page
            </b>
        </div>
        <div class="float-right">
            <a href="{{ route('admin.page.create') }}" class="btn btn-primary">
                Add Page
            </a>
        </div>
    </div>
        
    <div class="card-body">

        @include('admin.layouts.includes.search_form')
        
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Title
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>
                            {{ $data->title }}
                        </td>
                        <td>
                            {{ $data->status }}
                        </td>
                        <td>
                            <form action="{{ route('admin.page.destroy',$data->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <a href="{{ route('admin.page.edit',$data->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                <button class="btn btn-sm btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        {!! $datas->links() !!}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
