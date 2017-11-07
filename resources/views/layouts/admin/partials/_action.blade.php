@if (!empty($form_url))

    {!! Form::model($model, ['url' => $form_url, 'method' => 'delete']) !!}

    @if(!empty($show_url) && !empty($edit_url))

        <a href="{{ $show_url }}" class="btn btn-info waves-effect waves-light btn-sm">Show</a>
        <a href="{{ $edit_url }}" class="btn btn-primary waves-effect waves-light btn-sm">Edit</a>

    @elseif(empty($show_url) && !empty($edit_url))

        <a href="{{ $edit_url }}" class="btn btn-primary waves-effect waves-light btn-sm">Edit</a>

    @elseif(!empty($show_url) && empty($edit_url))

        <a href="{{ $show_url }}" class="btn btn-info waves-effect waves-light btn-sm">Show</a>

    @endif

    <button type="submit" class="btn btn-danger waves-effect waves-light btn-sm js-submit-confirm">Delete</button>

    {!! Form::close() !!}

@else

    @if(!empty($show_url) && !empty($edit_url))

        <a href="{{ $show_url }}" class="btn btn-info waves-effect waves-light btn-sm">Show</a>
        <a href="{{ $edit_url }}" class="btn btn-primary waves-effect waves-light btn-sm">Edit</a>

    @elseif(empty($show_url) && !empty($edit_url))

        <a href="{{ $edit_url }}" class="btn btn-primary waves-effect waves-light btn-sm">Edit</a>

    @elseif(!empty($show_url) && empty($edit_url))

        <a href="{{ $show_url }}" class="btn btn-info waves-effect waves-light btn-sm">Show</a>

    @endif

@endif
