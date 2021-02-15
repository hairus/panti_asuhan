@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ url('/admin/saveUsers') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Add Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Roles</label>
                            <select name="" id="" class="form-control" required>
                                <option value="">---</option>
                                @foreach ($roles as $data)
                                <option value="{{ $data->id }}">{{ $data->status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-info">SImpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
