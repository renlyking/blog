id&emsp;&emsp;username&emsp;&emsp;age&emsp;&emsp;class&emsp;&emsp;telephone&emsp;&emsp;</br>
@foreach($rew as $key=>$value)
    {{$value->id}}&emsp;&emsp;
    {{$value->username}}&emsp;&emsp;
    {{$value->age}}&emsp;&emsp;
    {{$value->class}}&emsp;&emsp;
    {{$value->telephone}}&emsp;&emsp;</br>
@endforeach
<hr/>
今天星期
@if($date == '1')
一
@elseif($date == '2')
二
@elseif($date == '3')
三
@elseif($date == '4')
四
@elseif($date == '5')
五
@elseif($date == '6')
六
@else
天
@endif
{{$time}}
