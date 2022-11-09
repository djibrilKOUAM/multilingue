@inject('date','App\utilitaires\Date')
@extends('layouts.app',['title'=>'BLADE'])
@section('contenu')
      {{--$date->isweekend()}}{{--correspond a echo --}}
    <?php if($date->isweekend()){?>
        {{"c'est le week-end"}}
    <?php } else{ ?>
        {{"ce n'est pas le week-end"}}
    <?php } ?>
    <br>
    @if ($date->isweekend())
        {{"c'est le week-end"}}
    @else
        {{"ce n'est pas le week-end"}}
    @endif
    <br>
    {{-- unless:a moins que --}}
    @unless($date->isweekend()){{--veut également dire if not--}}
        {{"ce n'est pas le week-end"}}
    @else
        {{"c'est le week-end"}}
    @endif
@stop