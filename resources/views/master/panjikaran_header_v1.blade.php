नेपाल सरकार (Government of Nepal)<br>
गृह मन्त्रालय (Ministry of Home Affairs)<br>
राष्ट्रिय प्रमाणपत्र तथा पञ्जीकरण विभाग (Department of National ID and Civil Registration)<br>

<b>स्थानीय पञ्जीकाधिकारीको कार्यालय (Office of Local Registrar)</b><br>
@if(auth()->user()->isAdmin != 0)
वडा नं.<b>    
{{Helpers::convertNos(auth()->user()->isAdmin)}} , 
@endif
{{$local_state[0]->local_state_name}} </b><br>
@if(auth()->user()->isAdmin != 0)
Ward No.<b>{{auth()->user()->isAdmin}} , </b>
@endif
<b>{{$local_state[0]->local_state_name_english}} </b><br>
<b>{{$provience[0]->province_name}},</b>
<b>{{$provience[0]->province_name_english}}</b>