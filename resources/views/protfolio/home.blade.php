<x-layout title="Home - My Portfolio">
<h2>About Me</h2>
<p>Hello, I'm <b>{{$my_details["name"]}}</b>.I am form {{$my_details["address"]}}. I am currently learinng {{$my_details["learn"]}}. </p>
<img src='{{$my_details["personal_image"]}}' alt="no image found" height="300" width="300" >
</x-layout>