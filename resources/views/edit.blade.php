<h1>Editar {{ $user->name }}</h1>

{{ Form::model($user, []) }}
@method('put')
@include('form')

{{ Form::close() }}
