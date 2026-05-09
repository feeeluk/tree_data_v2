@extends('layouts.homepage')

@section('page-content')

<div class="loginDiv">

    <form action="" class="loginForm">

        <table class="loginTable">

            <tr>
                <td class="loginTableCol1">Username:</td>
                <td class="loginTableCol3"><input type="text"></td>
            </tr>

            <tr>
                <td class="loginTableCol1">Password:</td>
                <td class="loginTableCol3"><input type="text"></td>
            </tr>

            <tr>
                <td class="loginTableCol1"></td>
                <td class="loginTableCol3"><input type="submit" value="Log in"><input type="button" value="Cancel"></td>
            </tr>
            
        </table>

    </form>

</div>
    


@endsection