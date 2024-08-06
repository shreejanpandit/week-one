<x-layout title="Home - My Portfolio">
<h2>About Me</h2>
<p>
    Hello, I'm <b>{{$my_details["name"]}}</b>.
    I am form <b>{{$my_details["address"]}}</b>. 
    I am currently learning <b>{{$my_details["learn"]}}</b>. 
    I recently complete my bachelor in software engineering.
</p>
<img src='{{$my_details["personal_image"]}}' alt="no image found" height="300" width="300" >
</x-layout>