@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('messages.detail', ['type' => __($title)])</div>

                    <div class="panel-body">
                        @foreach($fields as $field)
                            @if (isset($field['detail']) && $field['detail'])
                                {!!$field['property']::detail($field, $item[$field['name']])!!}
                            @endif
                        @endforeach
                    </div>

                    <div class="panel-footer">
                        <div class="btn-group" role="group" aria-label="manage">
                            <a href="{{$item::$overviewRoute}}" class="btn btn-primary">@lang('messages.back')</a>
                            <a href="{{$item::$editRoute . $item['id']}}" class="btn btn-warning">@lang('messages.edit')</a>
                            <a href="{{$item::$deleteRoute . $item['id']}}" class="btn btn-danger">@lang('messages.delete')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
