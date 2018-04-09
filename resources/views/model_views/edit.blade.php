@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('messages.detail', ['type' => __($title)])</div>

                    <div class="panel-body">
                        @foreach($fields as $field)
                            @if (isset($field['edit']) && $field['edit'])
                                {!!$field['property']::edit($field, $item[$field['name']])!!}
                            @endif
                        @endforeach
                            <div class="form-group"><input type="submit" class="form-control btn btn-success" value="@lang('messages.submit')"></div>
                    </div>

                    <div class="panel-footer">
                        <div class="btn-group" role="group" aria-label="manage">
                            <a href="{{$item::$detailRoute . $item['id']}}" class="btn btn-primary">@lang('messages.back')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
