@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class=" text-dark my-4 ">
            {{ __('Profile') }}
        </h1>
        <div class="card p-4 mb-4 bg-white shadow rounded-lg">

            @include('profile.partials.update-profile-information-form')

        </div>

        <div class="card p-4 mb-4 bg-white shadow rounded-lg">


            @include('profile.partials.update-password-form')

        </div>

        <div class="card p-4 mb-4 bg-white shadow rounded-lg">


            @include('profile.partials.delete-user-form')

        </div>
    </div>
@endsection
