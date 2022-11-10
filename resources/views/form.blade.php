

<h1>Formulário com Collective</h1>

<p>
    <a href="{{route('form.index')}}">Home</a>
</p>

{{ Form::text('name', null, ['class' => 'col-12 col-md-6']) }}
{{ Form::email('email', null, ['class' => 'col-12 col-md-6']) }}
{{ Form::password('password', ['class' => 'col-12 col-md-6']) }}

{{ Form::submit('Salvar') }}
