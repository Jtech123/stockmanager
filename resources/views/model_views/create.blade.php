@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('messages.add', ['type' => __($title)])</div>

                    <div class="panel-body">
                        <form action="<?=$class::$insertRoute?>" method="post">
                            {{csrf_field()}}
                        @foreach($fields as $field)
                            @if (isset($field['create']) && $field['create'])
                                <div class="form-group">
                                    <label for="<?=$field['name']?>">@lang($field['label'])</label>
                                    <input type="<?=$field['type']?>" id="<?=$field['name']?>" name="<?=$field['name']?>" <?= !empty($field['required']) ? 'required' : ''?> class="form-control">
                                </div>
                            @endif
                        @endforeach
                            <div class="form-group"><input type="submit" class="form-control btn btn-success" value="@lang('messages.submit')"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
