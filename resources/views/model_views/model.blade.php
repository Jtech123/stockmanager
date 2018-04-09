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
                                @if (in_array($field['type'], ['button', 'checkbox', 'color', 'date', 'datetime-local', 'email', 'file', 'hidden', 'image', 'month', 'number', 'password', 'radio', 'range', 'reset', 'search', 'submit', 'tel', 'text', 'time', 'url', 'week']))
                                    <div class="form-group">
                                        <label for="<?=$field['name']?>">@lang($field['label'])</label>
                                        <input readonly type="<?=$field['type']?>" id="<?=$field['name']?>" name="<?=$field['name']?>" value="<?= !empty($product[$field['name']]) ? $product[$field['name']] : ''?>" class="form-control">
                                    </div>
                                @else

                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
