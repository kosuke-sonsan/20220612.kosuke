@extends('layouts.layout')

@section('update')
<div class="task_table">
  <table>
    <div class="text_table">
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
    </div>
    @foreach($items as $item)
      <tr>
        <td>{{$item->created_at}}</td>
        <form action="{{ route('todo.update', ['id'=>$item->id]) }}" method="post">
          @csrf
          <td><input type="text" name="content" value="{{$item->content}}" class="text2"></td>
          <td><button class="update">更新</button></td>
        </form>
        <form action="{{ route('todo.delete', ['id'=>$item->id]) }}" method="post">
          @csrf
          <td><button class="delete">削除</button></td>
        </form>
      </tr>
    @endforeach
  </table>
</div>
@endsection