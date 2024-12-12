@extends('layouts.default')
<style>
th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
}

tr:nth-child(odd) td {
    background-color: #FFFFFF;
}

td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
}

svg.w-5.h-5 {
    width: 150px;
    height: 70px;
}
</style>

<body>
    <header class="header">
        <div class="header__inner">
                【商品一覧画面】
        </div>
    </header>
    <main>
        <tr>商品一覧</tr>
        <table>
            @csrf
            @foreach ($fruits as $fruits)
            <tr>
                <td>
                    {{$fruits->name}}
                    {{$fruits->price}}
                </td>
            </tr>
            @endforeach
        </table>
    </main>
</body>
