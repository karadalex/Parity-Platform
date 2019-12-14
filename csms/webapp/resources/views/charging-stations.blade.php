@extends('layouts.app')

@section('content')
<app>
  <v-container grid list-md>
    <v-layout wrap>
      <v-flex xs12>
        <h1 class="accent-text">{{ __('Charging Stations') }}</h1>
      </v-flex>

      <v-flex xs12>
        <google-map></google-map>
      </v-flex>
    </v-layout>
  </v-container>
</app>
@endsection
