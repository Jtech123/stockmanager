@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang($class::$title)s</div>

                    <div class="panel-body">
                        <p>@lang('messages.item_count', ['count' => count($items)])</p>
                        @if (!empty($items))
                            <table class="table">
                                <tr>
                                    @foreach($headings as $heading)
                                        <th>@lang($heading)</th>
                                    @endforeach
                                    <th><span class="pull-right">@lang('messages.manage')</span></th>
                                </tr>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{$item['name']}}</td>
                                        <td>{{$item['quantity']}}</td>
                                        <td>{{$item['article_number']}}</td>
                                        <td>
                                            <div class="btn-group pull-right" role="group" aria-labelledby="manage">
                                                <a href="{{$class::$detailRoute . $item['id']}}" class="btn btn-primary">@lang('messages.detail')</a>
                                                <a href="{{$class::$editRoute . $item['id']}}" class="btn btn-warning">@lang('messages.edit')</a>
                                                <a href="{{$class::$deleteRoute . $item['id']}}" class="btn btn-danger">@lang('messages.delete')</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">@lang('messages.manage')</div>
                    <div class="panel-body">
                        @if (isset($creatable) && $creatable)
                            <a href="{{$class::$createRoute}}" class="btn btn-success">@lang('messages.add', ['type' => $class::$title])</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
