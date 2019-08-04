@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($tasks, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク名:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}

                </div>
        
              {!! Form::submit('タスクを追加する', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
    
    
@endsection