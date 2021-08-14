<div class="form-group">
	{!!Form::label('Name','Name:')!!}
	{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Fill it with the movie name'])!!}
</div>
<div class="form-group">
	{!!Form::label('Cast','Cast:')!!}
	{!!Form::text('cast',null,['class'=>'form-control', 'placeholder'=>'Fill it with the Cast'])!!}
</div>
<div class="form-group">
	{!!Form::label('Direction','Direction:')!!}
	{!!Form::text('direction',null,['class'=>'form-control', 'placeholder'=>'Fill it with the Director'])!!}
</div>
<div class="form-group">
	{!!Form::label('Duration','Duration:')!!}
	{!!Form::text('duration',null,['class'=>'form-control', 'placeholder'=>'Fill it with the duration'])!!}
</div>
<div class="form-group">
	{!!Form::label('Poster','Poster:')!!}
	{!!Form::file('path')!!}
</div>
<div class="form-group">
	{!!Form::label('Genre','Genre:')!!}
	{!!Form::select('genre_id',$genres)!!}
</div>