{{ Form::open(array('url' => 'usuarios')) }}
    
    {{ Form::text('nombre') }}<br/>
    {{ Form::textArea('password') }}<br/>
    {{ Form::submit('Guardar') }}<br/>

{{ Form::close() }}