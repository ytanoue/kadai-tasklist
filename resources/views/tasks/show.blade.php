@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id = {{ $tasks->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $tasks->status }}</td>
	</tr>
	<tr>
            <th>コンテンツ</th>
            <td>{{ $tasks->content }}</td>
        </tr>
    </table>
	{{-- メッセージ編集ページへのリンク --}}
	{!! link_to_route('tasks.edit', 'このメッセージを編集', ['task' => $tasks->id], ['class' => 'btn btn-light']) !!}
	
	{{-- メッセージ削除フォーム --}}
	{!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
		{!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
	{!! Form::close() !!}
	
@endsection
