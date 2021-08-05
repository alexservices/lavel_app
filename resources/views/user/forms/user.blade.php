<div class="form-group">
{!!Form::label('Name:')!!}
{!!Form::text('name',null,['class'=>'form-control','placeholder' =>'Fill it with your name'])!!}
</div>
<div class="form-group">
{!!Form::label('Email:')!!}
{!!Form::text('email',null,['class'=>'form-control','placeholder' =>'Fill it with your email'])!!}
</div>
<div class="form-group">
{!!Form::label('Password:')!!}
{!!Form::password('password', ['class' => 'form-control','placeholder' =>'Fill it with your password'])!!}
</div>
