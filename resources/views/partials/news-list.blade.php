@foreach ($data as $value)
<tr>
    <td style="width:80%">{{ @$value->name }}</td>
    <td style="width:20%"><a href="{{ @$value->path }}" target="_blank">View</a></td>
</tr>
@endforeach
