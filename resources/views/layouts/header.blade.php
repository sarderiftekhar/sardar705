<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  
  <title>Sardar Dashboard</title>
  
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/izitoast/css/iziToast.min.css')}}">
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/pretty-checkbox/pretty-checkbox.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/jquery-selectric/selectric.css')}}">
  
  {{-- Datatables --}}
  <link rel="stylesheet" href="{{asset('assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">

  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/favicon.ico')}}"/>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/favicon.ico')}}">


</head>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
@extends('layouts.navbar')      
@extends('layouts.sidebar')      