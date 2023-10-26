Mail inviata da: {{{$data->name}}} <br>
eMail: {{{$data->email}}} <br>
Motivo del contatto:{{{$data->subject}}} <br>
<br>
Messaggio: <br>
<br>
{{{$data['message']}}} <br>
<br>
<br>
Se vuoi renderlo revisore clicca qui: <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore.</a>
