@extends('layouts.homepage')

@section('page-content')

<div id="" name="" class="loginDiv">

    <form id="" name="" class="loginForm" method="POST" action="{{ route('login') }}">
        @csrf

        <table id="" name="" class="loginTable">

            <tr>
                <td id="username_label" name="username_label" class="loginTableCol1">Username:</td>
                <td class="loginTableCol2">
                    <input id="username" name="username" type="text">
                </td>
            </tr>

            <tr>
                <td id="password_label" name="password_label" class="loginTableCol1">Password:</td>
                <td id="" name="" class="loginTableCol2">
                    <input type="password" id="password" name="password">
                </td>
            </tr>

            <tr>
                <td id="" name="" class="loginTableCol1"></td>
                <td id="" name="" class="loginTableCol2">
                    <input id="submit" name="submit" type="submit" value="Log in">
                    <input id="cancel" name="cancel" type="button" value="Cancel">
                </td>
            </tr>
            
        </table>

    </form>

</div>

@endsection