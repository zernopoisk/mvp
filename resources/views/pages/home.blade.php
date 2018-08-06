@extends('layouts.master')
@section('title', 'Покупка и продажа зерна в Украине')
@section('content')
<h3>
    <a href="/categories/product" title="Продам пшеницу">Пшеница</a>
    <small class="text-muted ml-3">посл. объявление 30 мин. тому</small>
</h3>
<table class="table">
    <tbody>
        <tr>
            <th scope="row">200т.</th>
            <td>3 кл.</td>
            <td><a href="/offer/2">нал/безнал, c НДС. CPT.</a></td>
            <td>хоз-во</td>
            <td>Дрогобич</td>
            <td>05 Авг.</td>
        </tr>
        <tr class="table-warning">
            <th scope="row">700т.</th>
            <td>фураж</td>
            <td><a href="/offer/2">Ф2, с места. Качество ДСТУ.</a></td>
            <td>хоз-во</td>
            <td>Донецк</td>
            <td>05 Авг.</td>
        </tr>
        <tr>
            <th scope="row">25т.</th>
            <td>3 кл.</td>
            <td><a href="/offer/2">форма оплати 2. урожай 2018</a></td>
            <td>частное</td>
            <td>Яготин</td>
            <td>05 Авг.</td>
        </tr>
        <tr>
            <th scope="row">25т.</th>
            <td>3 кл.</td>
            <td><a href="/offer/2">продам пшеницю зi складу. Ф2. Зiбрана до дощiв.</a></td>
            <td>хоз-во</td>
            <td>Жашкiв</td>
            <td>05 Авг.</td>
        </tr>
        <tr class="table-warning">
            <th scope="row">350т.</th>
            <td>3 кл.</td>
            <td><a href="/offer/2">Продаж з ПДВ. Зберiгаеться на господарствi. Запропонуйте цiну.</a></td>
            <td>хоз-во</td>
            <td>Бурынь</td>
            <td>05 Авг.</td>
        </tr>
        <tr>
            <th scope="row">200т.</th>
            <td>фураж</td>
            <td><a href="/offer/2">с НДС, от 1-го посредника с элеватора</a></td>
            <td>посредник</td>
            <td>Богодухов</td>
            <td>05 Авг.</td>
        </tr>
    </tbody>
</table>
@endsection