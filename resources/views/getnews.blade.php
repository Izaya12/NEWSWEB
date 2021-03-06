<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL('/css/index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CDU NEWS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <li ><a style="background-color:#AFEEEE" class="nav-link active" aria-current="page" href="/index">Home</a></li> 
    <li><a style="background-color: #AFEEEE" class="nav-link" href="/tabloid">Tabloid</a></li>
    <li><a style="background-color: #AFEEEE" class="nav-link" href="/government">Government</a></li>
    <li><a style="background-color: #AFEEEE" class="nav-link" href="/sports">Sports</a></li>
    <li><a style="background-color: #AFEEEE" class="nav-link" href="/entertainment">Entertainment</a></li>
    <li><a style="background-color: #AFEEEE" class="nav-link" href="/getlotto">Get Lotto</a></li>
    <li><a style="background-color: #AFEEEE" class="nav-link" href="/recommended">Recommended</a></li>
    <li><a style="background-color: #AFEEEE" class="nav-link" href="/promotional">Promotional</a></li>
    <li><a style="background-color: #AFEEEE" class="nav-link" href="/ads">Ads</a></li>
    </div>
  </div>
</nav>

<body style="background-color: #D3D3D3" ></body>


<div>
  <ul>
@foreach ($data['result'] as $dat)



<p> ID: <b>{{ $dat['id']}}</p></b>

<p> Category: {{ $dat['category']}}</p>

<p> Source: {{ $dat['source']}}</p>

<p> Item URL: {{ $dat['item_url']}}</p>

<p> Headline: {{ $dat['headline']}}</p>

<p> Image: {{ $dat['image']}}</p>

<p> Content: {{ $dat['content']}}</p>

@endforeach
</ul>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>