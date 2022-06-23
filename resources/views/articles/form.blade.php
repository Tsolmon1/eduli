
<div class="form-group">
    {!! Form::label('category_id','Ангилал:') !!}
    {!! Form::select('category_id', $categories, null, ['id' => 'tag_list','class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('country_list','Улсын сонголт:') !!}
    {!! Form::select('country_list[]', $countries, 'country_list', ['class'=>'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::label('title','Гарчиг:') !!}
    {!! Form::text('title',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('info','Товч:') !!}
    {!! Form::text('info',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('thumbnail','Мэдээний зураг:') !!}
    {!! Form::text('thumbnail',null, array('class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('content','Агуулга:') !!}
    {!! Form::textarea('content', null, ['id' => 'editor','class'=>'form-control ']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at','Нийтэлсэн хугацаа:') !!}
    {!! Form::input('date', 'published_at', $article->published_at, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('image','facebook мэдээний зураг:') !!}
    {!! Form::text('image',null, array('class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('type','type:') !!}
    {!! Form::text('type',null, array('class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary ']) !!}
</div>

